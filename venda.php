<?php
include_once 'dados_login.php';
session_start();
$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");
class Vendas{
    function create(){
        require 'functions.php';
        $sql =  $pdo->prepare("create from clientes");
        $sql->execute();
        $fetchProdutos = $sql->fetchAll();
    }
    function read(){
        require 'functions.php';
        $sql =  $pdo->prepare("create from clientes");
        $sql->execute();
        $fetchProdutos = $sql->fetchAll();
    }
    function update(){
        require 'functions.php';
        $sql =  $pdo->prepare("create from clientes");
        $sql->execute();
        $fetchProdutos = $sql->fetchAll();
    }
    function delete(){
        require 'functions.php';
        $sql =  $pdo->prepare("create from clientes");
        $sql->execute();
        $fetchProdutos = $sql->fetchAll();
    }

}
?>