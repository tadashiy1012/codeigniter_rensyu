<?php
class Hellomodel extends CI_Model {
  function __construct() {
    parent::__construct();
  }
  public function getHello() {
    $data = array(
      'title' => 'hello', 'message' => 'Hello world!'
    );
    return $data;
  }
}