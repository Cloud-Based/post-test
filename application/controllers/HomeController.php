<?php

class HomeController extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('ModelPost');
  }

  public function index() {
    $data['data'] = $this->ModelPost->readPost()->result();

    $this->template->load('home/index', 'home/main', $data);
  }

  public function show($id) {
    $data['post'] = $this->ModelPost->showPostById($id);

    $this->template->load('home/index', 'home/show', $data);
  }
}