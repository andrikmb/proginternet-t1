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
echo '<table class="table table-success" style="border:1px; width:50%; margin-left:auto;
margin-right:auto;"><thead><tr>';
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


?>

    <?php 
    include 'footer.php';
    ?>