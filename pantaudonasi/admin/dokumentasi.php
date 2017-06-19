
<!DOCTYPE html>
<html>
<head>
<?php
error_reporting(E_ALL & ~E_NOTICE);
 ?>
	<title>Dokumentasi Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <style type="text/css">
    h1{
        margin: 30px 0;
        padding: 0 200px 15px 0;
        border-bottom: 1px solid #E5E5E5;
    }
	.bs-example{
    	margin: 20px;
    }
    .form-horizontal{
     width: 450px;
     position: relative;
     margin: 20px auto;
     border-radius: 10px;

    }

    


</style>
<script type="text/javascript">

                function PreviewImage() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

                oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
                };
                };

                </script>
</head>
<body>
</div>

<?php 
$nama_admin=mysql_query("select * from admin where id_admin=$login_id");
$namaadmin=$row['username'];
$id=$row['id_admin'];
?>
<div class="bs-example">
    <h1>Dokumentasi Form</h1>
    <center><p>Selamat Datang Admin : <b><?php echo $namaadmin; ?></b><br>Silahkan mengisi formulir dibawah ini</p></center> 
    <form name="form1" method="post" action="posting.php" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-xs-3" for="NomorIndukAdmin">Nomer Induk Admin</label>
            <div class="col-xs-9"><?php echo $id; ?>
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="judul">Judul</label>
            <div class="col-xs-9">
                <input type="text" name="judul" placeholder="Judul Postingan">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="foto">Foto</label>
            <div class="col-xs-9">
                <img id="uploadPreview" style="width: 150px;  height: 150px;" /><br>
                <input id="uploadImage" type="file" name="image" onchange="PreviewImage();" />
                <br><br>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="deskripsi">Deskripsi</label>
            <div class="col-xs-9">
                <textarea name="deskripsi" class="form-control" id="deskripsi" placeholder="deskripsi"></textarea> 
            </div>
        </div>
        
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Submit" name="simpan">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>
</div>

</body>
</html>