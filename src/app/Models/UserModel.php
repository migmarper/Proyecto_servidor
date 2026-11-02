<?php

namespace Ciclost\Proyecto1\Models;

use PDO;
use Ciclost\Proyecto1\Class\User;
class UserModel
{

    public static function getUsers(): array
    {
        $conexion = "";
        try {
            $conexion =
                new PDO("mysql:host=mariadb;dbname=netflix",
                    "moises", "moises");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        $sql = "SELECT * FROM users";
        $stmt = $conexion->prepare($sql);

        $stmt->execute();
//PDO::FETCH_ASSOC QUITA LOS CAMPOS DUPLICADOS 0123
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // PARA QUE SALGA POR PANTALLA

        var_dump($resultado);

        echo "EL NOMBRE DEL USUARIO ES :" . $resultado[0]['name'];
        //echo "El telefono del usuario es :".$resultado[0][3];


        var_dump($resultado);

        return User::createMultipleUsersFromArray($resultado);
    }

    public static function saveUser(User $user): bool
    {
        $conexion = "";
        try {
            $conexion = new PDO("mysql:host=mariadb;dbname=netflix", "moises", "moises");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $sql = "INSERT INTO users (name,address,phone,birthdate,password,email) 
        values (:nombre,:direccion,:telefono,STR_TO_DATE(:fechanac,'%Y-%m-%d'),:contraseya,:correo)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindValue("nombre", $user->getNombre());
        $stmt->bindValue("direccion", $user->getAddress());
        $stmt->bindValue("telefono", $user->getPhone());
        $stmt->bindValue("fechanac", $user->getBirthdate()->format('Y-m-d'));
        $stmt->bindValue("contraseya", $user->getPassword());
        $stmt->bindValue("correo", $user->getEmail());

        $stmt->execute();

        $resultado = $stmt->rowCount();

        if (!$resultado) {
            return false;
        } else {
            return true;
        }
    }

    public static function deleteUser(int $idUser): bool
    {
        $conexion = "";
        try {
            $dsn = "mysql:host=mariadb;dbname=" . $_ENV['MARIADB_DBNAME'];
            $usuarioBD = $_ENV['MARIADB_USER'];
            $passwordBD = $_ENV['MARIADB_PASSWORD'];

            $conexion = new PDO($dsn, $usuarioBD, $passwordBD);

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        $sql = "DELETE FROM users WHERE id=:ID";
        $stmt = $conexion->prepare($sql);

        $stmt->bindValue("ID",$idUser);

        $stmt->execute();

        if($stmt->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public static function  getUserById(int $idUser):User|false{
        $conexion="";
        try{
            $conexion = new PDO("mysql:host=mariadb;dbname=netflix","moises","moises");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e ->getMessage();
        }
        $sql="SELECT * FROM users where id=:id";

        $stmt =$conexion->prepare($sql);

        $stmt->bindValue("id",$idUser);

        $stmt ->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        if($resultado){
            return User::createFromArray($resultado);
        }else{
            return false;
        }
    }
    public static function  getUserByEmail(String $emailUser):User|false{
        $conexion="";
        try{
            $conexion = new PDO(
                "mysql:host=mariadb;
                dbname=netflix",
                "moises",
                "moises");
            $conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            echo $e ->getMessage();
        }
        $sql="SELECT * FROM users where email=:email";

        $stmt =$conexion->prepare($sql);

        $stmt->bindValue("email",$emailUser);

        $stmt ->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if($resultado){
            return User::createFromArray($resultado);
        }else{
            return false;
        }
    }
    public static function updateUser(User $user):bool{
        $conexion = "";
        try {
            $conexion = new PDO("mysql:host=mariadb;dbname=netflix", "moises", "moises");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $sql="UPDATE users SET address=:direccion,birthdate=STR_TO_DATE(:fechanac,'%Y-%m-%d'),
                 email=:correo,
                 password=:contrasenya,
                 phone=:telefono,
                 name=:nombre WHERE id=:id";
        $stmt = $conexion->prepare($sql);
        $stmt->bindValue("nombre", $user->getNombre());
        $stmt->bindValue("direccion", $user->getAddress());
        $stmt->bindValue("telefono", $user->getPhone());
        $stmt->bindValue("fechanac", $user->getBirthdate()->format('Y-m-d'));
        $stmt->bindValue("contrasenya", $user->getPassword());
        $stmt->bindValue("correo", $user->getEmail());

        $stmt->bindValue("id",$user->getId());

        $stmt->execute();

        $resultado = $stmt->rowCount();

        if (!$resultado) {
            return false;
        } else {
            return true;
        }
    }

}