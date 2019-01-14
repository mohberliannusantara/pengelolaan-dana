<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi_model extends CI_Model {

	public function login($username,$password)
	{
		$this->db->join('jenis_pengguna','pengguna.id_jenis_pengguna = jenis_pengguna.id_jenis_pengguna');
		$this->db->join('sekolah','pengguna.id_sekolah = sekolah.id_sekolah');
		$this->db->join('status_sekolah','status_sekolah.id_status_sekolah = sekolah.id_status_sekolah');
		$this->db->join('jenis_sekolah','jenis_sekolah.id_jenis_sekolah = sekolah.id_jenis_sekolah');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('pengguna');
	}
}

/* End of file Autentikasi_model.php */
/* Location: ./application/models/Autentikasi_model.php */
