<?php


  
    define('ROOT', 'http://localhost:8080/panda');
        $koneksi=mysql_connect('localhost','root','');
        mysql_select_db('untuk_blog',$koneksi);

       $c=  $_POST['email'];
         
        
       // $kode   = (uniqid(rand()));
       
        $pass= (uniqid(rand()));

      $a=substr($pass,12);
      
    
        
        // echo $pass;
       echo" <a href = verifikasi.php?email=$c&&password=$a><h2>Konfirmasi</h2></a>";
        
        
        
    ?>