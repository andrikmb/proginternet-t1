<?php
include_once __DIR__.'/includes/dados_login.php';
$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");
?>