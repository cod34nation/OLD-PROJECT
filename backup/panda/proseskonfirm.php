<?php

session_start();


 
 $c=  $_POST['email'];
 $tgl=$_POST['tgl'];
$_SESSION['email']=$c;
//=$data['id_user'];


//echo" ".$_SESSION['id_user'];
  
    define('ROOT', 'http://localhost:8080/panda');
     $koneksi=mysql_connect('localhost','root','');
    mysql_select_db('panda',$koneksi);
     error_reporting(E_ALL & ~E_NOTICE);

             //$tgl=date('d-m-Y');


$query = mysql_query("INSERT INTO email  
     VALUES 
    ( '$tgl',null,'$c')") or die (mysql_error());   

$milih= "SELECT * FROM email where email='$c'";
$id=mysql_query($milih);
$row=mysql_fetch_array($id);
$id_email=$row['id_email'];  

$_SESSION['id_email']=  $id_email;



        
         
        
       
   $link=" <a href = verifikasi.php?email=$id_email><h2>Konfirmasi</h2></a>";
        
        
    ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   <nav class="navbar navbar-default">
  <div class="container-fluid">
  	<a class="navbar-brand" href="#">
        <img alt="Brand" src="images/Message-52.png">
      </a>
    </div>
    <div class="navbar-header">
      
  </div>
</nav>
  </head>
  <body>
    <h1>Email Masuk</h1>

    <h3>To    :</h3> <?php echo $c; ?>
    <h3>From  :</h3> Panda.com
    <h3>Subyek:</h3> Konfirmasi Email
    <br>
    <hr>
    <h3>Contain :</h3>
    <br>
    <p>Silahkan konfirmasi link dibawah ini : </p>
    
    <?php echo $link; ?>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>



    