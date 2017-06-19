<?php

   $koneksi=mysql_connect('localhost','root','');
    mysql_select_db('panda',$koneksi);
    error_reporting(E_NOTICE & ~E_ALL);
    $email = $_POST['email'];
    $alamat=$_POST['alamat'];
    $no=$_POST['no'];
    $nama=$_POST['nama'];
    $a=$_POST['password'];
    $jenis=$_POST['jenisdon'];
//    $_SESSION['id_email']=$username;

  //  $idU = $_GET['iduser'];

    ///echo  $username;

    $in= mysql_query("INSERT INTO user VALUES 
      (null,1,'$a','$alamat','$no','$nama','$email')") or die (mysql_error());
  
// echo" <a href = konfirmasiD.php?iduser=$id_user><p>Dapatkan ID User</p></a>";
   //echo "<script>alert('Pendaftaran Berhasil, Silahkan') <a href ='koneksiD.php'>Klik</a></script>";
  //echo "<meta http-equiv='refresh' content='1 url=verifikasi.php'>";
  
   
       if($_POST['jenisdon']==1)
       {
        //header('location:konfirmasiD.php?');
        echo '<script> window.location="konfirmasiD.php" </script>';
       } else {
         //header('location :ajukan');
        echo '<script> window.location="ajukan" </script>';
       }
       
      



?>


