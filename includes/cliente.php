<?php


class Cliente {
    //colocar conexão aqui
    

    //    `id` int(11) NOT NULL,
    private int $id=0;
    //    `nome` varchar(255) COLLATE utf8_bin NOT NULL,
    private string $nome="";
    //    `cpf_cnpj` varchar(14) COLLATE utf8_bin NOT NULL,
    private string $cpf_cnpj="";
    //    `email` varchar(255) COLLATE utf8_bin NOT NULL,
    private string $email="";
    //    `criacao` DATETIME 2022-04-27 19:35:41
    private string $criacao="";
    //    `modificado` DATETIME 2022-04-27 19:35:41
    private string $modificado="";
    
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