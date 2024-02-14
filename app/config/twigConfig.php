<?php

namespace App\Config\Twig;

use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

$twig = Twig::create(_APP . "views/", ['cache' =>  false]);

//criando middleware para templates
$app->add(TwigMiddleware::create($app, $twig));

?>