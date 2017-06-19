<?php
	$host="ap-cdbr-azure-east-c.cloudapp.net";
	$user="b0c8f7399d1b25";
	$password="8baad79a";	
	$koneksi=mysql_connect($host,$user,$password) or 
	die("Gagal Cuy ! :D");

	mysql_select_db("namadomain_mail");
?>