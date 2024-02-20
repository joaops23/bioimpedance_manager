<?php

namespace App\Controllers;

abstract class Controller
{
    protected function getBodyRequest(){
        $body = json_decode(file_get_contents("php://input"), true);
        return $body;
    }
}

?>