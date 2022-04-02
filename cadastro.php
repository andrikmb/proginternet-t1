<?php
include __DIR__.'/includes/header.php';
?>


<form action="" method="POST">
	  Nome:<br/> 
	  <input type="text" name="nome" placeholder="Qual seu nome?"><br/><br/>
	  Login:<br/> 
	  <input type="text" name="login" placeholder="Qual login deseja usar?"><br/><br/>
	  E-mail
	  <input type="email" name="email" placeholder="Qual seu email?"><br/><br/>
	  <br/><br/>
	  <input type="hidden" value="-1" name="id" >
	  <button type="submit">Cadastrar</button>
	</form>

    <?php 
    include __DIR__.'/includes/footer.php';
    ?>