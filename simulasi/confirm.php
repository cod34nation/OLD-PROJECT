<?php
include 'config.php';
$confirm = $_GET['id'];
if (isset($confirm)) {
	$query = "SELECT id FROM user WHERE id='$confirm'";
	$find = mysql_query($query);

	if ($find && mysql_num_rows($find) > 0) {
		$update = "update user set confirm='yes' where user.id='$confirm'";
		$set = mysql_query ($update);
		if ($set) {
			echo "Konfirmasi sukses";
		}
	} else {
		echo "ID tidak dikenali";
	}
} else {
	echo "Nothing to do";
}

?>