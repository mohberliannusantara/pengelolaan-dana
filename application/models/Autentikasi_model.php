<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi_model extends CI_Model {

	public function login($username,$password)
	{

		$this->db->join('jenis_pengguna','pengguna.id_jenis_pengguna = jenis_pengguna.id_jenis_pengguna');
		$this->db->join('sekolah','pengguna.id_sekolah = sekolah.id_sekolah');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('pengguna');

		// $this->db->join('jenis_pengguna','pengguna.id_jenis_pengguna = jenis_pengguna.id_jenis_pengguna');
  //       $this->db->from('pengguna');
  //       $this->db->where('email', $email);
		// $this->db->where('password', $password);
  //       $query = $this->db->get();
  //       if($query->num_rows()==1){
  //           return $query->result();
  //       }else{
  //           return false;
  //       }      
	}
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */
