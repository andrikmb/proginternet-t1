<?php
//include 'header.php';
include_once 'functions.php';
include_once 'dados_login.php';

?>


<?php

$sql = $pdo->prepare("select * from produtos");
$sql->execute();
$fetchProdutos = $sql->fetchAll();

/*
  `idproduto` int(11) NOT NULL,
  `codigo` decimal(13,0) NOT NULL COMMENT 'ean-13 do produto',
  `descproduto` varchar(255) COLLATE utf8_bin NOT NULL,
  `valorunitario` decimal(10,0) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `fabricante` varchar(100) COLLATE utf8_bin NOT NULL,
  `validade` date NOT NULL COMMENT 'data de validade'

*/
echo '<div class"conteiner">';
echo '<table class="table table-success"><thead><tr>';
//var_dump($fetchProdutos);

echo '<th scope="col">C&oacute;digo</th>';
echo '<th scope="col">Desci&ccedil;&atilde;o</th>';
echo '<th scope="col">Valor unit&aacute;rio</th>';
echo '<th scope="col">Quantidade</th>';
echo '<th scope="col">Fabricante</th>';
echo '<th scope="col">Validade</th>';
echo '<th scope="col"></th></tr>';


foreach($fetchProdutos as $keys => $value){
	echo '<tr><td>';
	echo $value['codigo'];
	echo "</td><td>";
	echo $value['descproduto'];
	echo "</td><td>";
	echo $value['valorunitario'];
	echo "</td><td>";
	echo $value['quantidade'];
	echo "</td><td>";
	echo $value['fabricante'];
	echo "</td><td>";
	echo $value['validade'];
	echo "</td><td>";
	//botoes de crud vão aqui
	echo "</td></tr>";
}
echo "</table>";
echo " </div><hr>";
echo time();
echo "<br>";
echo date('now');


echo '<div class"conteiner ">';
	echo '<div class="w-50 mx-auto">';//começo da tabela
		echo '<div class="row justify-content-md-center">';// 1a linha
			//echo '<div class="col-md-auto">';
					echo '<div class="col">C&oacute;digo</div>';
					echo '<div class="col">Desci&ccedil;&atilde;o</div>';
					echo '<div class="col">Valor unit&aacute;rio</div>';
					echo '<div class="col">Quantidade</div>';
					echo '<div class="col">Fabricante</div>';
					echo '<div class="col">Validade</div>';
				//echo '</div>';
			echo '</div>';


foreach($fetchProdutos as $keys => $value){
	echo '<div class="row justify-content-md-center">';
	echo '<div class="col">';
	echo $value['codigo'];
	echo '</div><div class="col">';
	echo $value['descproduto'];
	echo '</div><div class="col">';
	echo $value['valorunitario'];
	echo '</div><div class="col">';
	echo $value['quantidade'];
	echo '</div><div class="col">';
	echo $value['fabricante'];
	echo '</div><div class="col">';
	echo $value['validade'];
	echo '</div><div class="col">';
	//botoes de crud vão aqui
	echo "</div></div>";
}
echo "</div>";
echo " </div><hr>";

?>

    <?php 
    include 'footer.php';
    ?>