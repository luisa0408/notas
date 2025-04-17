<?php

namespace Models;
use Core\Model;


class Notas extends Model{
    public function buscarNotas()
    {
        $sql= "SELECT * FROM notas";
        return $this->SelectRow($sql);
    }
    
}