<?php
	if(isset($_POST['submit'])) {
		
		define('ROOT', 'http://localhost:8080/panda');
		$koneksi=mysql_connect('localhost','root','');
		mysql_select_db('untuk_blog',$koneksi);
		
		$kode	= md5(uniqid(rand()));
		
		
		$query = mysql_query("INSERT INTO verifikasi_email (id, username, password, email, aktif, kode) VALUES ('', '$_POST[username]', '$password', '$_POST[email]','T', '$kode' )") or die (mysql_error());

		$to 	= $_POST['email'];
		$judul 	= "Aktivasi Akun Anda";
		$dari	= "From: septian@tian.com \n";
		$dari	.= "Content-type: text/html \r\n";

		$pesan	= "Klik link berikut untuk mengaktifkan akun: <br />";
		$pesan	.= "<a href='".ROOT."konfirmasi.php?email=".$_POST['email']."&kode=$kode&username=".$_POST['username']."'></a>";

		$kirim	= mail($to, $judul, $pesan, $dari);
		
		if($kirim AND $query)
		{
			echo $dari ;
			echo "<br>";
			echo $pesan;
			echo "<p class=info>Berhasil Dikirim</p>";
		}
		else
		{
			echo "<p class=infoGagal>Gagal Dikirim</p>";
		}		
	
	}
?>