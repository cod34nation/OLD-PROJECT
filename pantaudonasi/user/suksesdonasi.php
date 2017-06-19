<?php 

$koneksi=mysql_connect('localhost','root','');
         mysql_select_db('pantaudonasi',$koneksi);

$kueri="SELECT * FROM donasi WHERE id_user GROUP BY id_donasi DESC ";
$cari=mysql_query($kueri,$koneksi) or die(mysql_error());
$row=mysql_fetch_array($cari);

   $nama= $row['atas_nama'];
   $id=$row['kode_ref'];
   $tanggal_transfer=$row['tanggal_donasi'];
   $jumlah_nominal=$row['jumlah_nominal'];
   $tujuan=$row['atas_nama'];
   
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laporan</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>

  .kotak{
    margin:100px auto;
  
    position: relative;
    width:350px;

  }



  </style>
  <body>
    <div class="kotak">
    <div class="row">
            <div class="col-md-12">
              

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                  
                   <a class="navbar-brand"><img src="images/pandalogo.png" alt=""></a><br><br>
                  <h3 class="profile-username text-center"><?php echo $nama;?></h3>
                  <p class="text-muted text-center">Donatur</p>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Dengan ID Ref :</b> <a class="pull-right"><?php echo $id;?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Tanggal Transfer :</b> <a class="pull-right"><?php echo $tanggal_transfer; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Dengan Jumlah Nominal :</b> <a class="pull-right"><?php echo $jumlah_nominal; ?></a>
                    </li>
                      <li class="list-group-item">
                      <b>Kategori Donasi : </b> <a class="pull-right"><?php echo $tujuan; ?></a>
                    </li>
                  </ul>
        
                  <center><button class="btn btn-primary btn-block" onClick="window.print();"><B>CETAK LAPORAN</B></button></center>
                  <br>
                 <center> <img class="profile-user-img img-responsive img-circle" src="images/mastercard.png" alt="User profile picture"></center>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

    

    
    
    
    

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
