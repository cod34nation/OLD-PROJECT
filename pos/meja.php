<?php
error_reporting(0);
session_start();

if (empty($_SESSION[nauser]) AND empty($_SESSION[passuser]))
{
	header('location:index.php?aks=error3');
}else{
/**
contoh-ta.com
 * @author 
 * @copyright 2012
 */
echo '<head>';
echo '<script type="text/javascript" src="jesi/jquery-1.4.js"></script>';
echo '<script type="text/javascript" src="jesi/superfish.js"></script>';
echo '<script type="text/javascript" src="jesi/hoverIntent.js"></script>';
echo '<link href=\'casa/tokobj.css\' rel=\'stylesheet\' type=\'text/css\'>';
echo '<script type="text/javascript">
$(document).ready(function(){
	jQuery(\'ul.sf-menu\').superfish();
});
</script>';
echo '</head>';

include "cfg/indotgl.php";
include "cfg/konfigurasi.php";
include "cfg/fungsi_halaman.php";
include "cfg/aksesbatas.php";

echo '<div id=page>';

echo '<div id=header>';
	$queryTOK=mysql_query("SELECT * FROM toko");
	$TOK=mysql_fetch_row($queryTOK);
	$NTOK=$TOK[0];
	$ATOK=$TOK[1];
	$TTOK=$TOK[2];
//	echo 'tes di dalam header warna kuning';
echo '<div class=namatoko>';
	echo '<a href="meja.php" ><font face="Calibri" size="5">'; echo $NTOK; echo '</font></a>'; echo '<br />'; echo $ATOK; echo '&nbsp-&nbsp'; echo $TTOK; 
echo '</div>';
echo '<div class=namakasir>';
	echo $_SESSION[nauser]; echo ' : '; echo tgl_indo($ktgl); echo '&nbsp|&nbsp'; echo $kjam;
echo '</div>';
echo '</div>';

echo '<div id=content>';
echo '<div id="menu">';
	include "menusf.php";
echo '</div>';
if (isset($_GET['kertas'])){
$aksesu=permit();
if($aksesu){
	if($_GET['kertas']=='mesin_kasir'){
		include "ksr/kasir.php";		
	}
	elseif($_GET['kertas']=='setoran'){
		include "ksr/setor.php";
	}
	elseif($_GET['kertas']=='toko'){
	//	include "tko/toko.php";
	}
	elseif($_GET['kertas']=='user'){
	//	include "usr/user.php";
	}
	elseif($_GET['kertas']=='harga'){
		include "tko/harga.php";
	}
	elseif($_GET['kertas']=='pembelian'){
		include "tko/beli.php";
	}
	elseif($_GET['kertas']=='penjualan'){
		include "tko/jual.php";
	}
	elseif($_GET['kertas']=='koreksi'){
		include "tko/koreksi.php";
	}
	elseif($_GET['kertas']=='info_program'){
		include "cfg/info.php";
	}
	elseif($_GET['kertas']=='stok'){
		include "tko/stok.php";
	}
	elseif($_GET['kertas']=='profil'){
		include "usr/pruser.php";
	}
	elseif($_GET['kertas']=='ubah_password'){
		include "usr/upass.php";
	}
	elseif($_GET['kertas']=='tambah_user'){
		include "usr/adduser.php";
	}
	elseif($_GET['kertas']=='rekap_setoran'){
		include "ksr/rsetoran.php";
	}
	elseif($_GET['kertas']=='info_toko'){
		include "tko/toko.php";
	}
	elseif($_GET['kertas']=='cstok'){
		include "tko/crstok.php";
	}
	elseif($_GET['kertas']=='setor'){
		include "tko/ksetoran.php";
	}
	elseif($_GET['kertas']=='laru'){
		include "tko/laru.php";
	}
	else { echo 'modul belum tersedia'; }
}
}
if($_GET['mess']=='gagal'){
	echo '<h3>Harus menyelesaikan setoran hari ini, sebelum backup toko!</h3><hr>';
}	
echo '</div>';

echo '<div id="footer">';
echo 'Contoh TA TOKO [<a href="http://www.contoh-ta.com" >Contoh-TA</a>]';
echo '</div>';

echo '</div>';
}

?>