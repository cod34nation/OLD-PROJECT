<?php
echo '<head>';
echo '<link rel="stylesheet" type="text/css" href="css/superfish.css">';
echo '<script type="text/javascript" src="jquery-1.4.js"></script>';
echo '<script type="text/javascript" src="superfish.js"></script>';
echo '<script type="text/javascript" src="hoverIntent.js"></script>';
echo '<script type="text/javascript">
$(document).ready(function(){
	jQuery(\'ul.sf-menu\').superfish();
});
</script>';
echo '</head>';

include "cfg/konfigurasi.php";
/**
 * @author contoh-ta.com
 * @copyright 2012
 */

/**user
if($_SESSION[leveluser]=='U'){
$queryMNU=mysql_query("SELECT * FROM menutoko WHERE level_menu='AU' ORDER BY no_menu ASC");
while($nMNU=mysql_fetch_row($queryMNU)){
	echo '<a href="';echo $nMNU[3]; echo'" title="'; echo $nMNU[5]; echo '" onclick="'; echo $nMNU[6]; echo '"><img src="';echo $nMNU[2]; echo '" width="24" height="24">&nbsp;'; echo $nMNU[1]; echo '</a>&nbsp;&nbsp;&nbsp;&nbsp;';
}echo '<a href="keluartoko.php" onclick="return confirm(\'Ingin Keluar?\')"><img src="img/exit.png" title="Keluar" width="24" height="24">&nbsp;Keluar</a>';
//echo '<br>Kasir Barcode 1.0 powered by PHP [<a href="http://wp.me/2BJD" >wp.me/2BJD</a>]';
//admin
}else{
$queryMNU=mysql_query("SELECT * FROM menutoko ORDER BY no_menu ASC");
while($nMNU=mysql_fetch_row($queryMNU)){
	echo '<a href="';echo $nMNU[3]; echo'" title="'; echo $nMNU[5]; echo '" onclick="'; echo $nMNU[6]; echo '"><img src="';echo $nMNU[2]; echo '" width="24" height="24">&nbsp;'; echo $nMNU[1]; echo '</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
}echo '<a href="keluartoko.php" onclick="return confirm(\'Ingin Keluar?\')"><img src="img/exit.png" title="Keluar" width="24" height="24">&nbsp;Keluar</a>';//	echo '<br>Kasir Barcode 1.0 powered by PHP [<a href="http://wp.me/2BJD" >wp.me/2BJD</a>]';
} **/
function get_menu($data, $parent=0){
	static $i=1;
	$tab=str_repeat(" ",$i);
	
	if($data[$parent]){
		$html="$tab<ul class='sf-menu'>";
		$i++;
		foreach($data[$parent] as $v){
			$child=get_menu($data, $v->id);
			$html.="$tab<li>";
			$html.='<a href="'.$v->url.'">'.$v->nama_menu.'</a>';
			if($child){
				$i--;
				$html.=$child;
				$html.="$tab";
			}
			$html.='</li>';
		}
		$html.="$tab</ul>";
		return $html;
	}
	else{
		return false;
	}
}
$sql=mysql_query("SELECT * FROM menutoko ORDER BY od_menu");
while($r=mysql_fetch_object($sql)){
	$data[$r->id_menu][]=$r;
}
$menu=get_menu($data);
echo "$menu";
?>