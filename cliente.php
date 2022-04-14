<?php
include_once 'dados_login.php';

$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");
class Cliente {
    //colocar conexão aqui
    

    //    `id` int(11) NOT NULL,
    private int $id=0;
    //    `nome` varchar(255) COLLATE utf8_bin NOT NULL,
    private string $nome="";
    private string $senha="";
    
    function create(){
        require 'functions.php';
        $sql =  $pdo->prepare("create from clientes");
        $sql->execute();
        $fetchProdutos = $sql->fetchAll();
    }

    function read(){
        require 'functions.php';
        $sql =  $pdo->prepare("select * from clientes");
        $sql->execute();
        $fetchProdutos = $sql->fetchAll();
    }

    function update(){
        require 'functions.php';
        $sql =  $pdo->prepare("update * from clientes");
        $sql->execute();
        $fetchProdutos = $sql->fetchAll();
    }

    function delete(){
        require 'functions.php';
        $sql =  $pdo->prepare("delete from clientes");
        $sql->execute();
        $fetchProdutos = $sql->fetchAll();
    }
}


?>