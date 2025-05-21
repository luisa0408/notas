<?php

namespace Controllers;
use \Models\Notas as ModelNotas;

class Notas extends \Core\BaseController{
    function teste(){
        view('notas/teste');
    }

    function exibirNotas () {
        $exibirNotas = new ModelNotas;
        $notas = $exibirNotas->buscarNotas();
        view('notas/exibir' , ['notas'=>$notas, 'texto'=>'luisa']);

    }
    function exibirCadastro () {
        view('notas/form_cadastrar');

    }
    function cadastrarNotas (){
        $cadastrarNotas = new ModelNotas;
        $cadastrarNotas->titulo = $_POST['titulo'];
        $cadastrarNotas->descricao = $_POST['descricao'];
        $cadastrarNotas->criarNota();
        header('Location: /notas/exibir');
    }
    function deletarNotas (){
        $deletarNotas = new ModelNotas;
        $deletarNotas->deletarNota($_GET['id']);
        header('Location: /notas/exibir');
        die;


    }

}

