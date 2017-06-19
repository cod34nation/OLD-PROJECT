
<?php
include "koneksi.php";
include "home.html";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
?>
Berhasil Login, <a href="login.php">Logout</a>
				
	




