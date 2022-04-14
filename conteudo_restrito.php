<?php
include_once 'dados_login.php';
$logged=$_SESSION['logado'] ?? null;
if (!$logged) die("a sessão não foi iniciada.");
?>
<?php include 'header.php'; ?>
<?php 
echo "Bem vindo <b>". $_SESSION['usuario']."</b>.";
?>
<p >conteudo que só é mostrado quando o usuario está logado</p>


<?php
include 'footer.php';
?>