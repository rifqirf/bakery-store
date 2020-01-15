<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->table = "produk";
		$this->pkey = "id_produk";
		$this->columns = [
			"id_produk",
			"nama_produk",
			"id_jenis",
			"satuan",
			"harga",
			"stok",
			"deskripsi",
			"foto"
		];
  }

  public function index() {
    if($this->session->userdata("user") != null) {
      redirect( base_url("control/dashboard") );
    }
    $data['page'] = "Login";
    $data['access'] = "admin";

    $this->form_validation->set_rules("email", "Email", "required");
    $this->form_validation->set_rules("password", "Password", "required");
    if($this->form_validation->run() == FALSE) {
      $this->load->view('login', $data);
    } else {
      $auth = [
        "email" => $this->input->post("email"),
        "password" => md5($this->input->post("password")),
      ];
      $user = $this->db->where($auth)->get("toko")->result_array();
      $this->session->set_userdata("user", $user);
      var_dump($this->session);
      redirect( base_url("control/dashboard") );
    }
  }

  public function logout() {
    var_dump($this->session->userdata("user"));
    session_start();
    session_destroy();
    redirect( base_url("control/index") );
  }

  public function dashboard() {
    if($this->session->userdata("user") == null) {
      redirect( base_url("control/index") );
    }
    $data['page'] = "Dashboard";
    $this->load->view('template/_header');
    $this->load->view('dashboard', $data);
    $this->load->view('template/_footer');
  }

  public function penjualan() {
    if($this->session->userdata("user") == null) {
      redirect( base_url("control/index") );
    }

    $data['page'] = "Penjualan";
    $this->load->view('template/_header');
    $this->load->view('view-penjualan', $data);
    $this->load->view('template/_footer');
  }

  public function pembelian() {
    if($this->session->userdata("user") == null) {
      redirect( base_url("control/index") );
    }

    $data['page'] = "Pembelian";
    $this->load->view('template/_header');
    $this->load->view('view-penjualan', $data);
    $this->load->view('template/_footer');
  }

  public function produksi() {
    if($this->session->userdata("user") == null) {
      redirect( base_url("control/index") );
    }

    $data['page'] = "Produksi";
    $this->load->view('template/_header');
    $this->load->view('view-penjualan', $data);
    $this->load->view('template/_footer');
  }

  public function keuangan() {
    if($this->session->userdata("user") == null) {
      redirect( base_url("control/index") );
    }

    $data['page'] = "Keuangan";
    $this->load->view('template/_header');
    $this->load->view('view-penjualan', $data);
    $this->load->view('template/_footer');
  }

  // CRUD

  public function produk() {
    if($this->session->userdata("user") == null) {
      redirect( base_url("control/index") );
    }

    $data['page'] = "Produk";
    $this->load->view('template/_header');
    $this->load->view('view-produk', $data);
    $this->load->view('template/_footer');
  }

  public function profile() {
    if($this->session->userdata("user") == null) {
      redirect( base_url("control/index") );
    }
    $data['page'] = "Profile";
    $this->load->view('template/_header');
    $this->load->view('view-profile', $data);
    $this->load->view('template/_footer');
  }

  public function bahan() {
    if($this->session->userdata("user") == null) {
      redirect( base_url("control/index") );
    }
    $data['page'] = "Bahan";
    $this->load->view('template/_header');
    $this->load->view('view-bahan', $data);
    $this->load->view('template/_footer');
  }

  public function customer() {
    if($this->session->userdata("user") == null) {
      redirect( base_url("control/index") );
    }
    $data['page'] = "Customer";
    $this->load->view('template/_header');
    $this->load->view('view-customer', $data);
    $this->load->view('template/_footer');
  }

  public function supplier() {
    if($this->session->userdata("user") == null) {
      redirect( base_url("control/index") );
    }
    $data['page'] = "Customer";
    $this->load->view('template/_header');
    $this->load->view('view-customer', $data);
    $this->load->view('template/_footer');
  }
  
}