<?php 

class Jasa extends CI_Controller{

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect('/','refresh');
		}
	}

	function index(){

		$id_user = $this->session->userdata("id_user");
		$this->load->model("Mjasa");

		$data["jasa"] = $this->Mjasa->tampil($id_user);

		$this->load->view('navbar_user');
		$this->load->view('kategori_jasa', $data);
		$this->load->view('footer');
	}

	function tambah(){
		$m = $this->input->post();

		$this->form_validation->set_rules("nama_jasa","Nama Jasa","required");
		$this->form_validation->set_rules("harga_jasa","Harga Jasa","required");

		$this->form_validation->set_message("required", "%s wajib diisi");

		if ($this->form_validation->run()==TRUE) {
			$this->load->model('Mjasa');

			$m['nama_jasa'] = $this->input->post("nama_jasa");
			$m['foto_jasa'] = $this->input->post("foto_jasa");
			$m['harga_jasa'] = $this->input->post("harga_jasa");
            $m['isi_deskripsi'] = $this->input->post("isi_deskripsi");

			$this->Mjasa->simpan($m);
			$this->session->set_flashdata('pesan_sukses', 'Data Jasa tersimpan');
			redirect('jasa','refresh');
		}


		$this->load->view("navbar_user");
		$this->load->view("kategori_tambah");
		$this->load->view("footer");
	}

	function hapus($id_jasa){
		echo $id_jasa;
		$this->load->model('Mjasa');
		$this->Mjasa->hapus($id_jasa);
		$this->session->set_flashdata('pesan_sukses', 'Jasa telah dihapus');
		redirect('jasa','refresh');
		
	}

	function edit($id_jasa){
		$this->form_validation->set_rules("nama_jasa","Nama Jasa","required");
		$this->form_validation->set_rules("harga_jasa","Harga Jasa","required");

		$this->form_validation->set_message("required", "%s wajib diisi");


		$this->load->model("Mjasa");
		$data['jasa'] = $this->Mjasa->detail($id_jasa);

		$m = $this->input->post();


		if ($this->form_validation->run()==TRUE) {
			$this->Mjasa->ubah($m, $id_jasa);
			$this->session->set_flashdata('pesan_sukses', 'Jasa telah diubah');
			redirect('jasa','refresh');
		}

		$this->load->view("navbar_user");
		$this->load->view("kategori_edit", $data);
		$this->load->view("footer");
	}

	function detail($id_jasa){

		$this->load->model("Mjasa");
		$data["jasa"] = $this->Mjasa->detail($id_jasa);

		$this->load->view('navbar_user');
		$this->load->view('kategori_detail', $data);
		$this->load->view('footer');
	}


}
