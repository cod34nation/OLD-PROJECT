<?php
include "koneksi.php";
//get the value from form update
 $status = $_POST['status'];

//query for update data in database
 $query = "UPDATE konfirmasi SET status = '$status' WHERE status = '$status'" ;
 $row = mysql_query($query);
 //see the result
 if ($row) {
    include "bankarea.php";
	echo "<h4> update data success </h4>";
}
?>