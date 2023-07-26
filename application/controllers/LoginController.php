<?php

class LoginController extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('ModelLogin');
    $this->load->model('ModelUser');
  }

  public function index() {
    $this->template->load('login/index', 'login/main');
  }

  public function loginAct() {
    $username = $this->input->post('username');
    $pass = md5($this->input->post('password'));

    $data = array(
      'username' => $username,
      'password' => $pass
    );

    $cek = $this->ModelLogin->loginCek("account",$data)->num_rows();

    if ($cek > 0) {
      $data_session = array(
        'username' => $username,
        'status' => 'login'
      );

      $this->session->set_userdata($data_session);

      $role = $this->ModelUser->showUserByUsername($username);

      if ($role->role === 'Admin') {
        redirect('admin/post');
      }
      else {
        redirect('author/post');
      }
    }

    else {
      echo "gagal login";
    }
  }

  public function logoutAct(){
    $this->session->sess_destroy();
    redirect('login');
  }
}