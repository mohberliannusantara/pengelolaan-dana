<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi_model extends CI_Model {

	public function login($email,$password)
	{
		$this->db->join('jenis_pengguna','pengguna.id_jenis_pengguna = jenis_pengguna.id_jenis_pengguna');
		$this->db->join('sekolah','pengguna.id_sekolah = sekolah.id_sekolah');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get('pengguna');
	}
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */
