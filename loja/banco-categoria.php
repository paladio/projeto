<?php

require_once("conecta.php");

function listaCategorias($conexao) {
    $categorias = array();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao, $query);
    while ($categoria = mysqli_fetch_assoc($resultado)) {
        $categoria->id = $array['id'];
        $categoria->nome = $array['nome'];
        array_push($categorias, $categoria);
    }
    return $categorias;
}
