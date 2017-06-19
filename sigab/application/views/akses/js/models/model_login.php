<?php
/**
*
*/
class Model_login extends CI_Model
{
public function getLogin($no_pers,$password){
  $pass=md5($password);
  $this->db->where('no_pers',$no_pers);
  $this->db->where('password',$pass);
  $query->$this->db->get('user');

  if($query->num_rows()>0)
  {
    foreach ($query->result() as $row) {

      $sess = array('no_pers'=>$row->no_pers,
                    'password'=>$row->password,
                    'nama_pers'=>$row->nama_pers,
                    'pangkat'=>$row->pangkat,
                    'id_dinas'=>$row->id_dinas,
                    'kota'=>$row->kota,
                    'level'=>$row->level);

                    $this->session->set_userdata($sess);
                  //  redirect('home');


                    ''
    }


  }else{
    $this->session->set_flashdata('Info','maaf username atatu password salah');
  //  redirect('login');
  }

}
}

?>
