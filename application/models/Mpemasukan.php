<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpemasukan extends CI_Model{

	function tampil($id_user) {
		$this->db->where('id_user', $id_user);
		$q = $this->db->get('riwayat_payment');
		$d = $q->result_array();

		return $d;
	}
}