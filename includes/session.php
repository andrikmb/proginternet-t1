<?php
session_start();

session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $dateAndTime = date('m-d-Y h:i:s a', time());
} else { $user= "Visitante";}
?>