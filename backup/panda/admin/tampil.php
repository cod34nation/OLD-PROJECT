<?php
 include ('koneksi.php');

 $kueri = mysql_query(" SELECT * FROM dokumentasi");
            while ($row=mysql_fetch_array($kueri))
            {
             

             
             echo "<br>";
             echo "Judul :".$row['judul']."<br><br>";
			 echo "Waktu : ".$row['tanggal_posting']."<br>";
             echo "<img src=image/".$row['gambar'].">";
             echo "Deskripsi".$row['deskripsi']."<br>";
             echo"<br><br><hr>";
            }
?>