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

}




