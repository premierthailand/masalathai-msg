<?php include 'config.php'; ?>
<?php
if($_SESSION['username']==''OR $_SESSION['status']==''){
  Header("Location: ../");
}
?>