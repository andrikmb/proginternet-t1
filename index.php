<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $dateAndTime = date('m-d-Y h:i:s a', time());
} else { $user= "Visitante";}
?>

<?php
$dateAndTime = date('m-d-Y h:i:s a', time());

include __DIR__.'/includes/header.php';
echo "Olá $user ";
echo $dateAndTime;

?>
<div class="container">
teste
</div>
<?php
include __DIR__.'/includes/footer.php';
?>