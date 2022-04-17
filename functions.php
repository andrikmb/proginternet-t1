
<?php

include_once 'dados_login.php';

$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");


//colocar conexão aqui
$pdo= new PDO('mysql:host=localhost;dbname=dbloja', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


?>
