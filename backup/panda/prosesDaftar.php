<?php
include  "koneksi.php";
session_start();





$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];




if ($cpassword!=$password){
echo "<script>alert('password salah')</script>";
echo"<meta http-equiv='refresh' content='1 url=join.php'>";}





else if(empty($email)){
echo"<script>alert('Email Belum diisi')</script>";
echo"<meta http-equiv='refresh' content='1 url=join.php'>";}





else if(empty($password)){
echo"<script>alert('Password Belum diisi')</script>";
echo"<meta http-equiv='refresh' content='1 url=daftar.php'>";}

else if(empty($cpassword)){
echo"<script>alert('Konfirmasi Password Belum diisi')</script>";
echo"<meta http-equiv='refresh' content='1 url=join.php'>";}

$us=mysql_query("SELECT * FROM user ORDER BY `user`.`email` ASC");
$data=mysql_fetch_array($us);
if($email==$data){
	echo "email ".$data."Telah dipakai";
}else{
$daftar=mysql_query("INSERT INTO user (id_admin,email, password)values('1','$email','$password') ");
$email=$_SESSION['email'];


if($daftar){
	echo "<div class='alert alert-success' role='alert'>...</div>";
header("location:login.php");
}
else{

echo "error". mysql_error();;
}
}




 
 ?>