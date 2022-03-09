<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Você limpou a sessão';
   header('Refresh: 2; URL = login.php');
?>