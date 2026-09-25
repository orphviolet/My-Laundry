<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class rating extends CI_Controller{

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata("id_user")) {
			redirect('/','refresh');
		}
	}

	public function index(){

        $this->load->view('navbar_utama');
	}
}