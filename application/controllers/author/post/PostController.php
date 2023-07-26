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
    $username = $this->session->userdata('username');
    $data['posts'] = $this->ModelPost->showPostByusername($username)->result();

    $this->template->load('author/index', 'author/post/main', $data);
  }

  public function show($id) {
    $data['post'] = $this->ModelPost->showPostById($id);

    $this->template->load('author/index', 'author/post/show', $data);
  }

  public function create() {
    $this->template->load('author/index', 'author/post/create');
  }

  public function createAct() {
    $username = $this->session->userdata('username');
    $title = $this->input->post('title');
    $content = $this->input->post('content');

    $dataArray = array(
      'title' => $title,
      'content' => $content,
      'date' => date("Y-m-d H:i:s"),
      'username' => $username,
    );

    $this->ModelPost->insertPost($dataArray);
    if ($this->db->affected_rows() > 0) {
      redirect('author/post');
    }
    else {
      redirect('author/post/create');
    }
  }

  public function update($username) {
    $data['post'] = $this->ModelPost->showPostById($username);

    $this->template->load('author/index', 'author/post/update', $data);
  }

  public function updateAct() {
    $username = $this->input->post('username');
    $title = $this->input->post('title');
    $content = $this->input->post('content');

    $dataArray = array('title' => $title, 'content' => $content);
    // print_r($dataArray);
    $this->ModelPost->updatePost($dataArray, $username);
    if ($this->db->affected_rows() > 0) {
      redirect('author/post');
    }
  }

  public function delete($id) {
    $dataArray = array('idpost' => $id);

    $this->ModelPost->deletePost($dataArray);
    if ($this->db->affected_rows() > 0) {
      redirect('author/post');
    }
  }

}