<?php
include_once 'dados_login.php';
include_once 'functions.php';

$sql = $pdo->prepare("select * from produtos");
$sql->execute();
$fetchProdutos = $sql->fetchAll();

$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");

?>
<div class"container">
    <form action="" method="post" class="" style="border:1px; width:50%; margin-left:auto;margin-right:auto;">
        <div>
            <label for="">Codigo</label>
            <input type="text" name="cod" id="cod">
        </div>
        <div>
            <label for="">Descrição</label>
            <input type="text" name="desc" id="desc">
        </div>
        <div>
            <label for="">Valor Unitário</label>
            <input type="text" name="valunit" id="valunit">
        </div>
        <div>
            <label for="">Quantidade</label>
            <input type="text" name="quant" id="quant">
        </div>
        <div>
            <label for="">Fabricante</label>
            <input type="text" name="fab" id="fab">
        </div>
        <div>
            <label for="">Validade</label>
            <input type="text" name="val" id="val">
        </div>
        <input type="submit" value="Inserir">
    </form>
</div>
<?php
/*
  `idproduto` int(11) NOT NULL,
  `codigo` decimal(13,0) NOT NULL COMMENT 'ean-13 do produto',
  `descproduto` varchar(255) COLLATE utf8_bin NOT NULL,
  `valorunitario` decimal(10,0) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `fabricante` varchar(100) COLLATE utf8_bin NOT NULL,
  `validade` date NOT NULL COMMENT 'data de validade'

*/

?>


<?php
include 'footer.php';
?>