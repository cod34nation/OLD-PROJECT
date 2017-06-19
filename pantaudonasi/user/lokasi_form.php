<!DOCTYPE html>
<html lang="en">
  
    <!-- Le styles -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/peta.css">
    <style type="text/css">   body {
        padding-top: 0px;
        padding-bottom: 40px;
        
      }
      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }
      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }
      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
</style>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyD9tCRG-KAV35C25bvJ527azwCvuQlu6ZA"
    type="text/javascript"></script>

 
    <div class="container-narrow">
      <hr>
       
               <div class='row'>
  <div class="span8">
  

  <div id="map"></div>
  
</div> <!--end -f span-->
<div class="span8">
<form   method="POST" id="form1" action="lokasi_action.php" class='form-horizontal'>
<br>
 <legend>  lokasi</legend>


   <div class="control-group">
    
    <label class="control-label" for="nama">No Ktp</label>
    <div class="controls">
      <input type="text" name='noktp' class='input-xlarge'>
    </div>

    <label class="control-label" for="nama">Atas Nama</label>
    <div class="controls">
      <input type="text" name='nama' class='input-xlarge'>
    </div>
    
    <label class="control-label" for="nama">Alamat</label>
    <div class="controls">
      <input type="text" name='alamatku' class='input-xlarge'>
    </div>
    
    <label class="control-label" for="nama">HP</label>
    <div class="controls">
      <input type="text" name='hpku' class='input-xlarge'>
    </div>

    <label class="control-label" for="nama">Tanggal</label>
    <div class="controls">
      <input type="text" name='tanggalku' value="<?php echo date('d-m-Y');?>" class='input-xlarge'>
    </div>

    <label class="control-label" for="nama">Keterangan</label>
    <div class="controls">
      <input type="text" name='keteranganku' class='input-xlarge'>
    </div>

    <label class="control-label" for="nama">Kategori</label>
    <div class="controls">
     <select class='input-xlarge' id="sel1" name="kategoriku">
    <option>BENCANA</option>
    <option value="YATIM">YATIM PIATU</option>
    <option value="KEMISKINAN">KEMISKINAN</option>
    <option value="PENDIDIKAN">PENDIDIKAN</option>
    <option value="KESEHATAN">KESEHATAN</option>
    <option value="PEMBANGUNAN">PEMBANGUNAN</option>
    <option value="BENCANAN">KORBAN BENCANA</option>
  </select>
    </div>

  </div>

   <div class="control-group">
    <label class="control-label" for="lokasiku"> LOCATION POSITION </label>
    <div class="controls">
      <input type="disable" name='lat' id='lat' class='input-xlarge' >
    </div>
  </div>
  <div class="control-group">
    
    <div class="controls">
      <input type="disable" name='lng' id='lng' class='input-xlarge'>
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
     
      <button type="submit" class="btn btn-success"> SUBMIT</button>
    </div>
  </div>
  </form>
</div>

<?php
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
  if($_GET['status'] == 0) {
    echo " Tambah Lokasi berhasil";
  } else {
    echo "Tambah Lokasi  gagal";
  }
}
?>
<script src="js/lokasi.js"></script>
      </div>
              </div>
           
              </html>
