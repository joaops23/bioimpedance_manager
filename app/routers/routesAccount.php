<?php

namespace App\Router;

use Slim\Routing\RouteCollectorProxy;
use App\Controllers\AccountController;

$app->group("/account", function(RouteCollectorProxy $group) {

    $group->get("/login", [AccountController::class, "login"])->setName("Login");

    $group->get("/register", [AccountController::class, "register"])->setName("register");

    $group->post('/registerLogin', [AccountController::class, 'verifLogin'])->setName("registerLogin");

});
?>