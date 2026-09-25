<?php

class Mantrian extends CI_Model{
	function tampil($m){
		$this->db->where('id_user', $m);
		$this->db->where('id_antrian', $m);
		$q = $this->db->get("antrian");
		$d = $q->result_array();

		return $d;
	}


	function tampil4(){
		$this->db->select('user.id_user', 'antrian.id_antrian', 'kategori_jasa.nama_jasa', 'kategori_jasa.harga_jasa', 'pelanggan.id_pelanggan');
		$this->db->from('antrian');
		$this->db->join('user','antrian.id_user = user.id_user', 'left');
		$this->db->join('kategori_jasa','antrian.id_jasa = kategori_jasa.id_jasa', 'left');
		$q = $this->db->get();
		$d = $q->result_array();

		return $d;
	}

	function tampil2(){
		



		$this->db->select('user.id_user', 'antrian.id_antrian', 'kategori_jasa.nama_jasa', 'kategori_jasa.harga_jasa', 'pelanggan.id_pelanggan');
		$this->db->from('antrian');
		$this->db->join('kategori_jasa','antrian.id_jasa = kategori_jasa.id_jasa', 'left');
		$q = $this->db->get();
		$d = $q->result_array();

		return $d;
	}

	function tampil3($id){
		
		$this->db->where('id_antrian',$id);
		$this->db->join('pelanggan','antrian.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$q = $this->db->get("pelanggan");
		$d = $q->result_array();

		return $d;
	}
	
	function tampil5($id){
		
		$sql = "SELECT t1.*, t2.*, t3.*
        FROM tabel1 t1
        JOIN tabel2 t2 ON t1.user_id = t2.user_id
        JOIN tabel3 t3 ON t1.user_id = t3.user_id
        WHERE t1.user_id = ?";

		$stmt = $conn->prepare($sql);
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$result = $stmt->get_result();

		return $d;
	}
	


	function tampil_antrian_terbaru(){
		$this->db->order_by('id_antrian', 'id_jasa', 'nama_jasa', 'nama_pelanggan', 'jumlah' );
		$q = $this->db->get('kategori_jasa',4,0);
		$d = $q->result_array();
		$this->db->join('pelanggan','antrian.id_pelanggan = pelanggan.id_pelanggan', 'left');

		return $d;
	}

	function produk_member($id_member){
		$this->db->where('id_member', $id_member);
		$q = $this->db->get("produk");
		$d = $q->result_array();

		return $d;
	}

	function simpan($m){
		$m['id_user'] = $this->session->userdata("id_user");

		$this->db->insert('antrian', $m);
	}

	function detail($id_produk){
		$this->db->where('id_member', $this->session->userdata("id_member"));
		$this->db->where('id_produk', $id_produk);
		$this->db->join('kategori','produk.id_kategori = kategori.id_kategori', 'left');
		$q = $this->db->get("produk");
		$d = $q->row_array();

		return $d;
	}

	function ubah($inputan, $id){
		$config['upload_path'] = $this->config->item("assets_produk");                                                              
		$config['allowed_types'] = 'gif|jpg|png|jpeg';                                                                                                                                                                                                                                                               

		$this->load->library('upload', $config);

		$ngupload = $this->upload->do_upload("foto_produk");

		if ($ngupload) {
			$inputan['foto_produk'] = $this->upload->data("file_name");

		}

		$inputan['id_member'] = $this->session->userdata("id_member");

		$this->db->where('id_produk', $id);
		$this->db->update('produk', $inputan);
	}

	function hapus($id_antrian){
		$this->db->where('id_user', $this->session->userdata("id_user"));
		$this->db->where('id_antrian', $id_antrian);
		$this->db->delete('antrian');
	}

	function detail_umum($id_produk){
		$this->db->where('id_produk', $id_produk);
		$this->db->join('kategori','produk.id_kategori = kategori.id_kategori', 'left');
		$q = $this->db->get("produk");
		$d = $q->row_array();

		return $d;
	}
} 
