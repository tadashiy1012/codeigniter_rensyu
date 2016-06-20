<?php
class Person extends CI_Model {
  function __construct() {
    parent::__construct();
    $this->load->database();
  }
  public function create($subject) {
    $this->db->insert('persons', $subject);
  }
  public function read() {
    $query = $this->db->get('persons');
    return $query->result();
  }
  public function update() {}
  public function delete() {}
}