<?php
include 'koneksi.php';
$status = $_GET['status']; //get the no which will updated
$query = "SELECT * FROM konfirmasi WHERE status = $status"; //get the data that will be updated
$hasil = mysql_query($query);
$row = mysql_fetch_array($hasil);
?>
<form method="post" action="prosesupdate.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong> Form Update</strong>
    </td>

  <tr>
  	<td width="23%"> Status </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="status" value="<?php echo $row['statu']; ?>"> </td>
  </tr>

<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="status" value="<?php echo $row['status']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>