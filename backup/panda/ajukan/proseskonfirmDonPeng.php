<?php

session_start();


$id_pengajuan=$_POST['id_pengajuan'];
$atasNama=$_POST['nama'];
$tgl_trans=$_POST['tgl'];
$nominal=$_POST['uang'];
$idRef=$_POST['idRef'];









//=$data['id_user'];
//echo" ".$_SESSION['id_user'];
  
     define('ROOT', 'http://localhost:8080/panda');
     $koneksi=mysql_connect('localhost','root','');
    mysql_select_db('panda',$koneksi);
     error_reporting(E_ALL & ~E_NOTICE);

             //$tgl=date('d-m-Y');


$query = mysql_query("INSERT INTO konfirmasi  
     VALUES 
    ('$idU','$atasNama','$tgl_trans','Belum','$nominal','$idRef','1',$id_pengajuan)") or die (mysql_error());  


if($query)
{
	header('location:terimakasih.php');
}


else{
	echo  mysql_error(); 
}

        
       



    