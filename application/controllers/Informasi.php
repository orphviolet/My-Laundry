<?php 

class Informasi extends CI_Controller{

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect('/','refresh');
		}
	}


	function index(){
		$id_user = $this->session->userdata("id_user");
		$this->load->model("Minformasi");

		$data["informasi"] = $this->Minformasi->tampil($id_user);

		$this->load->view('navbar_user');
		$this->load->view('informasi_utama', $data);
		$this->load->view('footer');
	}

	function tambah(){
		$m = $this->input->post();

		$this->form_validation->set_rules("isi_informasi","Informasi","required");

		$this->form_validation->set_message("required", "%s wajib diisi");

		if ($this->form_validation->run()==TRUE) {
			$this->load->model('Minformasi');

            $m['isi_informasi'] = $this->input->post("isi_informasi");

			$this->Minformasi->simpan($m);
			$this->session->set_flashdata('pesan_sukses', 'Data informasi tersimpan');
			redirect('informasi','refresh');
		}


		$this->load->view("navbar_user");
		$this->load->view("informasi_tambah");
		$this->load->view("footer");
	}

	function hapus($id_informasi){
		echo $id_informasi;
		$this->load->model('Minformasi');
		$this->Minformasi->hapus($id_informasi);
		$this->session->set_flashdata('pesan_sukses', 'informasi telah dihapus');
		redirect('informasi','refresh');
		
	}

	function edit($id_informasi){

		

		$this->form_validation->set_rules("isi_informasi","informasi","required");

		$this->form_validation->set_message("required", "%s wajib diisi");


		$this->load->model("Minformasi");
		$data['informasi'] = $this->Minformasi->detail($id_informasi);

		$m = $this->input->post();


		if ($this->form_validation->run()==TRUE) {
			$this->Minformasi->ubah($m, $id_informasi);
			$this->session->set_flashdata('pesan_sukses', 'informasi telah diubah');
			redirect('informasi','refresh');
		}

		$this->load->view("navbar_user");
		$this->load->view("informasi_edit", $data);
		$this->load->view("footer");
	}


}