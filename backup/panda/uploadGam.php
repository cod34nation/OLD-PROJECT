<?php
include "koneksi.php";
// Mengkoneksikan file index.php ke server



if (isset($_POST['upload'])) // Jika tombol upload di tekan
{
	$nama_gambar=$_FILES['gambar'] ['name']; // Mendapatkan nama gambar
	$lokasi=$_FILES['gambar'] ['tmp_name']; 
	
	// Menyiapkan tempat nemapung gambar yang diupload
	$lokasitujuan="./images";
	// Menguplaod gambar kedalam folder ./image
	$upload=move_uploaded_file($lokasi,$lokasitujuan."/".$nama_gambar);
	
	$query=mysql_query("insert into pengajuan (gambar) values ('".$nama_gambar."')");
	echo "Gambar berhasil diuplaod";
	header('location:daftarPenerima.php');
	
}
?>
