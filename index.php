<?php
include_once 'dados_login.php';
?>
<div class="container">
<?php
$dateAndTime = date('m-d-Y h:i:s a', time());

include 'header.php';
if (!$_SESSION['logado']){
    include_once 'form_login.php';
}else {
    include_once 'conteudo_restrito.php';
}

var_dump($_SESSION);
?>

</div>
<?php
include 'footer.php';
?>