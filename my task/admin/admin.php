<?php
include('session.php');
error_reporting(E_ALL & ~E_NOTICE);
ob_start();
$page=htmlentities($_GET['page']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<div>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Panda Project Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="?page=welcome">Home</a></li>
        
        <li><a href="?page=transaksi">Data Transfer Donatur</a></li>
        <li><a href ="konfirm_map.php">Konfirmasi Map</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="container">
  <?php
  $file="$page.php";
  $cek=strlen($page);
  if ($cek>30||!file_exists($file)||empty($page)) {
     include ("welcome.php");
   } else {
    include ($file);
   } 
  ?>

</div>




</body>
</html>
