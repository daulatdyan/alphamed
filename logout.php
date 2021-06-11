<?php
session_start();
$_SESSION['name']="";
$_SESSION['password']="";
header("Location:login.php");
?>