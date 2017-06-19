<?php

/**
 * @author 
 * @copyright 2012
 */

include "cfg/konfigurasi.php"; 
session_start();
if($_SESSION[leveluser]=='A'){
echo '<table>
	  <tr><th>no</th><th>id user</th><th>nama user</th><th>level user</th><th>ubah</th></tr>';
$queryUSRP = mysql_query("select * from usertoko"); 
$nous=1;
while($USRP=mysql_fetch_row($queryUSRP)){
	print "<tr align=center><td>$nous</td><td>$USRP[0]</td><td>$USRP[1]</td><td>$USRP[4]</td><td align='center'><a href='?kertas=profil&ubahp=uprof&idu=$USRP[0]' title='ubah'><img src=img/b_edit.png alt=edit></a></td></tr>"; 
	$nous++;
} 
echo '</table><br>';
}else{
	$queryUSRP = mysql_query("select * from usertoko WHERE id_user='$_SESSION[iduser]'"); 
$USRP=mysql_fetch_row($queryUSRP);
echo '<table>
	  <tr><th>id user</th><th>nama user</th><th>level user</th><th>ubah</th></tr>';
print "<tr align=center><td>$USRP[0]</td><td>$USRP[1]</td><td>$USRP[4]</td><td align='center'><a href='?kertas=profil&ubahp=uprof&idu=$USRP[0]' title='ubah'><img src=img/b_edit.png alt=edit></a></td></tr>";  //fungsi beda sendiri karena varchar
echo '</table><br>';
}
?>