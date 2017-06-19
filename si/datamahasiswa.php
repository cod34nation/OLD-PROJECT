
<html>
<head>
	<meta charset="UTF-8">
	<title>HIMATIF-ENCODE</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<form method="post" name="login" action="cek_login.php">
<table border=0 align="center" cellpadding=5 cellspacing=0 >
	<div class="background">
		<center>
		<div class="page"><a href="home.html" id="logo">HIMATIF-ENCODER</a></center>
			<div class="sidebar">
<table border="1" align="center" >

<tr bordercolor="#FFFFFF" bgcolor="#FFFF00"><td><a href="home.html">Kembali</td></tr>
<tr>
<td><center>Nama
</center></td>
<td><center>NIM</center></td>
<td><center>Alamat</center></td>
<td><center>Ttl</center></td>
<td><center>Jenis Kelamin</center></td>
<td><center>no Hp</center></td>
<td><center>PIN BB</center></td>
<td><center>Email</center></td>
<td><center>FACEBOOK</center></td>
<td><center>Divisi</center></td>
</tr>
<?php
include "koneksi.php";
$select=mysql_query("SELECT*FROM `users`")or die (mysql_error());
while($data=mysql_fetch_array($select)){
?>

<tr>
<td><?php echo $data['nama'];?></td>
<td><?php echo $data['nim'];?></td>
<td><?php echo $data['alamat'];?></td>
<td><?php echo $data['tempat_lahir'];echo","; echo $data['tanggal']; echo",";echo $data['bulan'];echo","; echo $data['tahun'];?></td>
<td><?php echo $data['RadioGroup1'];?></td>
<td><?php echo $data['no_HP'];?></td>
<td><?php echo $data['bb'];?></td>
<td><?php echo $data['email'];?></td>
<td><?php echo $data['fb'];?></td>
<td><?php echo $data['divisi'];?></td>
</tr>


<?php }?>

</table>


</tr>
		</div>
		</div>
	</div>
    </font>
</body>
</html>