<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class kasir extends CI_Controller{

        function __construct(){
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect('/','refresh');
		}
	}

	public function index(){


        $this->load->view('navbar_user');
        $this->load->view('dashboard_kasir');
        $this->load->view('footer');
	}
}