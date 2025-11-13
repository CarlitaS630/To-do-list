<?php 
//acá se pondrán los endpoints

require_once 'Controllers/tareasController.php';

use MiladRahimi\PhpRouter\Router;
use Laminas\Diactoros\Response\JsonResponse;

header("Access-Control-Allow-Origin: *"); // Usar "*" permite cualquier origen y puede exponer datos sensibles; en producción, reemplaza "*" por la URL específica para mayor seguridad
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");


if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$router = Router::create();

$router->get('/', function () {
    return new JsonResponse(['message' => 'ok']);
});

//GET
//CREATE
//UPDATE
$router->put('/tareas/{id}',[TareasController::class,'actTarea']);
//DELETE
$router->delete('/tareas/{id}',[TareasController::class,'delete']);
$router->dispatch();