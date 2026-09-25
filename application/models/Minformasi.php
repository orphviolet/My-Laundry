<?php

class Minformasi extends CI_Model{
	function tampil($id_user){
		$this->db->where('id_user', $id_user);
		$q = $this->db->get("infomasi");
		$d = $q->result_array();

		return $d;
	}

    function simpan($m){

		$m['id_user'] = $this->session->userdata("id_user");

		$this->db->insert('infomasi', $m);
	}


	function ubah($m, $id_informasi){

		$m['id_user'] = $this->session->userdata("id_user");

		$this->db->where('id_informasi', $id_informasi);
		$this->db->update('infomasi', $m);
	}

	function hapus($id_informasi){
		$this->db->where('id_user', $this->session->userdata("id_user"));
		$this->db->where('id_infomasi', $id_informasi);
		$this->db->delete('infomasi');
	}

    function detail($id_informasi){
		$this->db->where('id_user', $this->session->userdata("id_user"));
		$this->db->where('id_informasi', $id_informasi);
		$q = $this->db->get("infomasi");
		$d = $q->row_array();

		return $d;
	}


}