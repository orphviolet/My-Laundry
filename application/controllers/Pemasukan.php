<?php 

class Pemasukan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect('/','refresh');
		}
	}
	function index(){

		$id_user = $this->session->userdata("id_user");
		$this->load->model("Mpemasukan");

		$data["pemasukan"] = $this->Mpemasukan->tampil($id_user);

		$this->load->view('navbar_user');
		$this->load->view('pemasukan', $data);
		$this->load->view('footer');
	}

	function online(){
		$this->load->view('navbar_user');
		$this->load->view('transaksi_online');
		$this->load->view('footer');
	}

	function offline(){
		$this->load->view('navbar_user');
		$this->load->view('transaksi_offline');
		$this->load->view('footer');
	}

}