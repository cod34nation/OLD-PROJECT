<?php 
$milih= mysql_query("SELECT * FROM user,email where user.id_email=email.id_email group by id_user desc");
$x=mysql_query($milih);
$row=mysql_fetch_array($x);
$id_user=$row['id_user'];  


$id=uniqid(rand());
$ref= substr($id,12);
$tgl=date('d-m-Y');



///include "prosesverifikasi.php";

?>

	<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>PANDA PROJECT</title>

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
                        <li><a href="index.php">Home</a></li>
                       
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav> 

                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                       <div class="box box-solid box-warning">...</div>
                    </div>
                </div>            
            </div>  
        </section>         
    </header>

 <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
                
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="about_title">
                        <h2>KONFIRMASI DONASI</h2>

                        <img src="images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                
            
 <div class="col-sm-4  wow fadeInRight animated">
                
               <style>

                .register-box{
                  
    width:450px;
   }

    .panel
    {
        margin :30px auto;
        width: 300px;
        position: relative;
        padding: 10px;
    }

            .about_title{
                margin: 10px;
                position: relative;
                border-radius: 15px;

            }

                </style>


                <script>
</script>
        <div class="container">
            <div class="row">
                
            

              <form method ="POST" action ="prosesdonasi.php">

             <div class="register-box">
      <div class="register-logo">
        <a href="../../index2.html"><b>PANDA</b> PROJECT</a>
      </div>




      <div class="register-box-body">
        <p class="login-box-msg">Daftar Sebagai Member PANDA</p>
        

          <div class="form-group has-feedback">
          
            <input type="hidden" name="idU" id="idU" class="form-control" 
            value="<?php
            $koneksi=mysql_connect('localhost','root','');
            mysql_select_db('panda',$koneksi); 
           // include "koneksi.php";
            $test_q="SELECT * FROM email,user 
            where email.id_email=user.id_email group by user.id_user desc";
            $hasil=mysql_query($test_q);
            $q=mysql_fetch_array($hasil);
            $b= $q['id_user'];
           // $_SESSION['iduser']="ID";

            
            echo $b ;?>">
            <?php echo " ID Donatur : ".$b;?>
           
          </div>


          <div class="form-group has-feedback">
            <input type="hidden" name="idRef"id="idRef" class="form-control" value="<?php echo $ref;?>">
          
          </div>
          <?php echo" ID Referen : ".$ref;?>


          <div class="form-group has-feedback">
            <input type="hidden" name="tgl"id="tgl" class="form-control" value ="<?php echo $tgl;?>">
            
          </div>
          <?php echo" Tanggal Transfer : ".$tgl;?>

          

          <input type="hidden" name="email" id="email" class="form-control" 
            value ="">
                    

                    <div class="form-group has-feedback">
            <input type="text" name="nama"id="nama" class="form-control" placeholder="Nama Lengkap">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <select name="idtujuan" id="idtujuan" class="input">
            <option> ---Kategori--- </option>
             <?php
                $query= "SELECT * FROM tujuan";
                $hasil=mysql_query($query);
                while ($data=mysql_fetch_array($hasil)) {
                    echo "<option value='".$data['id_tujuan']."'>".$data['nama_tujuan']." </option>";
                }
             ?>
          </select>  
          </div>
          <div class="form-group has-feedback">

<form class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <div class="input-group-addon">Rp</div>
      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Nominsi" name="uang" id="uang">
      <div class="input-group-addon">.00</div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Transfer</button>
</form>

            
            
          </div>
          



          </div>

        

       

       

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
   
    
               


                <div class="col-sm-4  wow fadeInRight animated">

                   
                </div>

                

               
            </div>
            
        </div>
        </div>
    </section>
    

</form>
    <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
                <div class="about_title">
                       
                        
                    </div>
                
       
           
                


    <div class="fun_facts">
        <section class="header parallax home-parallax page" id="fun_facts" style="background-position: 50% -150px;">
            <div class="section_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 wow fadeInLeft animated">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single_count">
                                        <i class="icon-heart"></i>
                                        <h3>153</h3>
                                        <p>Project Berbagi Donasi</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single_count">
                                        <i class="icon-group"></i>
                                        <h3>34506</h3>
                                        <p>Orang Tergabung Panda</p>
                                    </div>                            
                                </div>
                                <div class="col-md-4">
                                    <div class="single_count">
                                        <i class="icon-trophy"></i>
                                        <h3>35</h3>
                                        <p>Penghargaan Pemerintah</p>
                                    </div>                            
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1 wow fadeInRight animated">
                            <div class="imac">
                                <img src="images/uniceflogo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </section>    
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
    <script src="js/bootstrap-datepicker.js"></script>




</body>

</html>