<?php
include_once __DIR__.'/includes/dados_login.php';
session_start();

$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");
class Produto{
    function create(){}
    function read(){}
    function update(){}
    function delete(){}

}
?>