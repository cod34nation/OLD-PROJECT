<?php
include "koneksi.php";
$milih= "SELECT * FROM user where password='$a'";
$id=mysql_query($milih);
$row=mysql_fetch_array($id);
$idUser=$row['id_user'];   

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
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img alt="Brand" src="">
      </a>
    </div>
  </div>
</nav>
  </head>
  <body>
    <h1>Email Masuk</h1>

    <h3>To    :</h3> <?php echo $username; ?>
    <h3>From  :</h3> Panda.com
    <h3>Subyek:</h3> Konfirmasi Email
    <br>
    <hr>
    <h3>Contain :</h3>
    <br>
    <p>Silahkan konfirmasi link dibawah ini : </p>
    <a href = "konfirmasiD.php?iduser=<?php $id_user?>"><h2>Konfirmasi Email Anda</h2></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>