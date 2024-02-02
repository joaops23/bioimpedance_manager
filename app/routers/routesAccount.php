<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get("/account/login", function(Request $request, Response $response, $args){
    global $twig;
    $response->getBody()->write($twig->render('login.html', ["title" => "Login"]));
    return $response;
})->setName("Login");

?>