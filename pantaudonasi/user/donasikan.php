<?php 
include "koneksi.php";
$myid=$_POST['id'];
$myus=$_POST['us'];

$ambil_data = mysqli_query($koneksi,"select * from pengajuan where id_pengajuan='$myid'");
$hasil_data = mysqli_fetch_array($ambil_data);

$ambil_dataku = mysqli_query($koneksi,"select * from user where id_user='$myus'");
$hasil_dataku = mysqli_fetch_array($ambil_dataku);

$tot= mysqli_query($koneksi,"select sum(jumlah_nominal) as total from donasi where id_pengajuan='$myid' AND id_status=3");
$dat=mysqli_fetch_array($tot);
$total=$dat['total'];

$nem= mysqli_query($koneksi,"select atas_nama, jumlah_nominal FROM donasi WHERE id_pengajuan='$myid' AND id_status=3");

$id=uniqid(rand());
$ref= substr($id,12);

?>
<div class="row">
    <div class="span12 well">
      <img class="img-polaroid" src="images/user.png" style="width:250px; height: 200px; float:left; margin-right:10px;"/>
      <div class="content-heading"><h3>Nama <?php echo $hasil_data['atas_nama']; ?></h3></div>
      <p><a href="#" class="btn btn-inverse">Diposkan pada <?php echo $hasil_data['tanggal']; ?></a> </p>
      <p> Total Dana Terkumpul :<b> <?php echo $total; ?></b>
       <p style="text-align:justify;">Alamat : <?php echo $hasil_data['alamat'] ?></p>
        <p style="text-align:justify;">Contact : <?php echo $hasil_data['telp']; ?></p>
      <p style="text-align:justify;">Kategori : <?php echo $hasil_data['kategori']; ?></p>
      <p>MENERIMA DONASI DARI</p>
       <?php 
      while ($em=mysqli_fetch_array($nem)) {
        echo "<b>".$em['atas_nama']." </b> Sejumlah <b>".$em['jumlah_nominal']." </b><br>";

      }

      ?>
      <div style="clear:both;"></div>
    </div>
  </div>
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="prosesdonasi.php">

                      <div class="form-group has-feedback">
                        <input type="hidden" name="id_user" id="id_user" class="form-control" value="<?php echo $myus;?>">
                      </div>
                      <div class="form-group has-feedback">
                        <input type="hidden" name="id_pengajuan" id="id_user" class="form-control" value="<?php echo $myid;?>">
                      </div>
                      <div class="form-group has-feedback">
                        <input type="hidden" name="status" id="id_user" class="form-control" value="1">
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Donasi Atas Nama<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="atasnama" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nama Lengkap / Hamba Allah (Bebas)">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Donasi<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="tanggal" value="<?php echo date('d-m-Y');?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group has-feedback">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">ID Ref Bank : <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <?php echo $ref; ?>
                        <input type="hidden" name="idRef" id="idRef" class="form-control" value="<?php echo $ref;?>">
                          </div>
                          </div> 
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah Nominal Rp.</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="nominal" placeholder="Contoh 1000000">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>