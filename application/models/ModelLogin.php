<?php

class ModelLogin extends CI_Model {

  function __construct() {
      parent::__construct();
      $this->load->database();
  }

  public function loginCek($table, $data){
    return $this->db->get_where($table,$data);
  }
}
