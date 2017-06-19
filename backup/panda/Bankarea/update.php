<?php
 include ('koneksi.php');

//$status=$_GET['status'];
$id=$_GET['id'];

$sql = "UPDATE konfirmasi SET status =2 WHERE id_ref='$id'";
$hasil=mysql_query($sql);

//if($hasil){
 
 //header("location:index.php");
 echo "<h4>Konfirmasi Data Succes</h4>";
 echo $id;
		//	}
?>