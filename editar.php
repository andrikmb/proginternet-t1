<?php
include_once 'dados_login.php';
include_once 'functions.php';

$id = $_GET['cod'];
echo $id;
echo "<hr>";

$sql = $pdo->prepare("select * from produtos where :idproduto");
$sql->execute([':idproduto' => $id]);
$fetchProdutos = $sql->fetch();

$desc = $fetchProdutos["descproduto"];
$valunit = $fetchProdutos["valorunitario"];
$quant = $fetchProdutos["quantidade"];
$fab = $fetchProdutos["fabricante"];
$val = $fetchProdutos ["validade"];

//var_dump($fetchProdutos);

$logged=$_SESSION['logado'] ?? null;

if (!$logged) die("a sessão não foi iniciada.");
//$rs->nome
?>
<div class"container">
    <form action="" method="post" class="" style="border:1px; width:50%; margin-left:auto;margin-right:auto;">
        <div>
            <label for="">Codigo</label>
            <input type="text" name="cod" id="cod" <?php echo "value=\"{$id}\"";?>>
        </div>
        <div>
            <label for="">Descrição</label>
            <input type="text" name="desc" id="desc" <?php echo "value=\"{$desc}\"";?>>
        </div>
        <div>
            <label for="">Valor Unitário</label>
            <input type="text" name="valunit" id="valunit" <?php echo "value=\"{$valunit}\"";?>>
        </div>
        <div>
            <label for="">Quantidade</label>
            <input type="text" name="quant" id="quant" <?php echo "value=\"{$quant}\"";?>>
        </div>
        <div>
            <label for="">Fabricante</label>
            <input type="text" name="fab" id="fab" <?php echo "value=\"{$fab}\"";?>>
        </div>
        <div>
            <label for="">Validade</label>
            <input type="text" name="val" id="val" <?php echo "value=\"{$val}\"";?>>
        </div>
        <input type="submit" value="editar">
    </form>
</div>
<?php


if(isset($_POST)){

   
    $fetchupdate["descproduto"] =$_POST['desc'];
    $fetchupdate["valorunitario"]=$_POST['valunit'];
    $fetchupdate["quantidade"] =$_POST['quant'];
    $fetchupdate["fabricante"]=$_POST['fab'];
    $fetchupdate["validade"] =$_POST['val'];

    $fazisso = "update from produtos where :idproduto";
    $sql = $pdo->prepare($fazisso);
    $sql->execute([':idproduto' => $id]);
    
    
    

}
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