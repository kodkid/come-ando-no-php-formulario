<?php

session_start();
require("banco.php");

if (array_key_exists("nome", $_GET) && $_GET["nome"] !== "") {

    $produto = [
        'nome' => $_GET['nome'],
        'descricao' => $_GET['descricao'] ?? "",
        'preco' => $_GET['preco'] ?? "",
        'qtdEstoque' => $_GET['qtdEstoque'] ?? ""
    ];

    insertProduto($pdo, $produto);

    header('Location: index.php');
    exit;
}

$listaProduto = recuperarProduto($pdo);

require "template.php";
?>
