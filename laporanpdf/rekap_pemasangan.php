<?php
include "koneksi.php";
include "pdf/class.ezpdf.php"; //class ezpdf yg di panggil
$pdf = new Cezpdf();

//Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('pdf/fonts/Courier.afm');

//Tampilkan gambar di dokumen PDF
$pdf->addJpegFromFile('sipi.jpg',31,778,90);

//Teks di tengah atas untuk judul header
$pdf->addText(140, 800, 16,'<b>REKAPITULASI PEMASANGAN IKLAN</b>');
$pdf->addText(125, 780, 14,'<b>PT.SISTEMPHP.COM (Jl.Soebrantas km.16)</b>');

//Garis atas untuk header
$pdf->line(31, 770, 565, 770);

//Garis bawah untuk footer
$pdf->line(31, 50, 565, 50);

//Teks kiri bawah
$pdf->addText(410,34,8,'Dicetak tgl:' . date( 'd-m-Y, H:i:s'));

// Baca input tanggal yang dikirimkan user
$dari = date_format(date_create($_POST['dari']), 'Y-m-d');
$sampai = date_format(date_create($_POST['sampai']), 'Y-m-d');
//echo "$mulai $selesai";exit;

//Menampilkan isi dari database
//Koneksi ke database dan tampilkan datanya
mysql_connect("localhost", "root", "");
mysql_select_db("sipi");

$tampil = "SELECT a.id_pasang, a.judul_iklan, a.isi_iklan, a.awal, a.akhir, b.kategori, c.tipe, c.harga, d.nama FROM pasang a, kategori b, iklan c, user d  WHERE 
	awal between '$dari' and '$sampai' AND a.id_kategori = b.id_kategori and a.id_iklan = c.id_iklan and a.id_user = d.id_user ORDER BY a.id_pasang DESC
  ";
//echo $tampil;exit;
$sql = mysql_query($tampil);

//Menghitung jumlah data pada database				
$jml = mysql_num_rows($sql);
//echo $jml;exit;
if ($jml > 0){

$i = 1;
while($r = mysql_fetch_array($sql)) {

//Format Menampilkan data di ezPdf
	$data[$i]=array('No'=>$i,
			       'Judul'=>"$r[judul_iklan]",
				   'Kategori'=>"$r[kategori]",
				   'Tipe'=>"$r[tipe]",
				   'Pemasang'=>"$r[nama]",
				   'Tgl. Pasang'=>"$r[awal]",
				   'Tgl. Berakhir'=>"$r[akhir]",
				   'Harga'=>'Rp. '.number_format(($r[harga]),0,',','.')
				   );
	$i++;

}

//Tampilkan Dalam Bentuk Table
$pdf->ezTable($data);

$pdf->ezText("\nPeriode: $dari s/d $sampai");

// Penomoran halaman
$pdf->ezStartPageNumbers(564, 20, 8);
$pdf->ezStream();
}

else{

	echo "
	<script>
	alert('Tidak Ada Pemasangan Iklan');
	window.location=\"../../?modul=laporan&aksi=cetak\";
	</script>
	";

}

?>