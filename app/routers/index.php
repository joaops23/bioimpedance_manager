<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Config to Templates engine
$loader = new \Twig\Loader\FilesystemLoader( __DIR__ . '/../views');
$twig = new \Twig\Environment($loader, [
    #'cache' => __DIR__ . '/../views/cache',
    "cache" => false
]);


$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

// Carrega rotas do módulo account
require_once __DIR__ . "/routesAccount.php";