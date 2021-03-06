<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->table = "toko";
		$this->pkey = "id_toko";
		$this->columns = [
			"id_toko",
			"email",
			"password",
			"nama_toko",
			"no_hp",
			"alamat_jalan",
			"alamat_kab",
			"alamat_prov",
			"logo",
		];
	}

	public function test() {
		$this->load->view('produk');
	}

	public function index() {
		$response = [
      "status" => 0,
      "status_message" => "Undefined End Point",
      "data" => []
    ];
    echo json_encode($response);
	}

	public function get() {
		$response = [
			"status" => 0,
      "status_message" => "Operation Failed",
      "data" => []
		];
		
		$data = array_filter($this->input->get());
		$field_data = array_keys($data);

		if(!empty(array_diff($field_data, $this->columns))) {
			$response["status_message"] = "Unexpected input";
		} else {
			try {
				if(!empty($data)) {
					$this->db->where($data);
				}
				$response["data"] = $this->db->get($this->table)->result_array();
				$response["status"] = 1;
				$response["status_message"] = "Success";
			} catch(Exception $e) {
				print("Error: ". $e);
				$response["status_message"] = "Unknown Error in Query";
			}
		}

		echo json_encode($response);
	}

	public function add() {
		$response = [
			"status" => 0,
      "status_message" => "Operation Failed",
      "data" => []
		];
		$prefix = "SHP";

		// var_dump($this->input->post());

		// $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');

		// if($this->form_validation->run() == FALSE){
      // $response["status_message"] = "Insufficient Input";
    // } else {
			$ids = $this->db->select($this->pkey)->limit(1)->order_by($this->pkey, 'DESC')->get($this->table)->result_array();
			$new_id = $prefix."01";
			if(!empty($ids)) {
				$id = intval(str_replace($prefix, "", $ids[0][$this->pkey])) + 1;
				$new_id = $prefix. sprintf('%02d', $id);
			}
			$data = [
        "id_toko" => $new_id,
        "email" => $this->input->get("email"),
				"password" => md5($this->input->get("password")),
				"nama_toko" => $this->input->get("nama_toko"),
				"no_hp" => $this->input->get("no_hp"),
				"alamat_jalan" => $this->input->get("alamat_jalan"),
				"alamat_kab" => $this->input->get("alamat_kab"),
        "alamat_prov" => $this->input->get("alamat_prov"),
        "logo" => "no-image.png",
			];
			// $data["id_produk"] = $new_id;
			$field_data = array_keys($data);

			if(!empty(array_diff($field_data, $this->columns))) {
				$response["status_message"] = "Unexpected input";
			} else {
				try {
					if(empty($data)) {
						$response["status_message"] = "No Required Input";
					} else {
						$this->db->insert($this->table, $data);
					}
					$response["status"] = 1;
					$response["status_message"] = "Success";
				} catch(Exception $e) {
					print("Error: ". $e);
					$response["status_message"] = "Unknown Error in Query";
				}
			}
    // }

		echo json_encode($response);
	}

	public function update() {
		$response = [
			"status" => 0,
      "status_message" => "Operation Failed",
      "data" => []
		];

		// var_dump($this->input->post());

		// $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');

		// if($this->form_validation->run() == FALSE){
      // $response["status_message"] = "Insufficient Input";
    // } else {
			$data = [
				"id_toko" => $this->input->get("id_toko"),
				"email" => $this->input->get("email"),
				"password" => md5($this->input->get("password")),
				"nama_toko" => $this->input->get("nama_toko"),
				"no_hp" => $this->input->get("no_hp"),
				"alamat_jalan" => $this->input->get("alamat_jalan"),
				"alamat_kab" => $this->input->get("alamat_kab"),
				"alamat_prov" => $this->input->get("alamat_prov"),
				"logo" => "no-image.png",
			];
			// $data["id_produk"] = $new_id;
			$field_data = array_keys($data);

			if(!empty(array_diff($field_data, $this->columns))) {
				$response["status_message"] = "Unexpected input";
			} else {
				try {
					if(empty($data)) {
						$response["status_message"] = "No Required Input";
					} else {
						$this->db->where([ "$this->pkey" =>$data[$this->pkey]]);
						$this->db->update($this->table, $data);
					}
					$response["status"] = 1;
					$response["status_message"] = "Success";
				} catch(Exception $e) {
					print("Error: ". $e);
					$response["status_message"] = "Unknown Error in Query";
				}
			}
    // }

		echo json_encode($response);
	}

	public function delete() {
		$response = [
			"status" => 0,
      "status_message" => "Operation Failed",
      "data" => []
		];

		// var_dump($this->input->post());

		// $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');

		// if($this->form_validation->run() == FALSE){
      // $response["status_message"] = "Insufficient Input";
    // } else {
			$data = [
				$this->pkey => $this->input->get($this->pkey)
			];

			if(empty($data[$this->pkey])) {
				$response["status_message"] = "Unexpected input";
			} else {
				try {
					if(empty($data)) {
						$response["status_message"] = "Insufficient Input";
					} else {
						$this->db->where([ "$this->pkey" => $data[$this->pkey]]);
						$this->db->delete($this->table);
					}
					$response["status"] = 1;
					$response["status_message"] = "Success";
				} catch(Exception $e) {
					print("Error: ". $e);
					$response["status_message"] = "Unknown Error in Query";
				}
			}
    // }

		echo json_encode($response);
	}

}
