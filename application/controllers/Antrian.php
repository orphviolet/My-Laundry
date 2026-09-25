<?php

class Antrian extends CI_Controller{

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect('/','refresh');
		}
	}

	function index(){
		$id_user = $this->session->userdata("id_user");
		$this->load->model("Mpelanggan");
        $this->load->model("Mantrian");
		$this->load->model("Mjasa");

		$data["antrian"] = $this->Mantrian->tampil4();
		$data["jasa"] = $this->Mjasa->tampil($id_user);
		$data["pelanggan"] = $this->Mpelanggan->tampil($id_user);


		$this->load->view("navbar_user");
		$this->load->view("antrian_utama",$data);
		$this->load->view("footer");
	}

    function tambah_antrian(){

		$this->load->model("Mpelanggan");
        $this->load->model("Mantrian");
		$this->load->model("Mjasa");

		$id_user = $this->session->userdata("id_user");
		$data["jasa"] = $this->Mjasa->tampil($id_user);
		$data["pelanggan"] = $this->Mpelanggan->tampil($id_user);

        $this->form_validation->set_rules("id_pelanggan","Pelanggan","required");
        $this->form_validation->set_rules("id_jasa","Pesanannya","required");
		$this->form_validation->set_message("required", "%s wajib diisi");

        if ($this->form_validation->run()==TRUE) {


            $m['id_pelanggan'] = $this->input->post("id_pelanggan");
            $m['id_jasa'] = $this->input->post("id_jasa");


            $this->Mantrian->simpan($m);

            $this->session->set_flashdata('pesan_sukses','pesanan berhasil');
            redirect('antrian','refresh');
        }
        $this->load->view("navbar_user");
		$this->load->view("antrian_tambah",$data);
		$this->load->view("footer");

    }

		/* */
	function detail($id){
		$this->load->model('Mkategori');
		$data["kategori"] = $this->Mkategori->detail($id);
		$data['produk'] = $this->Mkategori->produk($id);

		$this->load->view("header");
		$this->load->view("kategori_produk", $data);
		$this->load->view("footer");
	}

	public function hapus($id_antrian){
		echo $id_antrian;
		$this->load->model('Mantrian');
		$this->Mantrian->hapus($id_antrian);
		$this->session->set_flashdata('pesan_sukses', 'antrian telah dihapus');
		redirect('antrian','refresh');
	}

	public function online(){
        $this->load->view("navbar_user");
		$this->load->view("kasir_online_detail");
		$this->load->view("footer");

    }



	
	public function offline(){
        $this->load->view("navbar_user");
		$this->load->view("kasir_offline_detail");
		$this->load->view("footer");

    }

}


