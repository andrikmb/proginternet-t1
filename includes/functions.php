
<?php

include_once __DIR__.'/includes/dados_login.php';
session_start();
$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");

function conecta(){
//colocar conexão aqui
$pdo= new PDO('mysql:host=localhost;dbname=dbloja', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}

?>
