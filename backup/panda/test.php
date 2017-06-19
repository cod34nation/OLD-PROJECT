<?php 
include "koneksi.php";
$test_q="select * from email group by id_email desc";
$hasil=mysql_query($test_q);
$q=mysql_fetch_array($hasil);
$a= $q['id_email'];
echo" <a href = verifikasi.php?email=$a><h2>Konfirmasi</h2></a>";
?>