<?php


return [

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
        "url" => "/notas/form_cadastrar",
        "name" => "exibir-cadastro",
        'controller' => \Controllers\Notas::class,
        'method' => 'exibirCadastro'
    ],

    [
        "url" => "/notas/cadastrar",
        "name" => "cadastrar-notas",
        'controller' => \Controllers\Notas::class,
        'method' => 'cadastrarNotas'
    ],
    [
        "url" => "/notas/deletar",
        "name" => "deletar-notas",
        'controller' => \Controllers\Notas::class,
        'method' => 'deletarNotas'
    ],
    [
        "url" => "/notas/editar",
        "name" => "editar-notas",
        'controller' => \Controllers\Notas::class,
        'method' => 'editarNotas'
    ],


];

