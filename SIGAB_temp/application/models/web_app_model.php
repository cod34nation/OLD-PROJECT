<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_app_model extends CI_Model {


	public function getLoginData($user,$psw)
	{
		$u=mysqli_real_escape_string($user);
		$p=mysqli_real_escape_string($psw);

		$cek_login=$this->db->get_where('user'array('username'=>$u,'password'=>$p));
		if(count($cek_login->result()>0))
		{
			foreach ($cek_login->result() as $data)
			{
				if($data->level=='mabes')
				{
					$ambil_data=$this->db->get_where('user',array('no_pers'=>$u));
					foreach ($ambil_data->result() as $data2)
					{
						$session_data['logged_in'] ='yes';
						$session_data['no_pers'] = $data2->no_pers;
						$session_data['nama_pers'] = $data2->nama_pers;
						$session_data['pangkat'] = $data2->pangkat;
						$session_data['level'] = 'mabes';
						$this->session->set_userdata($session_data);

					}
					header('location:'.base_url.'index.php/mabes');


				}
				# code...
			}
		}
	}

}
