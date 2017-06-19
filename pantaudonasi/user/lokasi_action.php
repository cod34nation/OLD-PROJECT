 <?php
include ('inc/config.php');
//data dari lokasi

$nokt = $_POST['noktp'];
$nama = $_POST['nama'];
$alamatk=$_POST['alamatku'];
$hpk=$_POST['hpku'];
$tggl=$_POST['tanggalku'];
$ketr=$_POST['keteranganku'];
$katg=$_POST['kategoriku'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];


// $aksi = $_POST['aksi'];
// $id = $_POST['id'];

// $sql = null;

$sql = "INSERT INTO pengajuan(id_pengajuan,no_ktp,atas_nama,alamat,telp,tanggal,keterangan,gambar,status,kategori,lat,lng)
		VALUES(null,'$nokt','$nama','$alamatk','$hpk','$tggl','$ketr','','1','$katg','$lat','$lng')";

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if($result) {
	header('location:index.php?page=lokasi_form&status=0');
} else {
	header('location:index.php?page=lokasi_form&status=0');
}
mysql_close();
?>
