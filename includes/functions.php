
<?php
function conecta(){
//colocar conexão aqui
$pdo= new PDO('mysql:host=localhost;dbname=dbloja', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}

?>
