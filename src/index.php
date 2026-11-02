<?php
include_once "./vendor/autoload.php";
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
use Ciclost\Proyecto1\Controllers\PeliculaController;
use Ciclost\Proyecto1\Controllers\UserController;

//herramienta para cargas las variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->Load();



$router = new RouteCollector();

//filtro para controlar si se puede entrar o no
$router->filter('auth', function(){
    if(!isset($_SESSION['user']))
    {
        header('Location: /login');

        return false;
    }
});
// API REST USANDO HTML
// Rutas de usuario
//falta
$router ->get('/user/create',[UserController::class,'create'],['before' => 'auth']);
$router ->get('/register',[UserController::class,'create']);
$router ->get('/user/{id}/edit',[UserController::class,'edit'],['before' => 'auth']);
$router ->get('/user',[UserController::class,'index'],['before' => 'auth']);
$router ->get('/user/{id}',[UserController::class,'show'],['before' => 'auth']);
$router->post('/user',[UserController::class,'store']);
$router ->put('/user/{id}',[UserController::class,'update'],['before' => 'auth']);
$router ->delete('/user/{id}',[UserController::class,'destroy'],['before' => 'auth']);

$router ->get('/login',[UserController::class,'login']);
$router->post('/signin',[UserController::class,'signin']);
$router->post('/logout',[UserController::class,'logout']);

//-----------------------------------------------------




// ===== FRONTEND =====
$router->get('/', function() {
    include "app/Views/frontend/frontend.index.php";
});

$router->get('/catalogo', function() {
    include "app/Views/frontend/template/frontend.catalog.php";
});

$router->get('/serie', function() {
    include "app/Views/frontend/template/frontend.serie.php";
});

$router->get('/lector', function() {
    include "app/Views/frontend/template/frontend.lector.php";
});



$router->get('/perfil', function() {
    include "app/Views/frontend/template/frontend.perfil.php";
});

$router->get('/mi-lista', function() {
    include "app/Views/frontend/template/frontend.perfil.php";
});

$router->get('/historial', function() {
    include "app/Views/frontend/template/frontend.perfil.php";
});

$router->get('/configuracion', function() {
    include "app/Views/frontend/template/frontend.perfil.php";
});

// ===== BACKEND =====
$router->get('/admin', function() {
    include "app/Views/backend/backend.admin.php";

});
//RUTAS DE EJEMPLO
$router->get('/get-uuid',function() {
    return \Ramsey\Uuid\Uuid::uuid4()->toString();
});
$router->get('/obtener-pass',function() {
    include_once "ejemplos/funciones.php";
    echo create_pass();
});
$router->post('obtener-pass',function(){

});

$router->get('/add-anime', function(){                       // ← con barra
    include "app/Views/backend/admin.movie.add.anime.php";   // ← include, no include_once
});

$router->post('/ver-anime', function(){
    include_once __DIR__ . "/app/functions/file-management.php";

    $datos = [
        'titulo'      => $_POST['titulo']      ?? '',
        'duracion'    => $_POST['duracion']    ?? 0,
        'descripcion' => $_POST['descripcion'] ?? '',
        'genero'      => $_POST['genero']      ?? [],
    ];
    addAnime($datos, $_FILES);

    header("Location: /admin");
    exit;
});

$router->post('/editar-anime', function(){
    include_once __DIR__ . "/app/functions/file-management.php";

    $id    = $_POST['id'] ?? '';
    $datos = [
        'titulo'      => $_POST['titulo']      ?? '',
        'duracion'    => $_POST['duracion']    ?? 0,
        'descripcion' => $_POST['descripcion'] ?? '',
        'genero'      => $_POST['genero']      ?? [],
    ];
    updateAnime($id, $datos, $_FILES);

    header("Location: /admin");
    exit;
});

$router->post('/borrar-anime', function(){
    include_once __DIR__ . "/app/functions/file-management.php";
    $id = $_POST['id'] ?? '';
    deleteAnime($id);
    header("Location: /admin");
    exit;
});




// ===== DISPATCH =====
$dispatcher = new Dispatcher($router->getData());

$response = $dispatcher->dispatch(
    $_SERVER['REQUEST_METHOD'],
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);


echo $response;
