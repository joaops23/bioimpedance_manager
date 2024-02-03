<?php
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$twig = Twig::create(__DIR__ . "/../app/views/", ['cache' =>  false]);

//criando middleware para templates
$app->add(TwigMiddleware::create($app, $twig));

require_once __DIR__ . "/../app/routers/index.php";

$app->run();
