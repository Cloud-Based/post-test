<?php

class ModelUser extends CI_Model {

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function readUser() {
    $q = $this->db->get('account');
    return $q;
  }

  public function insertUser($data) {
      $this->db->insert('account', $data);
  }

  public function showUserByUsername($username) {
    $q = $this->db->get_where('account', array('username' => $username));
    return $q->row_object();
  }

  public function updateUser($data, $username) {
    $this->db->where('username', $username);
    $this->db->update('account', $data);
  }

  public function deleteUser($username){
    $this->db->delete('account', $username);
  }
}
