<?php 
// Connect to Database
mysql_connect("localhost", "root", "");
mysql_select_db("panda");

error_reporting(E_ALL & ~E_NOTICE);
$judul=$_POST['judul'];
//$tgl= date('d-M-Y H:i:s');
$tgl = date('d-m-Y');
//echo $tgl.$judul;
$id_admin=$_POST['id'];
//echo id admin
$deskripsi=$_POST['deskripsi'];
//deskripsi

if (isset($_POST['simpan'])){
	$fileName = $_FILES['image']['name'];

    // Simpan ke Database
	$sql = "insert into dokumentasi Values (NULL, '$id_admin', '$judul', '$fileName', '$deskripsi' ,'$tgl')";
	mysql_query($sql);
	// Simpan di Folder Gambar
	move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);
	echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
}


?>