<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["status"]);
   
   echo 'You logout success.';
   header('Refresh:0; URL = ../index.php');
?>
