<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model{

	function tampil($id_user){
        $this->db->where('id_user', $id_user);
		$q = $this->db->get("user");
		$d = $q->row_array();

		return $d;
	}

	function detail($id_user) {
        $this->db->where('id_user', $id_user);
            $this->db->order_by('id_user', 'logo_usaha');
            $q = $this->db->get('user',4,0);
            $d = $q->result_array();
    
            return $d;
        
	}
	

	function login($m){
        $username = $m['email'];
        $password = $m['password'];
        $password = sha1($password);

        $this->db->where('email', $username);
        $this->db->where('password', $password);
        $q = $this->db->get('user');
        $cekuser = $q->row_array();

        if (!empty($cekuser)) {
            $this->session->set_userdata("id_user", $cekuser["id_user"]);
            $this->session->set_userdata("email", $cekuser["email"]);
            $this->session->set_userdata("nama_usaha", $cekuser["nama_usaha"]);
			$this->session->set_userdata("logo_usaha", $cekuser["logo_usaha"]);
            $this->session->set_userdata("wa_user", $cekuser["wa_user"]);
            return "ada";
        }else{
            return "gak ada";
        }

    }

	function ubah($m,$id_user){

        $config['upload_path'] = $this->config->item("assets_logo");                                                              
		$config['allowed_types'] = 'gif|jpg|png';                                                                                                                                                                                                                                                               

		$this->load->library('upload', $config);

		$ngupload = $this->upload->do_upload("logo_usaha");

		if ($ngupload) {
			$m['logo_usaha'] = $this->upload->data("file_name");

		}

        /*  if (!empty($inputan["password"])) {
            $inputan['password_user'] = sha1($inputan['password_user']);
        }else{
            unset($inputan['password_user']);
        }*/

        $this->db->where('id_user',$id_user);
        $this->db->update('user',$m);

        $this->db->where('id_user',$id_user);
        $q = $this->db->get('user');
        $cekuser = $q->row_array();

            $this->session->set_userdata("id_user", $cekuser["id_user"]);
            $this->session->set_userdata("email", $cekuser["email"]);
            $this->session->set_userdata("nama_usaha", $cekuser["nama_usaha"]);
			$this->session->set_userdata("logo_usaha", $cekuser["logo_usaha"]);
            $this->session->set_userdata("wa_user", $cekuser["wa_user"]);
    }

    function register($m){

        $config['upload_path'] = $this->config->item("assets_logo");                                                              
		$config['allowed_types'] = 'gif|jpg|png';                                                                                                                                                                                                                                                               

		$this->load->library('upload', $config);

		$ngupload = $this->upload->do_upload("logo_usaha");

		if ($ngupload) {
			$m['logo_usaha'] = $this->upload->data("file_name");

		}

        $this->db->insert('user',$m);
        
    }
}
