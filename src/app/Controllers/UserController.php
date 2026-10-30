<?php

namespace Ciclost\Proyecto1\Controllers;

use Ciclost\Proyecto1\Class\User;
use Ciclost\Proyecto1\Interfaces\ControllerInterface;
use Ciclost\Proyecto1\Models\UserModel;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class UserController implements ControllerInterface
{

    public function index()
    {
        //Necesito preguntar al modelo y que me de  un array con todos
        //objetos que representen  todos  los usuarios que hay en la base de datos

        $usuarios = UserModel::getUsers();
        // var_dump($usuarios);
        //Tengo que crear una vista donde se muestre una tabla con todos los
        //usuarios
        include_once "app/Views/backend/admin.users.index.php";
        // include_once "";
        return "Página para ver todos los usuarios";
    }

    public function show(int $id)
    {
        $titulo = "Datos del usuario $id";
        //include_once del nuevo archivo
        return "el identificador del usuario es $id";
    }

    // Crear usuario
    public function create()
    {
        $titulo = "Creación de un nuevo usuario";
        $descripcion = "Inserta todos los datos del formulario para uso del usuario";

        include_once "app/Views/backend/admin.users.create.php";
    }

    public function store()
    {

        // recibir los datos que me llegan por el metodo post
        //  var_dump($_POST);
        //validar los datos que me han llegado
        $validation = User::validateUserCreation($_POST);

        if ($validation === true) {
            $usuario = User::createFromArray($_POST);

            if (!UserModel::saveUser($usuario)) {
                return "Ha ocurrido un error de almacenamiento";
            } else {
                // ✅ Redirigimos a la lista de usuarios y CORTAMOS la ejecución
                header("Location: /user");
                exit;
            }
        } else {
            // Ha habido un error de validación
            foreach ($validation as $error) {
                echo $error;
            }
            // Opcional: podrías hacer un return aquí también
        }

        // var_dump($usuario);

        //Enviar al modelo  la instancia del objeto que debe guardar en la base de daros

    }

    public function update(int $id)
    {
        // guardariatodo el contenido de una peticion en php lo probe en post man en put colocando el json en raw

        $datosAModificar =
            json_decode(file_get_contents("php://input"), true);

        $datosAModificar['id'] = $id;

        $validation = User::validateUserUpdate($datosAModificar);

// lee el usuario de la base de datos
        $usuarioAntiguo = UserModel::getUserById($id);

        if ($usuarioAntiguo === false) {
            return "No se ha encontrado el usuario a modificar";
        } else {
            $usuarioNuevo = User::updateFromArray($usuarioAntiguo, $datosAModificar);
            if (UserModel::updateUser($usuarioNuevo)) {
                return "Usuario modificado correctamente";
            } else {
                return "ERROR al modificar el usuario";
            }
        }
    }


    public function edit(int $id)
    {
//necesito recuperar el usuario de la b se de datos
        $usuario = UserModel::getUserById($id);
        // TODO: Implement edit() method.
        include_once "app/Views/backend/admin.users.edit.php";


    }

    public function destroy(int $id){
        if (UserModel::deleteUser($id)) {
            //si se ha borrado correctamente
            http_response_code(404);
            header('Content-Type: application/json');
            return json_encode([
                "error" => false,
                "message" => "Usuario eliminado correctamente",
                "code" => 404
            ]);

        } else {
            //si ha ocurrido algun error
        }
    }
        public function login(){
            //crear un arachivo html  con login.html copiando el codigo del frontend d ela pagina y poniendo los campos de verificacion necesarios
            // y luego validarlos con las clases que tengo
            // el formulario
            //luego cuando salga el usaurio en algun lado d ela pantalla sera el usuario que ha iniciado sesion con <?=$_SESSION['user]->getName()y algo mas
            include_once "app/Views/frontend/login.html ";


            // Recoge los datos que me ha enviado el formulario
        }

        public function signin(){
            session_start();
            // recoge los datos que me ha enviado el formulario

            //validacion
            $usuario = UserModel::getUserByEmail($_POST['email']);

            if ($usuario) {
                if (password_verify($_POST['password'], $usuario->getPassword())) {
                    // La contraseña ha sido verificada
                    session_start();
                    $_SESSION['user'] = $usuario;
                    header('Location: /user');
                } else {
                    return "La contraseña es incorrecta";
                }


            } else {
                return "No se ha podido registrar el usuario";
            }
            if(session_status()!== PHP_SESSION_ACTIVE){
                session_start();
            }
            $_SESSION['user']=$usuario;

            header("Location: /perfil");
            exit;
            //guardara en la sesion los datos necesarios de la sesion

        }

        public function logout(){
            session_destroy();
            header('Location: /');
        }

}