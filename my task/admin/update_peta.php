<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pantaudonasi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$id=$_GET['id'];
$tgl=date('d-m-Y');
$sql = "UPDATE pengajuan SET status=2 , tanggal_konfirm='$tgl' WHERE id_pengajuan='$id'";

if ($conn->query($sql) === TRUE) {
	header("location:konfirm_map.php");
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>