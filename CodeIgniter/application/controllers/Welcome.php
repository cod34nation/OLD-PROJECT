<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data=$this->mymodel->GetMah();

		foreach ($data as $d) {
			echo "NIM : ".$d['nim']."<br/>";
			# code...
		}
				# code...

	}

public function insert(){
	$res=$this->mymodel->insertData('mahasiswa',array(
		"nim" =>"14650020",
		"nama"=>"Afrizal",
		"jurusan"=>"TI",
	));

	if($res >=1){
		echo "<h2> Insert Data Sukses";
	}
	else {
		echo "Gagal";
	}

}

public function update()
{
	echo "update";
}

public function delete()
{
	echo "delete";
}
}
