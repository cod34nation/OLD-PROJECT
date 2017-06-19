<?php

   $koneksi=mysql_connect('localhost','root','');
    mysql_select_db('panda',$koneksi);
    error_reporting(E_NOTICE & ~E_ALL);
      $idU=$_POST['id_user'];
      $nama=$_POST['nama'];
      $tanggalTrans=$_POST['tgl'];
      $uang=$_POST['uang'];
      $id_ref=$_POST['idRef'];
      $pengajuan=$_POST['id_pengajuan'];





  //  $idU = $_GET['iduser'];

    ///echo  $username;

    $in= mysql_query("INSERT INTO konfirmasi VALUES 
      ('$idU','$nama','$tanggalTrans','belum','$uang','$id_ref','1','$pengajuan','0')") or die (mysql_error());
  
// echo" <a href = konfirmasiD.php?iduser=$id_user><p>Dapatkan ID User</p></a>";
   //echo "<script>alert('Pendaftaran Berhasil, Silahkan') <a href ='koneksiD.php'>Klik</a></script>";
  //echo "<meta http-equiv='refresh' content='1 url=verifikasi.php'>";
  
   
       if($in) {
        //header('location:konfirmasiD.php?');
        echo '<script> window.location="terimakasih.php" </script>';
       } else {
         //header('location :ajukan');
        echo '<script> window.location="ajukan" </script>';
       }
       
      



?>


