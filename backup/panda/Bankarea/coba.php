<?php
 include ('koneksi.php');

 $sql=mysql_query('SELECT SUM(jumlah_nominal) as jumlahnominal FROM konfirmasi');

$sum=0;
while ($row=mysql_fetch_array($sql)) {
	# code...
	
	
	$sum=$sum+$row["jumlahnominal"];
}

echo "$sum";
 
?>