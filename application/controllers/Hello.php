<?php
class Hello extends CI_Controller {
  public function index() {
    //echo 'Hello world!';
    //$data = array('title' => 'hello', 'message' => 'Hello world!');
    $this->load->model('Hellomodel');
    $data = $this->Hellomodel->getHello();
    $this->load->view('helloview', $data);
  }
  public function hoge() {
    $this->load->database();
    $query = $this->db->get('persons');
    foreach ($query->result() as $row) {
      echo $row->name;
    }
  }
}