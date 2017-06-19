<!DOCTYPE html>
<?php 
session_start();
include "koneksi.php";
include "uploadGam.php";


 
$querygambar=mysql_query("select * from pengajuan");
// Perulangan untuk menampilkan data gambar
$data=mysql_fetch_array($querygambar);


?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PANDA PROJECT</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

     <!-- Preloader -->
    <link rel="stylesheet" href="css/preloader.css" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Font Awesome-->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">



    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    <link rel = "stylesheet " href ="assets/bootstrap/css/bootstrap.css" type ="text/css"> 
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/lte-ie7.js"></script>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
                <!-- Preloader -->
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>




    <header id="HOME" style="background-position: 50% -125px;">
	        <div class="section_overlay">
	            <nav class="navbar navbar-default navbar-fixed-top">
	              <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <div class="navbar-header">
	                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                  </button>
	                  <a class="navbar-brand" href="#"><img src="images/pandalogo.png" alt=""></a>
	                </div>

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                  <ul class="nav navbar-nav navbar-right">
	                    <li><a href="member.php">Home</a></li>
                         
	                   
	                  </ul>
	                </div><!-- /.navbar-collapse -->
	              </div><!-- /.container -->
	            </nav> 

	            

	            <div class="container">
	                <div class="row">
	                   <div class="box box-solid box-warning">...</div>
	                </div>
	            </div>            
	        </div>  
	    </section>         
    </header>
<style>

                .register-box{
                    margin:10px auto;
    width:450px;
    position:relative;
    border-radius:15px;
            .


                }

            .about_title{
                margin: 10px;
                position: relative;
                border-radius: 15px;

            }

                </style>
 <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
                
        <div class="container">
            <div class="row">

                <div class="col-sm-12 text-center">
                    <div class="about_title">
                        <h2>FORM PENDAFTARAN</h2>


                        <img src="images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
            

                
             <div class="register-box">
      <div class="register-logo">
        <a href="../../index2.html"><b>PANDA</b> PROJECT</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Ajukan Penerima Donasi</p>
        <form action="uploadGam.php" method="post"enctype="multipart/form-data">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Atas Nama" id="atas_nama" name="atas_nama">

            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" value ="<?php echo $_SESSION['email']; ?>" disabled='disable'>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" id="password"name="password">

            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
          <textarea class="form-control" rows="3" placeholder="Alamat Penerima" id="alamat"name="alamat"></textarea>
          <span class="glyphicon glyphicon-fa-map-o form-control-feedback"></span>
      </div>
          
 <div class="form-group has-feedback">
          <textarea class="form-control" rows="3" placeholder="Deskripsi dari kebutuhan yang ingin diterima"id="deskripsi" name="deskripsi"></textarea>
          <span class="glyphicon glyphicon-fa-map-o form-control-feedback"></span>
      </div>
      <div class="form-group">
    <label for="exampleInputFile">Input Foto </label>
    <input type="file" id="exampleInputFile" accept="image/*"name="gambar">
    <br>
    <input type="submit" name="upload" value="Upload Gambar">
   
  <tr>
    <!-- Untuk menampilkan nomor urut -->
   
    <!-- untuk menampilkan nama gambar -->
    <td><?php=$data['gambar'];?></td>
    <!-- membuat link yang mengarah pada lihat.php untuk melihat gambar yang diupload -->
    <td><a href="lihatGambar.php?idGambar=<?=$data['id_pengajuan'];?>">Lihat Gambar</a></td>
    <br>
  <img src="./images/<?=$data['gambar'];?>" width="300" height="300">

  </tr>

    <p class="help-block">Foto digunakan untuk deskripsi jenis bantuan secara visual</p>
  </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Setujui ketentuan yang berlaku
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Ajukan</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- Atau -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div>

        <a href="login.html" class="text-center">Saya sudah menjadi anggota</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>

            </div>
            
        </div>
        </div>
    </section>
    


    <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
                <div class="about_title">
                       
                        
                    </div>
                
       
           
                


   
    </div>
    
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="copyright_text   wow fadeInUp animated">
                        <p>&copy; Panda 2016.All Right Reserved By <a href="pandaproject.com"target="_blank">Panda Project Team</a></p>
                        <p>Made with love for social.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>











<!-- =========================
     SCRIPTS 
============================== -->


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>




</body>

</html>