<?php 

class Pelanggan extends CI_Controller{

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect('/','refresh');
		}
	}


	function index(){
		$id_user = $this->session->userdata("id_user");
		$this->load->model("Mpelanggan");

		$data["pelanggan"] = $this->Mpelanggan->tampil($id_user);
		
		$this->load->view('navbar_user');
		$this->load->view('pelanggan_utama', $data);
		$this->load->view('footer');
	}

	function tambah(){
		$m = $this->input->post();

		$this->form_validation->set_rules("nama_pelanggan","Nama Pelanggan","required");

		$this->form_validation->set_message("required", "%s wajib diisi");

		if ($this->form_validation->run()==TRUE) {
			$this->load->model('Mpelanggan');

			$m['nama_pelanggan'] = $this->input->post("nama_pelanggan");
            $m['nomor_hp'] = $this->input->post("nomor_hp");

			$this->Mpelanggan->simpan($m);
			$this->session->set_flashdata('pesan_sukses', 'Data pelanggan tersimpan');
			redirect('antrian/tambah_antrian','refresh');
		}


		$this->load->view("navbar_user");
		$this->load->view("tambah_pelanggan");
		$this->load->view("footer");
	}

	function hapus($id_pelanggan){
		echo $id_pelanggan;
		$this->load->model('Mpelanggan');
		$this->Mpelanggan->hapus($id_pelanggan);
		$this->session->set_flashdata('pesan_sukses', 'pelanggan telah dihapus');
		redirect('pelanggan','refresh');
		
	}

}
