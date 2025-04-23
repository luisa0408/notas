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
    function cadastrarNotas (){
        $cadastrarNotas = new ModelNotas;
        $cadastrar = $cadastrarNotas->criarNota();
        view('notas/cadastrar', ['$cadastrar'=>$cadastrar]);
    }

}




