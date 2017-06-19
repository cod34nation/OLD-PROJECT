<?php 
include 'koneksi.php';

$emailu = $_POST['emailus'];
$usernameu = $_POST['usernameus'];
$passwordu = $_POST['passwordus'];
$namale = $_POST['namaleng'];
$alamatu = $_POST['alamatus'];

$sql = "INSERT INTO user (id_user, email, username, password, nama_lengkap, alamat) VALUES (null,'".$emailu."','".$usernameu."','".$passwordu."','".$namale."','".$alamatu."')";
if ($koneksi->query($sql) === TRUE) {
    // header('location: http://localhost/AppsDataDiri/login.php');
    echo '<script> window.location="index.php" </script>';
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>