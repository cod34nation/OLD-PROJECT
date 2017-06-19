<?php
include "koneksi.php";
$ambil_recent = mysql_query("select id_pengajuan,atas_nama,tanggal from pengajuan where status='2' order by rand() limit 20",$koneksi);

?>
<div class="well sidebar-nav">
    <ul class="nav nav-list">
        <li class="nav-header">Menu</li>
        <li><a href="index.php?link=tambahBerita.php">&rarr; Pengajuan Orang Membutuhkan</a></li>
        <li><a href="index.php?link=lihatBerita.php">&rarr; Daftar Orang Membutuhkan Donasi</a></li>
        <li class="nav-header">Baca Juga</li>
        <ul type="square">
        	<?php
				while($hasil_recent= mysql_fetch_array($ambil_recent)){
        			echo "<li><a href='index.php?link=lihatDetailBerita.php&id=$hasil_recent[id_pengajuan]'>".$hasil_recent['atas_nama']."</a></li>";
				}
			?>
        </ul>
    </ul>
</div><!--/.well ko-->