<?php

/**
 * @author contoh-ta.com
 * @copyright 2012
 */

include "cfg/konfigurasi.php"; 
session_start();
echo '<table>
	  <tr><th>nama toko</th><th>alamat toko</th><th>telepon</th><th>opt1</th><th>edit</th></tr>';
$queryntoko = mysql_query("select * from toko"); 
$nntoko=mysql_fetch_row($queryntoko);
	print "<tr align=center><td>$nntoko[0]</td><td>$nntoko[1]</td><td>$nntoko[2]</td><td>$nntoko[3]</td>"; if ($_SESSION[leveluser]=='A'){print "<td align='center'><a href='?kertas=info_toko&ubto=edit' title='ubah'><img src=img/b_edit.png alt=edit></a></td>";}else{ print "<td>-forbidden-</td>";} print "</tr>"; 
	
echo '</table><br>';

?>