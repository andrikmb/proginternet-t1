<?php
include __DIR__.'/includes/header.php';
require 'functions.php';
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
echo "<table>";


?>

    <?php 
    include __DIR__.'/includes/footer.php';
    ?>