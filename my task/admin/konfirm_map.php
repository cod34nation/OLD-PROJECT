<?php

include("koneksi2.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KONFIRMASI MAP</title>

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
include('session.php');
error_reporting(E_ALL & ~E_NOTICE);
ob_start();
$page=htmlentities($_GET['page']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</head>
<div>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Panda Project Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="admin.php">Home</a></li>
        
        <li><a href="?page=transaksi">Data Transfer Donatur</a></li>
        <li><a href="konfirm_map.php">Konfirmasi Map</a></li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>

	<?php
error_reporting(E_ALL & ~E_NOTICE);
 ?>
	<div class="container">
		<div class="content">
			<h2>Data &raquo; Konfirmasi Map</h2>
			<hr />
			
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$id_ref = $_GET['id_ref'];
				$cek = mysqli_query($koneksi, "SELECT * FROM pengajuan WHERE id_ref='$id_ref'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM pengajuan WHERE id_ref='$id_ref'");
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
					<th>No KTP</th>
					<th>Atas Nama</th>
					<th>Telp</th>
					<th>Tanggal Pengajuan</th>
					<th>Keterangan</th>
			
                    <th>Status Map</th>
					<th>Tanggal Konfirmasi</th>
					<th>Aksi</th>
					
				</tr>
				<?php
				
				$sql = mysqli_query($koneksi, "SELECT * FROM pengajuan  GROUP BY id_pengajuan DESC ");
				
				
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
				<tr>
					<td>'.$no.'</td>
					<td>'.$row['no_ktp'].'</td>
					<td>'.$row['atas_nama'].'</td>
					<td>'.$row['telp'].'</td>
					<td>'.$row['tanggal'].'</td>
                    <td>'.$row['keterangan'].'</td>
						<td>';
					if($row['status'] == 1){
					echo '<span class="label label-danger">Menunggu... 
					</span>';
					}else{
       				echo '<span class="label label-success">Tampil</span>';
							}
					echo '
							</td>
				<td>';if ($row['tanggal_konfirm']== '') {
						echo "Belum Di Konfirmasi";
					}else {

					echo $row['tanggal_konfirm'];
						}
						echo'</td>
				
			<td>';if ($row['status']==1) {
					echo '<a href="update_peta.php?id='.$row['id_pengajuan'].'" title="Rubah Data"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>KONFIRMASI   </a>';
					}'
					

					
				


								';
							if ($row['status']==2) {
								echo '<a href="cancel_map.php?id='.$row['id_pengajuan'].'" title="Rubah Data"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>   CANCEL</a>';
							}'
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