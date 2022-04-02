<?php
session_start();
$users = $_SESSION['users'];
$dateAndTime = date('m-d-Y h:i:s a', time()); 
?>

<?php


include __DIR__.'/includes/header.php';
?>
<div class="container">
teste
</div>
<?php
include __DIR__.'/includes/footer.php';
?>