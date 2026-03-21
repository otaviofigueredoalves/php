<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Exception;
use App\Core\Router;
use App\Controllers\HttpResponseError;

try{
    $url = $_GET['url'] ?? trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'); // se tiver usando apache $_GET['url] é capturado, se usar o php -S localhost:8000 -t public, o outro captura

    $router = new Router(); // instancia o roteador
    $router->dispatch($url); // executa o método passando a url
    // var_dump($url);

} catch (Exception $e){
    $error = new HttpResponseError();
    $error->notServer($e);   
}
