<?php
$server   = "localhost" ;
$username = "root" ;
$password = "" ;
$database = "sipi";

//Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die ("Koneksi database gagal");
mysql_select_db($database) or die ("Database tidak tersedia");

?>