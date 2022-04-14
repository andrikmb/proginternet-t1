<?php
include_once 'dados_login.php';

$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");
class Perfil{
    function create(){}
    function read(){}
    function update(){}
    function delete(){}

}
?>