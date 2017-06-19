<?php
include('koneksi.php');
// Membangun Koneksi dengan Server dengan nama server, id_admin dan password sebagai parameter
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_user'];
// Ambil nama admin berdasarkan username admin dengan mysql_fetch_assoc
$ses_sql=mysql_query("select * from admin where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
$login_id=$row['id_admin'];
if(!isset($login_session)){
mysql_close($connection); // Menutup koneksi
header('Location: index.php'); // Mengarahkan ke Home Page
}
?>