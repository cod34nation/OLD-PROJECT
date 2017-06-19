<?php 
include 'koneksi.php';

$id_us = $_POST['id_user'];
$pengaj = $_POST['id_pengajuan'];
$stat = $_POST['status'];
$atsnm = $_POST['atasnama'];
$tgl = $_POST['tanggal'];
$idr = $_POST['idRef'];
$nomi = $_POST['nominal'];

$sql = "INSERT INTO donasi (id_donasi, id_user, id_pengajuan, atas_nama, tanggal_donasi, tanggal_perubahan, id_status, jumlah_nominal, kode_ref) VALUES (null,$id_us,$pengaj,'".$atsnm."','".$tgl."','".$tgl."',$stat,$nomi,'".$idr."')";
if ($koneksi->query($sql) === TRUE) {
    // header('location: http://localhost/AppsDataDiri/login.php');
    echo '<script> window.location="suksesdonasi.php" </script>';
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>