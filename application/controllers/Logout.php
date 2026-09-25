<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller{
    public function index(){
        $this->session->unset_userdata("id_user");
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("nama_usaha");
        $this->session->unset_userdata("logo_usaha");
        $this->session->unset_userdata("wa_user");

		$this->session->set_flashdata('pesan_sukses', 'Anda telah logout');
        redirect('/','refresh');
    }
}
