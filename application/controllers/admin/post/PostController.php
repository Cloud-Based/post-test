<?php

class PostController extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('ModelUser');
    $this->load->model('ModelPost');

    $status = $this->session->userdata('status');

    if(empty($status)) {
      redirect('login');
    }
  }

  public function index() {
    $data['posts'] = $this->ModelPost->readPost()->result();

    $this->template->load('admin/index', 'admin/post/main', $data);
  }

  public function show($id) {
    $data['post'] = $this->ModelPost->showPostById($id);

    $this->template->load('admin/index', 'admin/post/show', $data);
  }

  public function create() {
    $this->template->load('admin/index', 'admin/post/create');
  }

  public function createAct() {
    $title = $this->input->post('title');
    $content = $this->input->post('content');
    $username = $this->session->userdata('username');

    $dataArray = array(
      'title' => $title,
      'content' => $content,
      'date' => date("Y-m-d H:i:s"),
      'username' => $username,
    );

    $this->ModelPost->insertPost($dataArray);
    if ($this->db->affected_rows() > 0) {
      redirect('admin/post');
    }
    else {
      redirect('admin/post/create');
    }
  }

  public function update($id) {
    $data['post'] = $this->ModelPost->showPostById($id);

    $this->template->load('admin/index', 'admin/post/update', $data);
  }

  public function updateAct() {
    $id = $this->input->post('id');
    $title = $this->input->post('title');
    $content = $this->input->post('content');

    $dataArray = array('title' => $title, 'content' => $content);
    // print_r($dataArray);
    $this->ModelPost->updatePost($dataArray, $id);
    if ($this->db->affected_rows() > 0) {
      redirect('admin/post');
    }
  }

  public function delete($id) {
    $dataArray = array('idpost' => $id);

    $this->ModelPost->deletePost($dataArray);
    if ($this->db->affected_rows() > 0) {
      redirect('admin/post');
    }
  }

}