<?php
echo '<script language="javascript">
function validaus(form)
{
  if (tuser.newidu.value =="")
  {
    alert("Ketikan ID baru!");
    tuser.newidu.focus();
    return (false);
  }
  if (tuser.newnus.value =="")
  {
    alert("Ketikan nama user!");
    tuser.newnus.focus();
    return (false);
  }
  if (tuser.newpas.value =="")
  {
    alert("Ketikan password user!");
    tuser.newpas.focus();
    return (false);
  }
   	return(true);
}
</script>';
/**
 * @author 
 * @copyright 2012
 */
session_start();

echo '<div class="kotaku">';
echo '<form name="tuser" method="POST" action="usr/tuser.php" onsubmit="return validaus(this)"><div class="kotakhw">TAMBAH USER</div><div class="kotakbw"><hr><center>';
echo '<table>';
		echo '<tr><td>ID. User</td><td><input type="text" id="newidu" name="newidu" value=""></td></tr>';
echo '<tr><td>Nama User</td><td><input type="text" id="newnus" name="newnus" value=""></td></tr>
<tr><td>Password</td><td><input type="password" id="newpas" name="newpas" value=""></td></tr>
<tr><td>Level User</td><td><select size="1" name="lusert">
	<option value="A">Admin</option>
	<option value="U" selected>User</option>
</select></td></tr>';
echo '<tr><td></td><td align="right"><input type="submit" value="Tambah"></td></tr>
</table></center></div></form>';

/** pesan **/
if($_GET['tus']=='sukses'){
echo 'Tambah user sukses...';
}
if($_GET['tus']=='gagal'){
echo 'ID sudah terdaftar, masukan ID lainnya...';
}
if($_GET['tus']=='salah'){
echo 'Kesalahan input, gagal di tambah...';
}

echo '</div></div>';


?>