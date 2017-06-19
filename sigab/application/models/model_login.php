<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_login extends CI_Model
{
public function getLogin($no_pers,$pass){


  $this->db->where('nomor_pers',$no_pers);
  $this->db->where('password',$pass);
  $query=$this->db->get('user');

  if($query->num_rows()>0)
  {
    foreach ($query->result() as $row) {

      $sess = array('nomor_pers'=>$row->nomor_pers,
                    'password'=>$row->password,
                    'nama_pers'=>$row->nama_pers,
                    'pangkat'=>$row->pangkat,
                    'id_dinas'=>$row->id_dinas,
                    'nama_kota'=>$row->nama_kota,
                    'level'=>$row->level);

                    $this->session->set_userdata($sess);

                  redirect('home');



    }


  }else{
    $this->session->set_flashdata('Info','maaf username atatu password salah');

  redirect('login');
  }

}

}

?>
