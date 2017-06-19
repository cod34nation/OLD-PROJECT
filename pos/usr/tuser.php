<?php
include "../cfg/konfigurasi.php";
/**
 * @author jayadin
 * @copyright 2012
 */

if(!empty($_POST['newidu'])){
	$queryNU=mysql_query("SELECT * FROM usertoko WHERE id_user='$_POST[newidu]'");
	$nNU=mysql_fetch_row($queryNU);
	if($nNU[0]){
		header("location:../meja.php?kertas=tambah_user&tus=gagal");
	}else{
		$sandin=md5($_POST['newpas']);
		mysql_query("INSERT INTO usertoko(id_user,nama_user,ksandi,level_user) VALUES('$_POST[newidu]','$_POST[newnus]','$sandin','$_POST[lusert]')");
		header("location:../meja.php?kertas=tambah_user&tus=sukses");
	}
}else{
		header("location:../meja.php?kertas=tambah_user&tus=salah"); }
?>