<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller{
    function __construct(){
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect('/','refresh');
		}
	}

    
    public function index(){

        
    
        $this->form_validation->set_rules("email","email","required");
		$this->form_validation->set_message("required", "%s wajib diisi");
        $this->form_validation->set_message("is_unique", "%s Email sudah digunakan");

        $this->load->model("Muser");
        $id_user = $this->session->userdata("id_user");
        $data["user1"] = $this->Muser->tampil($id_user);
		

        if ($this->form_validation->run()==TRUE) {

            $m['email'] = $this->input->post("email");
            $m['password'] = $this->input->post("password");
            $m['password'] = sha1($m['password']);
            $m['nama_usaha'] = $this->input->post("nama_usaha");
            $m['logo_usaha'] = $this->input->post("logo_usaha");
            $m['wa_user'] = $this->input->post("wa_user");

            $this->Muser->ubah($m,$id_user);

            $this->session->set_flashdata('pesan_sukses','Akun telah diubah');
            redirect('akun','refresh');
        }

        $this->load->view('edit_akun', $data);
    }
}
