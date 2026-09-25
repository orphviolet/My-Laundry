<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

	public function index(){


        $this->form_validation->set_rules("email","email","required|is_unique[user.email]");
        $this->form_validation->set_rules("password","Password","required");
        $this->form_validation->set_rules("nama_usaha","Nama Usaha","required");
        $this->form_validation->set_rules("wa_user","Nomor WA","required");
		$this->form_validation->set_message("required", "%s wajib diisi");
        $this->form_validation->set_message("is_unique", "%s Email sudah digunakan");

        if ($this->form_validation->run()==TRUE) {
            $this->load->model("Muser");

            $m['email'] = $this->input->post("email");
            $m['password'] = $this->input->post("password");
            $m['password'] = sha1($m['password']);
            $m['nama_usaha'] = $this->input->post("nama_usaha");
            $m['logo_usaha'] = $this->input->post("logo_usaha");
            $m['wa_user'] = $this->input->post("wa_user");


            $this->Muser->register($m);

            $this->session->set_flashdata('pesan_sukses','registrasi berhasil, silahkan login');
            redirect('/','refresh');
        }

		$this->load->view('register');

        
	}


}