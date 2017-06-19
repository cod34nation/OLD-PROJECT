<?php
session_start();
//definisi kofigurasi
define('ROOT', dirname(__FILE__));
define('DS',DIRECTORY_SEPERATOR);

//File yang dibutuhkan

require_once"config.php";
require_once"library/database.class.php";
require_once"library/model.class.php";
require_once"library/view.class.php";
require_once"library/controller.class.php";

function __autoload($className)
{
  $fileName = str_replace("\\",DS,$className).'php';
  if(!file_exists($fileName))
  {
    return false;
  }
  include $fileName;
}

$page = (isset($_GET['page'])) && $_GET['page'] ? $_GET['page']:'home';


 ?>
