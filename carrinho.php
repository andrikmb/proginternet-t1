
<?php
include_once 'dados_login.php';
include_once 'functions.php';

$sql = $pdo->prepare("select * from produtos");
$sql->execute();
$fetchProdutos = $sql->fetchAll();

$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");

?>