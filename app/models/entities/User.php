<?php

namespace App\Models\Entities;

use App\Models\DefaultModel as DefaultModel;

require_once(_APP . "models/DefaultModel.php");

class User extends DefaultModel implements EntityInterface
{
    private $tableName = 'users';

    public function getAll(){
        $query = "select * from :table";
        $statement = $this->conn->prepare($query);
        $statement->bindValue(':table', $this->tableName);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id){}

    public function save(){}
}