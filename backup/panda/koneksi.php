<?php


$koneksi=mysql_connect("localhost","root","");

if(!$koneksi)
{
	mysql_select_db("panda",$koneksi_db) or die (mysql_error());

}



?>