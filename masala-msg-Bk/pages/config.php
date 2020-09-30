<?php
	ini_set('display_error',0);
	error_reporting (E_ALL ^ E_NOTICE);
$hostname_dbcon = "localhost";
$database_dbcon = "masalath_msg";
$username_dbcon = "root";
$password_dbcon = "";
$conn = new mysqli($hostname_dbcon, $username_dbcon, $password_dbcon,$database_dbcon); 
//mysqli_query("set names utf8");
mysqli_set_charset($conn,"utf8");
$dtstemp=date("Y-m-d H:s:i");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!isset($_SESSION)) {
  session_start(); 
}
?>