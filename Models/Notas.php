<?php

namespace Models;
use Core\Model;


class Notas extends Model{
    public $titulo;
    public $descricao;

    public function buscarNotas()
    {
        $sql= "SELECT * FROM notas";
        return $this->SelectRow($sql);
    }
    public function criarNota()
    {
        $sql= "INSERT INTO notas (titulo, descricao) VALUES ('{$this->titulo}', '{$this->descricao}')";
        return $this->query($sql);
    }
    public function deletarNota($id){
        $sql = "DELETE FROM notas WHERE id = $id";
        return $this->query($sql);
    }
    
}