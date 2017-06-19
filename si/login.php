<?php
include "koneksi.php";
session_start();
if (isset($_SESSION['username'])){

}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>HIMATIF-ENCODER</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<body>
<form method="post" name="login" action="cek_login.php">
<table border=0 align="center" cellpadding=5 cellspacing=0>
	<div class="background">
		<center><div class="page"><a href="home.html" id="logo">HIMATIF-ENCODER</a></center>
			<div class="sidebar">


<tr>
<td colspan=5><center><font size=4><marquee direction ="left">Selamat Datang di Website Resmi HIMATIF-ENCODER</marquee></font></center></td>
</tr>		
<tr>
<td colspan=3><center><font size=5>LOGIN</font></center></td>
</tr>
<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan=2></td>
<td><input type="submit" name="submit" value="LOGIN"></td>
</tr>
<tr>
<td colspan=3><a href="daftar.php">DAFTAR</a></td>
</tr>


</table>
</form>
		</div>
		</div>
	</div>
</body>
</html>