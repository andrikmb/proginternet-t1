<?php
include __DIR__.'/includes/header.php';
?>


<form>
	  Nome:<br/> 
	  <input type="text" name="nome" placeholder="Qual seu nome?"><br/><br/>
	  E-mail:<br/> 
	  <input type="email" name="email" placeholder="Qual seu e-mail?"><br/><br/>
	  Cidade:<br/> 
	  <input type="text" name="cidade" placeholder="Qual sua cidade?"><br/><br/>
	  UF:<br/> 
	  <input type="text" name="uf" size="2" placeholder="UF">
	  <br/><br/>
	  <input type="hidden" value="-1" name="id" >
	  <button type="submit">Cadastrar</button>
	</form>
    <?php 
    include __DIR__.'/includes/footer.php';
    ?>