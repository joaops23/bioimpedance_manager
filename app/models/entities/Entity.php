<?php

namespace App\Models\Entities;

interface EntityInterface {

    public function getAll();

    public function getById($id);

    public function bindParams();

    #recebe a instância da conexão com a query preparada e seta os valores dos parâmetros
    public function bindValues($stmt);
    
    # Recupera um array chave-valor para filtrar e retorna 
    public function save();

}