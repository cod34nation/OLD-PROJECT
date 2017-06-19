<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Manajemen</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	
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
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="#">Manajemen Santri</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="#">Manajemen Santri</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Beranda</a></li>
					<li class="active"><a href="add.php">Tambah Data</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Manajemen Santri &raquo; Tambah Data Santri</h2>
			<hr />














			
			
			<?php
			if(isset($_POST['add'])){
				$nis		= $_POST['nis'];
				$nama		= $_POST['nama'];
				$tmp		= $_POST['tempat_lahir'];
				$tgl		= $_POST['tanggal_lahir'];
				$tlp		= $_POST['telp'];
				$jk			= $_POST['jenis_kelamin'];
				$sekolah	= $_POST['sekolah'];
				$lantai		= $_POST['lantai'];
				$kamar		= $_POST['kamar'];
				$alamat		= $_POST['alamat'];
				$status		= $_POST['status'];
				
				$cek = mysqli_query($koneksi, "SELECT * FROM santri WHERE nis='$nis'");
				if(mysqli_num_rows($cek) == 0){
								
						$insert = mysqli_query($koneksi, "INSERT INTO santri (nis, nama, tempat_lahir, tanggal_lahir, telp, jenis_kelamin, sekolah, lantai, kamar, alamat, status)
														VALUES('$nis',  '$nama', '$tmp', '$tgl',  '$tlp', '$jk', '$sekolah', '$lantai', '$kamar', '$alamat', '$status')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success">Pendaftaran berhasil dilakukan.</div>';
						}else{
							echo '<div class="alert alert-danger">Pendaftaran gagal dilakukan, silahkan coba lagi.</div>';
						}
					
				}else{
					echo '<div class="alert alert-danger">NIM sudah terdaftar.</div>';
				}
			}
			?>
			
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">NIS</label>
					<div class="col-sm-2">
						<input type="text" name="nis" class="form-control" placeholder="NIS" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA LENGKAP</label>
					<div class="col-sm-4">
						<input type="text" name="nama" class="form-control" placeholder="NAMA LENGKAP" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TEMPAT & TANGGAL LAHIR</label>
					<div class="col-sm-3">
						<input type="text" name="tempat_lahir" class="form-control" placeholder="TEMPAT LAHIR" required>
					</div>
					<div class="col-sm-2">
						<div class="input-group date" data-provide="datepicker">
							<input type="text" name="tanggal_lahir" class="form-control" placeholder="0000-00-00">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Telepon / Hp</label>
					<div class="col-sm-3">
						<input type="text" name="telp" class="form-control" placeholder="Telepon" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">JENIS KELAMIN</label>
					<div class="col-sm-2">
						<select name="jenis_kelamin" class="form-control" required>
							<option value="">JENIS KELAMIN</option>
							<option value="Laki-Laki">LAKI-LAKI</option>
							<option value="Perempuan">PEREMPUAN</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Sekolah/Kampus</label>
					<div class="col-sm-3">
						<input type="text" name="sekolah" class="form-control" placeholder="Sekolah/Kampus" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALAMAT</label>
					<div class="col-sm-6">
						<textarea name="alamat" class="form-control" placeholder="ALAMAT"></textarea>
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-3 control-label">Lantai</label>
					<div class="col-sm-3">
						<input type="text" name="lantai" class="form-control" placeholder="Lantai Tinggal" required>
					</div>
				</div>
					<div class="form-group">
					<label class="col-sm-3 control-label">Kamar</label>
					<div class="col-sm-3">
						<input type="text" name="kamar" class="form-control" placeholder="Kamar Tinggal" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">STATUS</label>
					<div class="col-sm-2">
						<select name="status" class="form-control" required>
							<option value="">STATUS</option>
							<option value="1">AKTIF</option>
							<option value="2">TIDAK AKTIF</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
						<a href="index.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>
