<?php
use Psr\Http\Message\ResponseInterface;
use Slim\Exception\HttpNotFoundException;
use Slim\Routing\RouteContext;

$loggedMiddleware = function ($request, $handler): ResponseInterface {
    $routeContext = RouteContext::fromRequest($request);
    $route = $routeContext->getRoute();
    session_start();

    if(empty($route)) { throw new HttpNotFoundException($request); }

    $routeName= $route->getName();

    //Rotas púlicas da api
    $publicRoutesArray = array("Login", "registerLogin", 'register');

    if((empty($_SESSION['authorization']) && (!in_array($routeName, $publicRoutesArray)))){ // Se o usuário não estiver conectado e não chamar nenhuma rota pública
        
        $routeParser = $routeContext->getRouteParser();
        $url = $routeParser->urlFor('Login');

        $response = new \Slim\Psr7\Response();

        return $response->withHeader('Location', $url)->withStatus(302);
    }
    else { // se estiver logado, chama normalmente todas as rotas
        $response = $handler->handle($request);

        return $response;
    }
};