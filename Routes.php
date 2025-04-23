<?php


return [

    [
        "url" => "/",
        "name" => "index",
        'controller' => \Controllers\Index::class,
        'method' => 'index'
    ],
    [
        "url" => "/notas/teste",
        "name" => "notas",
        'controller' => \Controllers\Notas::class,
        'method' => 'teste'
    ],
    [
        "url" => "/notas/exibir",
        "name" => "exibir-notas",
        'controller' => \Controllers\Notas::class,
        'method' => 'exibirNotas'
    ],
    [
        "url" => "/notas/cadastrar",
        "name" => "cadastrar-notas",
        'controller' => \Controllers\Notas::class,
        'method' => 'cadastrarNotas'
    ],


];