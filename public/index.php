<?php
use Slim\Factory\AppFactory;

require_once __DIR__ . '/../vendor/autoload.php';
$app = AppFactory::create();


define("_APP", __DIR__. "/../app/");

$configs = json_decode(file_get_contents(__DIR__ . "/../env.json"), true);
define("CONFIGS", $configs);

//Carrega configurações do template engine
require_once _APP . "/config/twigConfig.php";
require_once _APP . "middleware/Verify.php";

$app->add($loggedMiddleware);
$app->addRoutingMiddleware();

# Configurando Conexão com base de dados
require_once _APP . "routers/index.php";

$app->run();
