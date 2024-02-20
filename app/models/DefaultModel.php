<?php

namespace App\Models;

require_once __DIR__ . "/entities/Entity.php";

abstract class DefaultModel extends \PDO 
{

    protected \PDO $conn;
    protected $tableName;

    #Realiza a conexão com o banco de dados
    public function __construct()
    {
        $driver = CONFIGS['DB_DRIVER'] . ":host=" . CONFIGS['DB_HOST'] . ";dbname=" . CONFIGS['DB_NAME'];
        $this->conn = new \PDO($driver, CONFIGS['DB_USER'], CONFIGS['DB_PASS']);
    }

}