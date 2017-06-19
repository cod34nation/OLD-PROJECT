<?php

/**
 * @author 
 * @copyright 2012
 */
if(isset($_GET['idu'])){ 
	session_start();
$idus=$_GET['idu'];
$queryUUSRP = mysql_query("select * from usertoko where id_user='$idus'"); 
$UUSRP=mysql_fetch_row($queryUUSRP);
echo '<div class="kotaku">';
echo '<form name="uprof" method="POST" action="" onsubmit="return vuprof(uprof)"><div class="kotakhw">UBAH PROFIL</div><div class="kotakbw"><hr><center>';
echo '<table>
<tr><td>ID User</td><td><input type="text" id="iuser" name="iuser" value="';echo $UUSRP[0]; echo '" disabled></td></tr>
<tr><td>Nama User</td><td><input type="text" id="nuser" name="nuser" value="'; echo $UUSRP[1]; echo '"></td></tr>';
if($_SESSION[leveluser]=='A'){
	echo '<tr><td>Level User</td><td><select size="1" name="luserh">
	<option value="A">Admin</option>
	<option value="U" selected>User</option>
</select></td></tr>';
	}else{
echo '<tr><td>Level User</td><td><input type="text" id="luser" name="luser" value="'; echo $UUSRP[4]; echo'" disabled></td></tr>'; } 
echo '<tr><td></td><td align="right"><input type="submit" value="Ubah"></td></tr>';
echo '</table></center></div>
</form>';
if(isset($_POST[nuser]) AND isset($_POST[luserh])){
	mysql_query("UPDATE usertoko SET nama_user='$_POST[nuser]',level_user='$_POST[luserh]' WHERE id_user='$idus'");
}
echo '</div></div>';}
?>