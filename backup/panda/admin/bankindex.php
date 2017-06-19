<?php
include("koneksi2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BANK AREA</title>

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php
error_reporting(E_ALL & ~E_NOTICE);
 ?>
	<div class="container">
		<div class="content">
			<h2>Data &raquo; Konfirmasi Donasi</h2>
			<hr />
			
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$id_ref = $_GET['id_ref'];
				$cek = mysqli_query($koneksi, "SELECT * FROM konfirmasi WHERE id_ref='$id_ref'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM konfirmasi WHERE id_ref='$id_ref'");
					if($delete){
						echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-info">Data gagal dihapus.</div>';
					}
				}
			}
			?>
			
			
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
				    <th>No.</th>
					<th>ID References</th>
					<th>ID User</th>
					<th>Atas Nama</th>
					<th>Tanggal Transfer</th>
					<th>Tanggal Konfirm</th>
					<th>Jumlah Nominal</th>
					<th>STATUS</th>
					
				</tr>
				<?php
				
				$sql = mysqli_query($koneksi, "SELECT * FROM konfirmasi WHERE status='2' ORDER BY id_ref ASC");
				
				
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
				<tr>
					<td>'.$no.'</td>
					<td>'.$row['id_ref'].'</td>
					<td>'.$row['id_user'].'</td>
					<td>'.$row['atas_nama'].'</td>
					<td>'.$row['tanggal_transfer'].'</td>
				<td>';if ($row['tanggal_konfirm']== '') {
						echo "Belum Di Konfirmasi";
					}else {
					echo $row['tanggal_konfirm'];
						}
						echo'</td>
				<td>'.$row['jumlah_nominal'].'</td>
				<td>';
					if($row['status'] == 1){
					echo '<span class="label label-danger">Belum Transfer</span>';
					}else{
       				echo '<span class="label label-success">Sudah Transfer</span>';
							}
					echo '
							</td>
				
						</tr>
						';
						$no++;
					}
				
				?>
			</table>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>