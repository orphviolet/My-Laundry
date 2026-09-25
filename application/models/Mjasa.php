<?php

class Mjasa extends CI_Model{
	function tampil($id_user){
		$this->db->where('id_user', $id_user);
		$q = $this->db->get("kategori_jasa");
		$d = $q->result_array();

		return $d;
	}

	function tampil_antrian($id_antrian){
		$this->db->where('id_user', $id_antrian);
		$this->db->where('id_jasa', $id_antrian);
		$this->db->join('antrian','kategori_jasa.id_jasa = antrian.id_jasa', 'left');
		$q = $this->db->get("kategori_jasa");
		$d = $q->result_array();

		return $d;
	}


	function jasa_user($id_user, $id_antrian){
		$this->db->where('id_user', $id_user);
		$this->db->where('id_antrian', $id_antrian);
		$q = $this->db->get("kategori_jasa");
		$d = $q->result_array();

		return $d;
	}

	function simpan($m){
		$config['upload_path'] = $this->config->item("assets_produk");                                                              
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JFIF';                                                                                                                                                                                                                                                               

		$this->load->library('upload', $config);

		$ngupload = $this->upload->do_upload("foto_jasa");

		if ($ngupload) {
			$m['foto_jasa'] = $this->upload->data("file_name");

		}

		$m['id_user'] = $this->session->userdata("id_user");

		$this->db->insert('kategori_jasa', $m);
	}

	function detail($id_jasa){
		$this->db->where('id_user', $this->session->userdata("id_user"));
		$this->db->where('id_jasa', $id_jasa);
		$q = $this->db->get("kategori_jasa");
		$d = $q->row_array();

		return $d;
	}

	function ubah($m, $id_jasa){
		$config['upload_path'] = $this->config->item("assets_produk");                                                              
		$config['allowed_types'] = 'gif|jpg|png|jpeg';                                                                                                                                                                                                                                                               

		$this->load->library('upload', $config);

		$ngupload = $this->upload->do_upload("foto_jasa");

		if ($ngupload) {
			$m['foto_jasa'] = $this->upload->data("file_name");

		}

		$m['id_user'] = $this->session->userdata("id_user");

		$this->db->where('id_jasa', $id_jasa);
		$this->db->update('kategori_jasa', $m);
	}

	function hapus($id_jasa){
		$this->db->where('id_user', $this->session->userdata("id_user"));
		$this->db->where('id_jasa', $id_jasa);
		$this->db->delete('kategori_jasa');
	}

	function detail_umum($id_jasa){
		$this->db->where('id_jasa', $id_jasa);
		$q = $this->db->get("kategori_jasa");
		$d = $q->row_array();

		return $d;
	}
} 
