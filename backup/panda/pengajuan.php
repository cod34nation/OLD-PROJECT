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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/lte-ie7.js"></script>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
    .single-image{
        width: 250px;
        height: 250px;
        margin-left: 50px;
    }

</style>

<body>
                <!-- Preloader -->
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>

    <section class="work_area" id="WORK">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="work_title  wow fadeInUp animated">
                        <h1>Daftar Orang Membutuhkan</h1>
                        <img src="images/shape.png" alt="">
                        <p>Berikut daftar orang yang membutuhkan uluran tangan <br> dari para donatur dan sukarelawan Panda Project</p>
                    </div>
                </div>
            </div>
        </div>

        
        <?php
#------- memulai page number -------------------------------------------------------------------------------------#
$dataPerPage = 5; 
if(isset($_GET['hal']))
{   
    $noPage = $_GET['hal'];
}else{  
    $noPage = 1;
}
$offset   = ($noPage - 1) * $dataPerPage;
include ('koneksi2.php');
$ambil_data = mysql_query("select * from pengajuan where status='2' order by id_pengajuan desc limit $offset, $dataPerPage",$koneksi);
$hitung_record = mysql_query("SELECT COUNT(*) AS jumData FROM pengajuan",$koneksi);
$data          = mysql_fetch_array($hitung_record);
$jumData       = $data['jumData'];
$jumPage  = ceil($jumData/$dataPerPage);
# ceil digunakan untuk membulatkan hasil pembagian
#------- akhir page number -------------------------------------------------------------------------------------#

while($hasil_data = mysql_fetch_array($ambil_data)){
?>
      <div class="row-fluid" style="margin-left: 40px;">
      <div class="span4">
      <div class="col-md-4 no_padding">
                    <div class="single_image last_padding">
        <img data-src="holder.js/300x200" alt="300x200" src="<?=$hasil_data['gambar'];?>" style="width: 300px; height: 200px;">
      </div>
      <div class="span8">
          <h2><?=$hasil_data['atas_nama'];?></h2>
          <p style="text-align:justify;"><?=substr($hasil_data['keterangan'],0,25);?></p>
                        </div>
                    </div>
                    </div>
            </div>           
        </div>
        </section>
        <?php
}
?>

<!----  menampilkan page number di bawah post ------------>
<div class="pagination pagination-centered">
    <ul>
    <?php
        $link = "index.php?link=lihatBerita.php&hal=";
        # menampilkan link previous
        if ($noPage > 1) echo  "<li><a href='".$link."".($noPage-1)."'>&larr; Prev</a></li>";
        # memunculkan nomor halaman dan linknya
        for($jml_hal = 1; $jml_hal <= $jumPage; $jml_hal++)
        {
            if($noPage == $jml_hal){
                echo "<li class='disabled'><a href='#' style='cursor'>".$jml_hal."</a></li> ";
            }else{
                echo "<li><a href='".$link."".$jml_hal."'>".$jml_hal."</a></li> ";}
        }
        # menampilkan link next
        if ($noPage < $jumPage) echo "<li><a href='".$link."".($noPage+1)."'>Next &rarr;</a></li>";
        ?>
    </ul>
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