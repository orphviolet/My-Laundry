<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpelanggan extends CI_Model{

	function tampil($id_user){
		$this->db->where('id_user', $id_user);
		$q = $this->db->get("pelanggan");
		$d = $q->result_array();

		return $d;
	}

	
	function detail($id_user) {
		$this->db->where('id_user', $id_user);
		$q = $this->db->get('user');
		$d = $q->row_array();

		return $d;
	}

    function tampil_pelanggan(){
            $q = $this->db->get("pelanggan");
            $d = $q->result_array();
    
            return $d;

    }
    function detail_pelanggan($id_pelanggan){
            $this->db->where('id_pelanggan', $id_pelanggan);
            $q = $this->db->get("pelanggan");
            $d = $q->result_array();
    
            return $d;

    }

	function hapus($id_pelanggan){
		$this->db->where('id_user', $this->session->userdata("id_user"));
		$this->db->where('id_pelanggan', $id_pelanggan);
		$this->db->delete('pelanggan');
	}

    function simpan($m){
		$m['id_user'] = $this->session->userdata("id_user");

		$this->db->insert('pelanggan', $m);
	}

    
	

	
}
