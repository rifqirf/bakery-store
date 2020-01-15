<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Err extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$response = [
      "status" => 0,
      "status_message" => "Undefined End Point",
      "data" => []
    ];
		
    echo json_encode($response);
	}
}
