<?php
require_once __DIR__.'/../autoload.php';

if(!empty($_POST)) {
    $acesso = new Entidade();
    $acesso->sairEntidade();
    $resultado = $acesso->retorno;

    foreach($resultado as $chave => $valor) {
        $resultado[$chave] = $valor;
    }
    echo(json_encode($resultado));
}