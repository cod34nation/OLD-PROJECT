<!DOCTYPE html>
<?php 
session_start();
if( empty($_SESSION['email'] ) AND empty ($_SESSION['password'])){
   header("location:login.php");
}
else
{
    header("location :index.php");
}
    ?>
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

    <?php 
session_start();
if( empty($_SESSION['email'] ) AND empty ($_SESSION['password'])){
   header("location:login.php");
}
else
{
    header("location :index.php");
}
    ?>
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
	                    <li><a href="daftarPenerima.php">Terima Donasi</a></li>
	                    <li><a href="#ABOUT">Jadi Donatur</a></li>
	                    <li><a href="#TESTIMONIAL">Pencapaian</a></li>
	                    <li><a href="#WORK">Konfirmasi Donasi</a></li>
	                    <li><a href="#CONTACT">Contact</a></li>
                         <li><a href="logout.php">Logout</a></li>
	                  </ul>
	                </div><!-- /.navbar-collapse -->
	              </div><!-- /.container -->
	            </nav> 

	            <div class="container">
	                <div class="row">
	                    <div class="col-md-12 text-center">
	                        <div class="home_text wow fadeInUp animated">
	                            <h2>PANDA PROJECT</h2>
	                            <p>Pantau Donasi Anda, untuk membantu mereka...</p>

                              
                                 
                                 

                                <br> 
	                            <img src="images/shape.png" alt="">

	                        </div>                     
	                    </div>
	                </div>
	            </div>

	                
	        </div>  
	    </section>         
    </header>


    <section class="services" id="SERVICE">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-group"></i>
                        <h2>Join Panda</h2>
                        <p>Jadilah Donatur di Panda Project untuk membantu mereka..</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="2s">
                        <i class="icon-heart"></i>
                        <h2>Berbagi Kasih Sayang</h2>
                        <p>Kepedulian dan Simpatik untuk membantu mereka..</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="3s">
                        <i class="icon-smile"></i>
                        <h2>Sejuta Senyuman</h2>
                        <p>Hadirkan Sejuta Senyuman di wajah mereka..</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="single_service wow fadeInUp" data-wow-delay="4s">
                        <i class="icon-globe"></i>
                        <h2>Bertumbuh Besar</h2>
                        <p>Bantu Panda Project untuk menolong dunia..</p>
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <section class="about_us_area" id="ABOUT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="about_title">
                        <h2>Tentang Panda Project</h2>
                        <img src="images/shape.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4  wow fadeInLeft animated">
                    <div class="single_progress_bar">
                        <h2>JUMLAH DONATUR - 19276</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>JUMLAH SUKARELAWAN - 25678</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>JUMLAH PROJECT - 153</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                    <div class="single_progress_bar">
                        <h2>TOTAL MEMBER AKTIF - 34506</h2>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">Panda (PANtau DonAsi) Project adalah organisasi kemanusian yang bertujuan untuk membantu jutaan orang yang membutuhkan bantuan dan donasi untuk kembali menghadirkan goresan senyuman indah dari para dermawan yang terkumpul kedalam Panda Project.</p>
                </div>
                <div class="col-md-4  wow fadeInRight animated">
                    <p class="about_us_p">Bersama Panda Project, Anda kini bisa melakukan donasi secara mudah kepada orang yang membutuhkan bantuan Anda, selain itu Anda juga bisa menjadi TIM Sukarelawan Bersama Panda Project.</p>
                </div>
            </div>
        </div>
    </section>
    

    <section class="testimonial text-center wow fadeInUp animated" id="TESTIMONIAL">
        <div class="container">
            <div class="icon">
                <i class="icon-gittip"></i>
            </div>
            <div class="owl-carousel">
                <div class="single_testimonial text-center wow fadeInUp animated">
                    <p>Membantu Dalam Kebaikan Adalah Hal terbaik yang bisa kita lakukan <br/> demi mencapai kebahagiaan bersama</p>
                    <h4>- PANDA PROJECT -</h4>
                </div>
                <div class="single_testimonial text-center">
                    <p>Berbagi Kasih sayang terhadap mereka <br/> menghadirkan sejuta senyuman</p>
                    <h4>-PANDA TEAM -</h4>
                </div>
            </div>            
        </div>
    </section>


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
    <section class="work_area" id="WORK">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work_title  wow fadeInUp animated">
                        <h1>Dokumentasi Penyaluran Bantuan</h1>
                        <img src="images/shape.png" alt="">
                        <p>Berikut dokumentasi penyaluran bantuan dan donasi <br> dari para donatur dan sukarelawan Panda Project</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w1.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">Lihat Detail</a>
                            <h2>Fulan </h2>
                            <h4>Tidak Memiliki Tempat Tinggal</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w2.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">Lihat Detail</a>
                            <h2>Fulan </h2>
                            <h4>Tidak Bisa Sekolah</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w3.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">Lihat Detail</a>
                            <h2>Fulan </h2>
                            <h4>Tidak Bisa Sekolah</h4>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row pad_top">
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w4.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image">
                        <img src="images/w5.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-4 no_padding">
                    <div class="single_image last_padding">
                        <img src="images/w6.jpg" alt="">
                        <div class="image_overlay">
                            <a href="">View Full Project</a>
                            <h2>drawing</h2>
                            <h4>with pencil colors</h4>
                        </div>                        
                    </div>
                </div>
            </div>           
        </div>
    </section>
    <section class="call_to_action">
        <div class="container">
            <div class="row">
                <div class="col-md-8 wow fadeInLeft animated">
                    <div class="left">
                        <h2>Jadilah bagian dari Donatur dan Sukarelawan Panda Project</h2>
                        <p>Bergabung dengan Panda Project untuk menolong jutaan orang yang membutuhkan bantuan kita.. Sekarang sangat mudah</p>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 wow fadeInRight animated">
                    <div class="baton">
	                    <a href="join.html">
	                        <button type="button" class="btn btn-primary cs-btn">GABUNG SEKARANG</button>
	                    </a>    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="CONTACT">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="contact_title  wow fadeInUp animated">
                        <h1>Contact</h1>
                        <img src="images/shape.png" alt="">
                        <p>Untuk informasi lebih lanjut silahkan hubungi kami</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3  wow fadeInLeft animated">
                    <div class="single_contact_info">
                        <h2>Call Center</h2>
                        <p>+62 87 724 415 220</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Email Me</h2>
                        <p>Panda@pandaproject.com</p>
                    </div>
                    <div class="single_contact_info">
                        <h2>Address</h2>
                        <p>Malang, East Java</p>
                    </div>
                </div>
                <div class="col-md-9  wow fadeInRight animated">
                    <form class="contact-form" action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">                                
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" id="message" rows="25" cols="10" placeholder="  Message Texts..."></textarea>
                                <button type="button" class="btn btn-default submit-btn form_submit">SEND MESSAGE</button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work-with   wow fadeInUp animated">
                        <h3>- Terimakasih Sudah Mau berbagi dan menjadi bagian dari Panda Project -</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>



<footer>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer_logo   wow fadeInUp animated">
                        <img src="images/pandalogo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center   wow fadeInUp animated">
                    <div class="social">
                        <h2>Follow Me on Here</h2>
                        <ul class="icon_list">
                            <li><a href="http://www.facebook.com/abdullah.noman99"target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.twitter.com/absconderm"target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="http://www.dribbble.com/abdullahnoman"target="_blank"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
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