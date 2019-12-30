<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

	public function index() {
    $res = $this->db->get('produk')->result_array();
    echo json_encode($res);
  }

  public function api() {
    
  }

}
