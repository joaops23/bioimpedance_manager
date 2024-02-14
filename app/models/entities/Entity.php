<?php

namespace App\Models\Entities;

interface EntityInterface {

    public function getAll();

    public function getById($id);

    # Recupera um array chave-valor para filtrar e retorna 
    public function save();

}