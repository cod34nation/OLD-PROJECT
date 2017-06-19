<?php
echo '<script language="javascript">
function validupass(form)
{
  if (upass.paslama.value =="")
  {
    alert("Ketikan password lama!");
    upass.paslama.focus();
    return (false);
  }
  if (upass.pasbaru.value =="")
  {
    alert("Ketikan password baru!");
    upass.pasbaru.focus();
    return (false);
  }
  if (upass.pasulang.value =="")
  {
    alert("Ketikan password kembali!");
    upass.pasulang.focus();
    return (false);
  }
  if (upass.pasbaru.value != upass.pasulang.value)
  {
    alert("Kedua password harus sama!");
    upass.pasulangu.focus();
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
echo '<form name="upass" method="POST" action="usr/ubahp.php" onsubmit="return validupass(this)"><div class="kotakhw">UBAH PASSWORD</div><div class="kotakbw"><hr><center>';
echo '<table>';
if($_SESSION[leveluser]=='A'){
	echo '<tr><td>ID User</td><td><input type="text" id="idupasa" name="idupasa" value=""></td></tr>';	
}else{
		echo '<tr><td>Password Lama</td><td><input type="password" id="paslama" name="paslama" value=""></td></tr>';
	 }
echo '<tr><td>Password Baru</td><td><input type="password" id="pasbaru" name="pasbaru" value=""></td></tr>
<tr><td>Ketik Ulang Password</td><td><input type="password" id="pasulang" name="pasulang" value=""></td></tr>';
echo '<tr><td></td><td align="right"><input type="submit" value="Ubah"></td></tr>
</table></center></div></form>';

/** pesan **/
if($_GET['pass']=='sukses'){
echo 'Password sukses diubah...';
}
if($_GET['pass']=='gagal'){
echo 'Password gagal diubah...';
}
if($_GET['pass']=='salah'){
echo 'Password tidak cocok, gagal diubah...';
}

echo '</div></div>';


?>