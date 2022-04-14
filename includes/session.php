<?php
session_start();
$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");

?>