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
$tgl="Menunggu...";
$sql = "UPDATE donasi SET id_status=1 , tanggal_perubahan='$tgl' WHERE kode_ref='$id'";

if ($conn->query($sql) === TRUE) {
	header("location:index.php");
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>