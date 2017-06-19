<?php
include("koneksi.php");
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
	<?php if(!isset($_GET['q'])):?>

<center><form name="form1" method="get" action=""> 
<table><td></td><td><textarea name="q" rows="1" id="q"></textarea></td><td><input type="submit" value="Search"/></td>
</table>
</form> </center>

<div id="result"></div>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
	var allow = true;
	$(document).ready(function(){
		$("#q").keyup(function(e){
			if(e.which == '13'){
				e.preventDefault();
					
				loadData();
			}else if($(this).val().length >= 0){
					
				loadData();
			}
		});
	});
	function loadData(){
	var query=document.getElementById('q').value;
		if(allow){
			allow = false;
			$("#result").html('loading...');
			$.ajax({
				url:'cari.php?q='+query,
				success:
					function (data){
					$("#result").html(data);
					allow = true;
				}
			});
		}
	}
</script>
<?php endif;?>
<style>
.highlight
{
background: #CEDAEB;
}

.highlight_important
{
background: #9afa95;
}
</style>

<?php 
//Fungsi Mark Teks
function hightlight($str, $keywords = '')
{
$keywords = preg_replace('/\s\s+/', ' ', strip_tags(trim($keywords))); // filter

$style = 'highlight';
$style_i = 'highlight_important';

/* Apply Style */

$var = '';

foreach(explode(' ', $keywords) as $keyword)
{
$replacement = "<span class='".$style."'>".$keyword."</span>";
$var .= $replacement." ";

$str = str_ireplace($keyword, $replacement, $str);
}
$str = str_ireplace(rtrim($var), "<span class='".$style_i."'>".$keywords."</span>", $str);
return $str;
}

//END Fungsi Mark Teks
if(isset($_GET['q']) && $_GET['q']){ 
 $conn = mysql_connect("localhost", "root", ""); 
 mysql_select_db("pantaudonasi"); 
 $q = $_GET['q'];
 
//Menghitung Jumlah Yang Tampil 

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 6;
$mulai_dari = $limit * ($page - 1);
$sqlCount = "select count(kode_ref) from donasi where kode_ref like '%$q%' or id_user like '%$q%' or atas_nama like '%$q%' or tanggal_donasi like '%$q%'";
$rsCount = mysql_fetch_array(mysql_query($sqlCount));
$banyakData = $rsCount[0];
$sql = "select * from donasi where kode_ref like '%$q%' or id_user like '%$q%' or atas_nama like '%$q%' or tanggal_donasi like '%$q%' order by kode_ref DESC limit $mulai_dari, $limit"; 
//Akhir Menghitung Jumlah Yang Tampil 
 $result = mysql_query($sql);
 

 if(mysql_num_rows($result) > 0){ 
 ?> 
 <?php if(isset($_GET['page'])):?>
<form name="form1" method="get" action=""> 
<table><td></td><td><textarea name="q" rows="1" id="q"></textarea></td><td><input type="submit" value="Search"/></td>
</table>
</form> 
 <?php endif;?>
 <center><table border="1" width="700px"><tr bgcolor="silver"><td>ID REF BANK</td><td>ID USER</td><td>Atas Nama</td><td>Tanggal Transfer</td><td>Tanggal Konfirmasi</td><td>Jumlah Nominal</td><td>Status Donasi</td></tr>
 <?php 
 while($row = mysql_fetch_array($result)){?> 
 <tr> 
 <td><?php echo hightlight($row['kode_ref'],$q);?></td> 
 <td><?php echo hightlight($row['id_user'],$q);?></td> 
 <td><?php echo hightlight($row['atas_nama'],$q);?></td>
 <td><?php echo hightlight($row['tanggal_donasi'],$q);?></td>
 <td><?php echo hightlight($row['tanggal_perubahan'],$q);?></td>
 <td><?php echo hightlight($row['jumlah_nominal'],$q);?></td> 
 <td><?php 
 if ($row['status']==1) {
 	echo "Belum";
 } else {
 	echo "Sudah Di Terima";
 }
  ?></td> 
 </tr> 
 <?php }?> 
 </table> </center>
 <?php 
 }else{ 
 echo 'Data Tidak Ada'; 
 } 
 //Halaman
 $banyakHalaman = ceil($banyakData / $limit);
echo '</br><div id="page" style="font-size:17px">Halaman: ';
for($i = 1; $i <= $banyakHalaman; $i++){
 if($page != $i){
 echo '  [<a href="cari.php?page='.$i.'&q='.$q.'">'.$i.'</a>]  ';
 }else{
 echo "[<span style='color:silver'>$i</span>] ";
 }
}
echo '&nbsp&nbsp<a href="cari.php"><b>Ulangi Pencarian</b></a>';
//END HALAMAN
} 


?>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="#">PANDA PROJECT</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="#">BANK AREA</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>BANK AREA &raquo; Konfirmasi Donasi</h2>
			<hr />
			
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$kode_ref = $_GET['kode_ref'];
				$cek = mysqli_query($koneksi, "SELECT * FROM donasi WHERE kode_ref='$kode_ref'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info">Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM donasi WHERE kode_ref='$kode_ref'");
					if($delete){
						echo '<div class="alert alert-danger">Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-info">Data gagal dihapus.</div>';
					}
				}
			}
			?>
			
			<form class="form-inline" method="get">
				<div class="form-group">
					<select name="urut" class="form-control" onchange="form.submit()">
						<option value="0">SEMUA DATA</option>
						<?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
						<option value="1" <?php if($urut == '1'){ echo 'selected'; } ?>>Belum Transfer</option>
						<option value="3" <?php if($urut == '3'){ echo 'selected'; } ?>>Sudah Transfer</option>
					</select>
				</div>
			</form>
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
					<th>Status</th>
					<th>Aksi</th>
				</tr>
				<?php
				if($urut){
					$sql = mysqli_query($koneksi, "SELECT * FROM donasi WHERE id_status='$urut' ORDER BY kode_ref ASC");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM donasi ORDER BY kode_ref ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						   $jumlah_desimal ="0";
                              $pemisah_desimal =",";
                              $pemisah_ribuan =".";
                              $nominal=$row['jumlah_nominal'];
 
                              $dana="Rp ".number_format($nominal, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-";
                           
						echo '
				<tr>
					<td>'.$no.'</td>
					<td>'.$row['kode_ref'].'</td>
					<td>'.$row['id_user'].'</td>
					<td>'.$row['atas_nama'].'</td>
					<td>'.$row['tanggal_donasi'].'</td>
				<td>';if ($row['tanggal_perubahan']== '') {
						echo "Menunggu...";
					}else {
					echo $row['tanggal_perubahan'];
						}
						echo'</td>
				<td>'.$dana.'</td>
				<td>';
					if($row['id_status'] == 1){
					echo '<span class="label label-danger">Belum Transfer</span>';
					}else{
       				echo '<span class="label label-success">Sudah Transfer</span>';
							}
					echo '
							</td>
				<td>';if ($row['id_status']==1) {
					echo '<a href="up.php?id='.$row['kode_ref'].'" title="Rubah Data"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>KONFIRMASI   </a>';
					}'
					
				';
							if ($row['id_status']==3) {
								echo '<a href="down.php?id='.$row['kode_ref'].'" title="Rubah Data"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>   CANCEL</a>';
							}
							
							'
							</td>
						</tr>
						';
						$no++;
					}
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