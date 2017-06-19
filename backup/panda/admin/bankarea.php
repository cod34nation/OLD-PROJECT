<?php
include ('koneksi.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
<tr>
			<th>ID References</th>
			<th>ID Donasi</th>
			<th>ATAS NAMA</th>
			<th>TANGGAL</th>
			<th>JUMLAH NOMINAL</th>
			<th>STATUS</th>
			<th>SETTING</th>
				</tr>
<?php
$pilih='select * from konfirmasi';
$show = mysql_query($pilih, $connection) ;
if (!$show) {
die('Gagal ambil data: ' . mysql_error());
}
while ($row = mysql_fetch_array($show, MYSQL_ASSOC)) {
	echo '<tr>
    <td>'.$row['id_ref'].'</td>
    <td>'.$row['id_donasi'].'</td>
    <td>'.$row['atas_nama'].'</td>
    <td>'.$row['tanggal_transfer'].'</td>
    <td>'.$row['jumlah_nominal'].'</td>
    <td>';if ($row['status']==1) {
    	echo 'sudah';
    }else {
    	echo 'belum';
    }'</td>
    <td><i> <a href='formupdate.php?status=".$row['status']."'> Update </a> </i></td>
    

</tr>';
}
mysql_close($connection);
?>
</table>
</body>
</html>