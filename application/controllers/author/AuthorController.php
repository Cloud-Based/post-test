<?php

class AuthorController extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('ModelUser');

    $status = $this->session->userdata('status');

    if(empty($status)) {
      redirect('login');
    }
  }

  public function index() {
    $this->template->load('author/index', 'author/main');
  }
}