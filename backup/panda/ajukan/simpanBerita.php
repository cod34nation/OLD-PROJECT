<?php
include "koneksi.php";
$atas_nama  = addslashes($_POST['atas_nama']);
$alamat  = addslashes($_POST['alamat']);
$nohp  = addslashes($_POST['nohp']);
$tgl_berita = date('d M Y H:i');
$isi_berita	= addslashes($_POST['isi_berita']);

#tangkap gambar
$namafolder="gambar/"; //folder tempat menyimpan file
if (!empty($_FILES["gbr_berita"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['gbr_berita']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png"|| $jenis_gambar=="video/mp4"|| $jenis_gambar=="audio/mp3"
      || $jenis_gambar=="audio/mpeg"|| $jenis_gambar=="audio/mpeg-3"|| $jenis_gambar=="audio/x-mpeg3"|| $jenis_gambar=="audio/wav"|| $jenis_gambar=="audio/x-wav"|| $jenis_gambar=="audio/mp3")
    {           
        $gambar = $namafolder . basename($_FILES['gbr_berita']['name']);       
        if (move_uploaded_file($_FILES['gbr_berita']['tmp_name'], $gambar)) {

           mysql_query("insert into pengajuan values ('','$atas_nama','$alamat','$nohp','$tgl_berita','$isi_berita','$gambar','1')",$koneksi); 
		   ?>
				<script language="javascript">
                    alert('Data Tersimpan, Pengajuan masih dalam proses, terimakasih');
                    document.location="index.php?link=lihatBerita.php";
                </script>
   			<?php
        } else {
         	?>
				<script language="javascript">
                    alert('Gagal menambahkan');
                    document.location="index.php?link=tambahBerita.php";
                </script>
   			<?php
        }
   } else {
        ?>
			<script language="javascript">
                alert('Gambar harus berformat .jpg .png .gif');
                document.location="index.php?tambahBerita.php";
            </script>
   		<?php
   }
} else {
    echo "Anda belum memilih gambar";
}
?>