<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You logout success.';
   header('Refresh:2; URL = ../index.php');
?>
