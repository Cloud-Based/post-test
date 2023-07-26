<?php

class AccountController extends CI_Controller {

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
    
    $data['users'] = $this->ModelUser->readUser()->result();

    $this->template->load('admin/index', 'admin/account/main', $data);
  }

  public function show($username) {
    $data['user'] = $this->ModelUser->showUserByUsername($username);

    $this->template->load('admin/index', 'admin/account/show', $data);
  }

  public function create() {
    $this->template->load('admin/index', 'admin/account/create');
  }

  public function createAct() {
    $name = $this->input->post('name');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $role = $this->input->post('role');

    $dataArray = array(
      'name' => $name,
      'username' => $username,
      'password' => $password,
      'role' => $role,
    );

    $this->ModelUser->insertUser($dataArray);
    if ($this->db->affected_rows() > 0) {
      redirect('admin/account');
    }
    else {
      redirect('admin/account/create');
    }
  }

  public function update($username) {
    $data['user'] = $this->ModelUser->showUserByUsername($username);

    $this->template->load('admin/index', 'admin/account/update', $data);
  }

  public function updateUser() {
    $name = $this->input->post('name');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $role = $this->input->post('role');

    $dataArray = array(
      'name' => $name, 
      'password' => $password, 
      'role' => $role
    );

    // print_r($password);
    $this->ModelUser->updateUser($dataArray, $username);
    if ($this->db->affected_rows() > 0) {
      redirect('admin/account');
    }
    else {
      echo "Update Gagal!";
    }
  }

  public function delete($username) {
    $dataArray = array('username' => $username);

    $this->ModelUser->deleteUser($dataArray);
    if ($this->db->affected_rows() > 0) {
      redirect('admin/account');
    }
  }

}