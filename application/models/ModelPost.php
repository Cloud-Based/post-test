<?php

class ModelPost extends CI_Model {

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function readPost() {
    $q = $this->db->get('post');
    return $q;
  }

  public function insertPost($data) {
      $this->db->insert('post', $data);
  }

  public function showPostById($id) {
    $q = $this->db->get_where('post', array('idpost' => $id));
    return $q->row_object();
  }

  public function updatePost($data, $id) {
    $this->db->where('idpost', $id);
    $this->db->update('post', $data);
  }

  public function deletePost($id){
    $this->db->delete('post', $id);
  }

  public function showPostByusername($username) {
    return $this->db->query("SELECT post.*, account.name
    FROM account JOIN post
    ON account.username = post.username
    WHERE account.username = '$username'");
  }
}