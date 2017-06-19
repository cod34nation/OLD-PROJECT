<?php
session_start();


session_register("email");
session_register("password");
$_SESSION['email'] =$_POST['email'];
$_SESSION['password']=$_POST['password'];

header('location: index.php');
?>