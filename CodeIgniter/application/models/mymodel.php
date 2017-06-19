<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

		public function GetMah(){
			$data=$this->db->query('select * from mahasiswa');
			return $data->result_array();
		}

		public function insertData($tableName,$data){
			$res=$this->db->insert($tableName,$data);
			return $res;
		}

		public function UpdateData(){

		}

		public function DeleteData(){

		}






}
