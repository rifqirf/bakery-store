<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct() {
    parent::__construct();
  }

	public function index() {
    $res = $this->db->get('produk')->result_array();
    // echo json_encode($res);
    $this->load->view('view-home');
  }

  public function api() {
    
  }

}
