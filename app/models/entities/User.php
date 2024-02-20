<?php

namespace App\Models\Entities;

use App\Models\DefaultModel as DefaultModel;

require_once(_APP . "models/DefaultModel.php");

class User extends DefaultModel implements EntityInterface
{
    // declara as principais as principais colunas da tabela
    private $email;
    private $password;
    private $name;
    private $sap_protocol;
    protected $tableName = 'users';

    public function __construct(array $attr){
        parent::__construct();
        foreach($attr as $key => $value){
            $this->$key = $value;
        }
    }

    public function getAll(){
        $query = "select * from :table";
        $statement = $this->conn->prepare($query);
        $statement->bindValue(':table', $this->tableName);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function save(){
        $keys = $this->bindParams();
        $columns = [];

        foreach($this as $key => $value ){
            if($key !== 'tableName' && trim($key) != 'conn'){
                array_push($columns, $key);
            }
        }
        $query = "insert into $this->tableName (" . implode(", ",$columns) . ") VALUES ($keys)";
        $statement = $this->conn->prepare($query);
        $this->bindValues($statement);

        $statement->execute();
        
        return $this->conn->lastInsertId();
    }

     # Define os parâmetros da query
     public function bindParams(){
        $keys = [];

        foreach($this as $key => $value ){
            if($key !== 'tableName' && $key !== 'conn')
                array_push($keys, ":" . $key);
        }
        return implode(", ", $keys);
    }

    # Carrega o valor do campo no parâmetro preparado
    public function bindValues($stmt){
        $keyParam = '';

        foreach($this as $key => $value ){
            if($key !== "conn" && $key !== 'tableName'){
                $keyParam = ":" . $key;
                $stmt->bindValue($keyParam, $value, \PDO::PARAM_STR);
            }
        }
    }

    public function getById($id){}
}