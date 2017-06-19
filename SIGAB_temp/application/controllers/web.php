<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

public function _construct()
{
	session_start();

}

	public function index()
  {
  $cek=	$this->session->userdata('logged_in');
  if(empty($cek))
	{
	 $this->load->view('index.php');
  }
  else
	{
		$set=$this->session->userdata('status');
		if($set=='mabaes')
		{
			header('location:'.base_url().'index.php/mabes');
		}
		else if($set=='kodam')
		{
			header('location:'.base_url().'index.php/kodam');
		}
		else if($set =='kodim')
		{
			header('location:'.base_url().'index.php/kodim');
		}
		else if($set =='korem')
		{
			header('location:'.base_url().'index.php/korem');
		}
		else if($set =='koramil')
		{
			header('location:'.base_url().'index.php/koramil');
		}
	}
}

public function login()
{
	$u=$this->input->post('username');
	$p=$this->input->post('password');
	$this->web_app_model->getLoginData($u,$p);
}

	}
