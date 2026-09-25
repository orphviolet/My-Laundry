<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$m = $this->input->post();

		$this->form_validation->set_rules("email","Email","required");
		$this->form_validation->set_rules("password","Password","required");

		$this->form_validation->set_message("required", "%s wajib diisi");

		if($this->form_validation->run()==TRUE){
			$this->load->model('Muser');
			$output = $this->Muser->login($m);

			if($output=="ada"){

				$this->session->set_flashdata('pesan_sukses', 'Berhasil Login');
				redirect('kasir','refresh');
			}else{
				$this->session->set_flashdata('pesan_gagal', 'Gagal Login');
				redirect('/','refresh');
			}
		}

		$this->load->view('login');
	}
	
}
