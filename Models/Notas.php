<?php

namespace Models;
use Core\Model;


class Notas extends Model{
    public function buscarNotas()
    {
        $sql= "SELECT * FROM notas";
        return $this->SelectRow($sql);
    }
    public function criarNota()
    {
        $sql= "INSERT INTO notas (id, titulo, descricao) VALUES (id, 'titulo', 'descricao')";
        return $this->SelectRow($sql);
    }
    
}