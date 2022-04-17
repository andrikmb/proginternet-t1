<?php
include_once 'dados_login.php';
include_once 'functions.php';

$sql = $pdo->prepare("select * from produtos");
$sql->execute();
$fetchProdutos = $sql->fetchAll();

$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");
class Produto{
    public $produto;
    public $descproduto;
    public $valorunitario;
    

    function create(){}
    function read(){
        include_once 'functions.php';

        $sql = $pdo->prepare("select * from produtos");
        $sql->execute();
        $fetchProdutos = $sql->fetchAll();
        foreach($fetchProdutos as $keys => $value){
            echo $value['codigo'];
            echo $value['descproduto'];
            echo $value['valorunitario'];
            echo $value['quantidade'];
            echo $value['fabricante'];
            echo $value['validade'];
        }
    }
    function update(){}
    function delete(){}

}
?>