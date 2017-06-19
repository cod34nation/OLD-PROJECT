<?php
include_once "koneksi.php";
$nama = $_POST['nama'];
$nim=$_POST['nim'];
$alamat=$_POST['alamat'];
$tempatlahir=$_POST['tempat_lahir'];
$tgl=$_POST['tgl'];
$bln=$_POST['bln'];
$thn=$_POST['thn'];
$jenis=$_POST['RadioGroup1'];
$sm=$_POST['semester'];
$email=$_POST['email'];
$fb=$_POST['fb'];
$bb=$_POST['bb'];
$hp=$_POST['no_HP'];
$div=$_POST['divisi'];

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($nim)){
echo "<script>alert('NIM belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($alamat)){
echo "<script>alert('Alamat diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if(empty($tempatlahir)){
echo "<script>alert('Tempat Lahir belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($tgl)){
echo "<script>alert('Tanggal belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($bln)){
echo "<script>alert('Bulan belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($thn)){
echo "<script>alert('Tahun belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if(empty($jenis)){
echo "<script>alert('Jenis Kelamin belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($sm)){
echo "<script>alert('Semester belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
if (empty($fb)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if(empty($bb)){
echo "<script>alert('PIN BB belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else {

$daftar = mysql_query("INSERT INTO users (nama,username,password,nim,alamat,tempat_lahir,semester,RadioGroup1,bulan,tahun,divisi,no_HP,bb,email,fb,tanggal) 
values ('$nama','$username','$password','$nim','$alamat','$tempatlahir','$sm','$jenis','$bln','$thn','$div','$hp','$bb','$email','$fb','$tgl')");

if ($daftar){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
header("location:login.php");
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}
}
?>