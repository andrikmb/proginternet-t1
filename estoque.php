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
echo '<table class="table table-success table-hover table-sm"><thead><tr>';
//var_dump($fetchProdutos);
echo '<div class="col-md-auto">';
echo '<th scope="col-md-auto">C&oacute;digo</th>';
echo '<th scope="col-md-auto">Desci&ccedil;&atilde;o</th>';
echo '<th scope="col-md-auto">Valor unit&aacute;rio</th>';
echo '<th scope="col-md-auto">Quantidade</th>';
echo '<th scope="col-md-auto">Fabricante</th>';
echo '<th scope="col-md-auto">Validade</th>';
echo '<th scope="col-md-auto"></th></tr>';
echo '</div>';

foreach($fetchProdutos as $keys => $value){
	echo "<tr><td>codigo";
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


echo '<div class"conteiner">';
	echo '<div class="">';//começo da tabela
		echo '<div class="row justify-content-md-center">';// 1a linha
			//echo '<div class="col-md-auto">';
					echo '<div class="col-6 ">C&oacute;digo</div>';
					echo '<div class="col-6 ">Desci&ccedil;&atilde;o</div>';
					echo '<div class="col-6 ">Valor unit&aacute;rio</div>';
					echo '<div class="col-6 ">Quantidade</div>';
					echo '<div class="col-6 ">Fabricante</div>';
					echo '<div class="col-6 ">Validade</div>';
				//echo '</div>';
			echo '</div>';


foreach($fetchProdutos as $keys => $value){
	echo '<div class="row justify-content-md-center">';
	echo '<div class="col-md-auto">';
	echo $value['codigo'];
	echo '</div><div class="col-md-auto">';
	echo $value['descproduto'];
	echo '</div><div class="col-md-auto">';
	echo $value['valorunitario'];
	echo '</div><div class="col-md-auto">';
	echo $value['quantidade'];
	echo '</div><div class="col-md-auto">';
	echo $value['fabricante'];
	echo '</div><div class="col-md-auto">';
	echo $value['validade'];
	echo '</div><div class="col-md-auto">';
	//botoes de crud vão aqui
	echo "</div></div>";
}
echo "</div>";
echo " </div><hr>";

?>

    <?php 
    include 'footer.php';
    ?>