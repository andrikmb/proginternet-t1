<?php
include_once 'dados_login.php';
session_start();
$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");
?>

<p >conteudo que só é mostrado quando o usuario está logado</p>