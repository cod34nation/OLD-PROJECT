<?php 
$status=$_GET['status'];

if ($status==1) {
          header('Location:konfirmasiD.php');
        } else if ($status==2) {
          header('Location:tampilanpengajuan.php');
        }

?>