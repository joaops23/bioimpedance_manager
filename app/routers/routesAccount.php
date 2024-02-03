<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

$app->get("/account/login", function(Request $request, Response $response, $args){
    $view = Twig::fromRequest($request);
    return $view->render($response, "login.html", ["title" => "Login"]);
})->setName("Login");

?>