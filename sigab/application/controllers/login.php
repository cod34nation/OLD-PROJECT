<?php
/**
*
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
  public function __construct() //konstraktor untuk meload library, helper dan model
  {
    parent::__construct();
  }

  public function index(){
    $this->load->view('akses/index.php');
  }

  public function getLogin(){
    $no_pers=$this->input->post('no_pers');
    $pass=$this->input->post('password');
    $this->load->model('model_login');
    $this->model_login->getLogin($no_pers,$pass);

  }
}
