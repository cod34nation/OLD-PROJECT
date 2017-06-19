<?php

// Membangun koneksi ke database
$connection = mysql_connect("localhost", "root", "") or die('koneksi tidak berhasil');
// Seleksi Database
$db = mysql_select_db("pantaudonasi", $connection) or die('database tidak ditemukan');
?>