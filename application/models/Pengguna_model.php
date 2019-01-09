<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

	public function get()
	{
		$this->db->order_by('nama_pengguna', 'ASC');
		$this->db->where('pengguna.id_pengguna != ', 1, FALSE);
		$this->db->join('sekolah','pengguna.id_sekolah = sekolah.id_sekolah');
		$this->db->join('jenis_pengguna','pengguna.id_jenis_pengguna = jenis_pengguna.id_jenis_pengguna');
		$query = $this->db->get('pengguna');
		return $query->result();

	}

	public function get_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->join('jenis_pengguna','pengguna.id_jenis_pengguna = jenis_pengguna.id_jenis_pengguna');
		$this->db->join('sekolah','sekolah.id_sekolah = pengguna.id_sekolah');
		$this->db->where(array('pengguna.id_pengguna' => $id));

		$query = $this->db->get();
		return $query->row();
	}

	public function edit($id)
	{
		$password=$this->input->post('password');
		$data = array(
			'username'          => $this->input->post('username'),
			'nama_pengguna'   => $this->input->post('nama_pengguna'),
			'email'          => $this->input->post('email'),
			'password'          => md5($password),

		);
		$this->db->where('id_pengguna', $id);
		$this->db->update('pengguna', $data);
	}

	public function create()
	{
		$data = array(
			'npsn'          => $this->input->post('npsn'),
			'nama_pengguna'   => $this->input->post('nama_pengguna'),
			'id_jenis_pengguna'          => $this->input->post('id_jenis_pengguna'),
			'id_status_pengguna'          => $this->input->post('id_status_pengguna'),
			'alamat'          => $this->input->post('alamat'),
			'kecamatan'          => $this->input->post('kecamatan'),

		);
		$this->db->insert('pengguna', $data);
	}

	public function createAkun()
	{
		$password=$this->input->post('password');
		$data = array(
			'username'          => $this->input->post('username'),
			'nama_pengguna'   => $this->input->post('nama_pengguna'),
			'email'   => $this->input->post('email'),
			'password'   => md5($password),
			'id_pengguna'          => $this->input->post('id_pengguna'),
			'id_jenis_pengguna'          => '2',
		);
		$this->db->insert('pengguna', $data);
	}
}


/* End of file Sekolah_model.php */
/* Location: ./application/models/Sekolah_model.php */
