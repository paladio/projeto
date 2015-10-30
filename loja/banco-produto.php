<?php

require_once("conecta.php");


$produtos = new Produto();

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
    while ($produto_atual = mysqli_fetch_assoc($resultado)) {
        $produto = new Produto();
        $produto->id = $array['id'];
        $produto->nome = $array['nome'];
        $produto->preco = $array['preco'];
        $produto->descricao = $array['descricao'];
        $produto->usado = $array['usado'];
        $produto->categoria_id = $array['categoria_id'];
        
        array_push($produtos, $produto);
    }
    return $produtos;
}

function insereProduto($conexao, $produto) {
    if (array_key_exists('usado', $_POST)) {
        $produto->usado = "true";
    } else {
        $produto->usado = "false";
    }
    $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$produto->nome}', '{$produto->preco}', '{$produto->descricao}', '{$produto->categoria_id}', {$produto->usado})";
    return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado) {
        if(array_key_exists('usado', $_POST)) {
        $produto->usado = "true";
    } else {
        $produto->usado = "false";
    }
    $query = "update produtos set nome = '{$produto->nome}', preco = '{$produto->preco}', descricao = '{$produto->descricao}',categoria_id = '{$produto->categoria_id}', usado = '{$produto->usado}' where id = '{$produto->id}'";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function removeProduto($conexao, $id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}
