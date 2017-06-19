<?php

session_start();

$idU=$_POST['idU'];

$atasNama=$_POST['nama'];
$tgl_trans=$_POST['tgl'];
$nominal=$_POST['uang'];
$idRef=$_POST['idRef'];
$idtuj=$_POST['idtujuan'];






//=$data['id_user'];
//echo" ".$_SESSION['id_user'];
  
     define('ROOT', 'http://localhost:8080/panda');
     $koneksi=mysql_connect('localhost','root','');
    mysql_select_db('panda',$koneksi);
     error_reporting(E_ALL & ~E_NOTICE);

             //$tgl=date('d-m-Y');


$query = mysql_query("INSERT INTO konfirmasi  
     VALUES 
    ('$idU','$atasNama','$tgl_trans','Belum','$nominal','$idRef','1',0,'$idtuj' )") or die (mysql_error());  


if($query)
{
	header('location:terimakasih.php');
}


else{
	echo  mysql_error(); 
}

        
       



    