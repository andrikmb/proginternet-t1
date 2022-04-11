<?php
include __DIR__.'/includes/header.php';
require 'functions.php';
?>


<?php
$sql = $pdo->prepare("select * from clientes");
$sql->execute();
$fetchClientes = $sql->fetchAll();

/*
 `idclientes` int(11) NOT NULL,
  `idperfil` int(11) NOT NULL DEFAULT 7,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpf_cnpj` varchar(14) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL,
  `criacao` datetime NOT NULL,
  `modificado` datetime NOT NULL
*/
echo '<table class="table table-success table-hover"><thead><tr>';
//var_dump($fetchClientes);
//echo "<th>";
echo '<th scope="col">C&oacute;digo</th>';
// idperfil não pode ser visto
echo '<th scope="col">Nome</th>';
echo '<th scope="col">CPF/CNPJ</th>';
echo '<th scope="col">Email</th>';
// senha...
echo '<th scope="col">Criação</th>';
echo '<th scope="col">Modificado</th>';
echo '<th scope="col"></th></tr>';

foreach($fetchProdutos as $keys => $value){
	echo "<tr><td>";
	echo $value['id'];
	echo "</td><td>";
	echo $value['Nome'];
	echo "</td><td>";
	echo $value['cpf_cnpj'];
	echo "</td><td>";
	echo $value['email'];
	echo "</td><td>";
	echo $value['criacao'];
	echo "</td><td>";
	echo $value['modificado'];
	echo "</td><td>";
	//botoes de crud vão aqui
	echo "</td></tr>";
}
echo "</table>";
echo "<hr>";
echo time();
echo "<br>";
echo date('now');
?>

    <?php 
    include __DIR__.'/includes/footer.php';
    ?>