<html>
<title>Pendaftaran</title>

<head>
	<meta charset="UTF-8">
	<title>HIMATIF-ENCODER</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

<table border=0 align="center" cellpadding=5 cellspacing=0>
	<div class="background">
		<center><div class="page"><a href="home.html" id="logo">HIMATIF-ENCODER</a></center>
			<div class="sidebar">
<form method="post" name="pendaftaran" action="proses_daftar.php">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>PENDAFTARAN</font></center></td>
</tr>
<tr>
<td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
</tr>
<tr>
<td>NIM</td><td>:</td><td><input type="text" name="nim"></td>
</tr>
<tr><td>Alamat</td><td>:</td><td><input type="text" name="alamat"></td>
</tr>
<tr>
<td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempat_lahir"></td>
</tr>
<td></td><td></td><td>Tgl: <select name="tgl" size="1" id="tgl">
<?php
for($i=1;$i<=31;$i++){
echo "<option value=".$i.">".$i."</option>";}
?>
</select>

Bulan: <select name="bln" size="1" id="bln">
<?php
$bulan= array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
for($i=1;$i<=12;$i++){
echo"<option value=".$i.">".$bulan[$i]."</option>";
}?>

</select>
Tahun :<select name="thn" size="1" id="thn">
<?php
for($tahun=1990;$tahun<=2000;$tahun++){
echo "<option value=".$tahun.">".$tahun."</option>";
}?>
</td>
</select>



</tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><input name="RadioGroup1" type="radio" id="RadioGroup1_0" value="L" checked>L <input name="RadioGroup1" type="radio" id="RadioGroup1_1"value="P">P</td>
<tr><td>Semester</td><td>:</td><td><input type="text" name="semester" size="1"></td></tr>
<tr><td>Divisi</td><td>:</td><td><input type="text" name="divisi"></td></tr>
<tr><td>Email</td><td>:</td><td><input type="text" name="email" size="30"></td></tr>
<tr><td>Fb/Twitter</td><td>:</td><td><input type="text" name="fb" size="30"></td></tr>
<tr><td>PIN BB</td><td>:</td><td><input type="text" name="bb" ></td></tr>
<tr><td>no HP</td><td>:</td><td><input type="text" name="no_HP"></td></tr>



 
<tr>
<td>Username</td><td>:</td><td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="password" name="password"></td>
</tr>

<tr>
<td colspan=2>&nbsp;</td>
<td><input type="submit" name="submit" value="DAFTAR"></td>
</tr>
<tr>
<td colspan=3><a href="login.php">LOGIN</a></td>
</tr>
</table>
</form>
</body>
</html>