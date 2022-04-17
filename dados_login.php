<?php
session_start();
$_SESSION['logado'] = $_SESSION['logado'] ?? false;
//$logged=$_SESSION['logado'] ?? null;

if (!$_SESSION['logado']){
    include_once 'form_login.php';
}else {
    include_once 'conteudo_restrito.php';
}

//if (!$logged) die("a sessão não foi iniciada.");
//db data
$usuario_db='admin';
$senha_db='123456';

$post_usuario=$_POST['usuario'] ?? null;
$post_senha=$_POST['password'] ?? null;

if($post_usuario == $usuario_db && $post_senha == $senha_db){
    $_SESSION['usuario']=$usuario_db;
    $_SESSION['password']=$senha_db;
    $_SESSION['logado']= True;
}
if (isset($_GET['logout']) && $_GET['logout']==1){
    $_SESSION = array();
    session_destroy();
    header('Location: index.php');
}
?>