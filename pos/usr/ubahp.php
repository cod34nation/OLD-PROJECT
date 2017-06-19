<?php
include "../cfg/konfigurasi.php";
/**
 * @author 
 * @copyright 2012
 */

session_start();
if(!empty($_POST['pasbaru'])){
if($_SESSION['leveluser']=='A'){
	$pasbara=md5($_POST[pasbaru]);
	mysql_query("UPDATE usertoko SET ksandi='$pasbara' WHERE id_user='$_POST[idupasa]'");
	header("location:../meja.php?kertas=ubah_password&pass=sukses");
}else{
	$pasbaru=md5($_POST['pasbaru']);
	$paslama=md5($_POST['paslama']);
		$upu=mysql_query("SELECT * FROM usertoko WHERE id_user='$_SESSION[iduser]'");
		$upuok=mysql_fetch_row($upu);
		if($paslama==$upuok[2]){
			mysql_query("UPDATE usertoko SET ksandi='$pasbaru' WHERE id_user='$_SESSION[iduser]'");
			header("location:../meja.php?kertas=ubah_password&pass=sukses");
		}else{
			header("location:../meja.php?kertas=ubah_password&pass=salah");
		}
	}
}else{
	header("location:../meja.php?kertas=ubah_password&pass=gagal");
}

?>