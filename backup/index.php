<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
<?php 
mysql_connect("localhost","root",""); 
mysql_select_db("parkir"); 
$result = mysql_query("select * from parkir"); 
$jsArray = "var prdName = new Array();\n"; 
echo '<table align="center">';
echo '<tr>';
echo '<td>Kode Produk <td>:<td> <select name="kode" onchange="changeValue(this.value)">'; 
echo '<option>-------</option>'; 
while ($row = mysql_fetch_array($result)) { 
    echo '<option value="' . $row['no_parkir'] . '">' . $row['no_parkir'] . '</option>'; 
    $jsArray .= "prdName['" . $row['no_parkir'] . "'] = {miez:'" . addslashes($row['alamat']) . "',de:'".addslashes($row['jk'])."',hard:'".addslashes($row['nama_pemilik'])."'};\n"; 
} 
echo '</select>'; 
?> 
<tr>
<td>
Nama<td>  :<td> <input type="text" name="nama" id="nama"/>
<tr>
<td>
Jenis Kelamin <td>: <td><input type="text" name="jk" id="jk"/>
<tr><td>
alamat <td>:<td> <input type="text" name="alamat" id="alamat"/></td></tr>

<script type="text/javascript"> 
<?php echo $jsArray; ?>
function changeValue(id){
document.getElementById('nama').value = prdName[id].hard;
document.getElementById('jk').value = prdName[id].de;
document.getElementById('alamat').value = prdName[id].miez;

};
</script>
</body>
</html>