<?php
include "koneksi.php";

$db=new Database("localhost","root","","API");

$page =$_GET['page'];
$method = $_SERVER['REQUEST_METHOD'];
if($page == "user"){
  if($method == "POST"){

    try {
      $result = $db->query("Select * from user");
      while ($row = $result->fetch_array()) {
        $data[] =array("id"=>$row['id'],"name"=>$row['id'],"nama"=>$row['nama'],"pass"=>$row['password'] );
        # code...
      }
      $JSON=$data;
      header('content-type :application/json');
      echo json_encode($json);
    } catch (Exception $e) {

      die($e->getMessage());

    }


  }
}
?>
