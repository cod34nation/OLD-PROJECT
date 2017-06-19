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
 mysql_select_db("panda"); 
 $q = $_GET['q'];
 
//Menghitung Jumlah Yang Tampil 

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 6;
$mulai_dari = $limit * ($page - 1);
$sqlCount = "select count(id_ref) from konfirmasi where id_ref like '%$q%' or id_user like '%$q%' or atas_nama like '%$q%' or tanggal_transfer like '%$q%'";
$rsCount = mysql_fetch_array(mysql_query($sqlCount));
$banyakData = $rsCount[0];
$sql = "select * from konfirmasi where id_ref like '%$q%' or id_user like '%$q%' or atas_nama like '%$q%' or tanggal_transfer like '%$q%' order by id_ref DESC limit $mulai_dari, $limit"; 
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
 <td><?php echo hightlight($row['id_ref'],$q);?></td> 
 <td><?php echo hightlight($row['id_user'],$q);?></td> 
 <td><?php echo hightlight($row['atas_nama'],$q);?></td>
 <td><?php echo hightlight($row['tanggal_transfer'],$q);?></td>
 <td><?php echo hightlight($row['tanggal_konfirm'],$q);?></td>
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