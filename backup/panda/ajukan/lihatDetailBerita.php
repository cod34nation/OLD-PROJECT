
<?php
include "koneksi.php";
session_start();
//include "prosesverifikasi.php";
$ambil_data = mysql_query("select * from pengajuan where id_pengajuan='$_GET[id]'",$koneksi);
$hasil_data = mysql_fetch_array($ambil_data);
$id_pengajuan=$_GET['id'];

$id=uniqid(rand());
$ref= substr($id,12);
$tgl=date('d-m-Y');

?>
<html>
<head>

  <style>

  </style>
  </head>
<div class="paragraphs">
  <div class="row">
    <div class="span12 well">
      <img class="img-polaroid" src="<?=$hasil_data['gambar'];?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>
      <div class="content-heading"><h3><?=$hasil_data['atas_nama'];?></h3></div>
      <p><a href="#" class="btn btn-inverse">Diposkan pada <?=$hasil_data['tanggal'];?></a> </p>
       <p style="text-align:justify;"><?=$hasil_data['alamat'];?></p>
        <p style="text-align:justify;"><?=$hasil_data['hp'];?></p>
      <p style="text-align:justify;"><?=$hasil_data['keterangan'];?></p>
      <div style="clear:both;"></div>
    </div>
  </div>
  <div class="row">
    <div class="span12 well">
      <div class="register-box-body">
        <p class="login-box-msg"><h2>Ajukan Donasi Anda</h2></p>
          <div class="form-group has-feedback">
          </div>
          <?php
            $koneksi=mysql_connect('localhost','root','');
            mysql_select_db('panda',$koneksi); 
           // include "koneksi.php";
            $test_q="SELECT * FROM user group by id_user desc";
            $hasil=mysql_query($test_q);
            $q=mysql_fetch_array($hasil);
            $b= $q['id_user']; ?>
<form class="form-inline" name="submit" method ="post" action ="prosesinputdp.php">

          <div class="form-group has-feedback">
            <input type="hidden" name="idRef"id="idRef" class="form-control" value="<?php echo $ref;?>">
          </div>
          <?php echo" <h4>ID Referen :".$ref."<br></h4>"; ?>

          <div class="form-group has-feedback">
            <input type="hidden" name="id_user"id="id_user" class="form-control" value="<?php echo $b;?>">
          </div>
          <?php echo"<h4> ID Donatur : " .$b." </h4>" ?>
          <div class="form-group has-feedback">
            <input type="hidden" name="tgl"id="tgl" class="form-control" value ="<?php echo $tgl;?>">
          </div>
          <input type="hidden" name="email" id="email" class="form-control" 
            value ="">
            <input type="hidden" name="id_pengajuan" id="id_pengajuan" class="form-control" 
            value ="<?php echo $id_pengajuan ?>">
            <?php echo "<h4>ID Pengajuan : ". $id_pengajuan." <h4>";?>
                    <div class="form-group has-feedback">
            <input type="text" name="nama"id="nama" class="form-control" placeholder="Nama Lengkap">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
<div class="form-group has-feedback">
            <input type="hidden" name="tgl"id="tgl" class="form-control" value ="<?php echo $tgl;?>">
          </div>
          <?php echo" Tanggal Transfer : ".$tgl;?>
          <div class="form-group has-feedback">
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Nominal (Rupiah)</label>
    <div class="input-group">
      <div class="input-group-addon">Rp XXX</div><input type="text" class="form-control" id="exampleInputAmount" placeholder="Nominsi" name="uang" id="uang">
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Transfer</button>
</form>        
          </div>
          </div>      
    </div>
  </div>
</div>
</html>