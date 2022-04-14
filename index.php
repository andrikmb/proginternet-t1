<?php
include_once __DIR__.'/includes/dados_login.php';
?>
<div class="container">
<?php
$dateAndTime = date('m-d-Y h:i:s a', time());

include __DIR__.'/includes/header.php';
if (!$_SESSION['logado']){
    include_once __DIR__.'/includes/form_login.php';
}else {
    include_once __DIR__.'/includes/conteudo_restrito.php';
}

var_dump($_SESSION);
?>

</div>
<?php
include __DIR__.'/includes/footer.php';
?>