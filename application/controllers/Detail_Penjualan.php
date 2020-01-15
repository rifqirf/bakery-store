<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Penjualan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->table = "detail_penjualan";
		$this->pkey = "no_pj";
		$this->columns = [
			"no_pj",
			"id_produk",
      "qty",
      "harga",
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
        $this->db->select("detail_penjualan.qty, detail_penjualan.harga, produk.nama_produk");
        $this->db->join("produk", "produk.id_produk=detail_penjualan.id_produk", "left");
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
		$prefix = "PRD";

		// var_dump($this->input->post());

		// $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');

		// if($this->form_validation->run() == FALSE){
      // $response["status_message"] = "Insufficient Input";
    // } else {
			$data = [
				"no_pj" => $this->input->get("no_pj"),
				"id_pembeli" => $this->input->get("id_pembeli"),
				"id_toko" => $this->input->get("id_toko"),
				"timestmp" => date("yyyy-mm-dd h:i:s"),
				"status" => 3,
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
				"no_pj" => $this->input->get("no_pj"),
        "status" => $this->input->get("status"),
			];
			// $data["id_produk"] = $new_id;
			// $field_data = array_keys($data);

			// if(empty($data)) {
				// $response["status_message"] = "Unexpected input";
			// } else {
				try {
					if(empty($data)) {
						$response["status_message"] = "No Required Input";
					} else {
						$this->db->where([ "$this->pkey" => $data[$this->pkey]]);
						$this->db->update($this->table, $data);
					}
					$response["status"] = 1;
					$response["status_message"] = "Success";
				} catch(Exception $e) {
					print("Error: ". $e);
					$response["status_message"] = "Unknown Error in Query"; 
				}
			// }
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
