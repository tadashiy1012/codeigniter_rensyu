<?php
class Form extends CI_Controller {
  public function __construct() {
		parent::__construct();
    $this->load->helper('url_helper');
    $this->load->model('Person');
  }
  public function index() {
    $data = $this->Person->read();
    $this->load->view('form', array('persons' => $data));
  }
  public function create() {
    $this->load->helper('form');
    $data = $this->input->post();
    if ($data !== null) {
      $this->Person->create($data);
    }
    redirect('form');
  }
}