<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$app = AppFactory::create();


require_once __DIR__ . "/../routers/index.php";

$app->run();
