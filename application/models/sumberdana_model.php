<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sumberdana_model extends CI_Model {

	public function getJenisSumberDana()
	{
		$query = $this->db->get('jenis_sumber_dana');
		return $query->result();
	}
	
	public function create()
	{
		$saldo_awal = $this->input->post('saldo_awal');
		$saldo_bank = $this->input->post('saldo_bank');
		$saldo_kas_tunai = $this->input->post('saldo_kas_tunai');
		$jumlah= $saldo_awal + $saldo_bank + $saldo_kas_tunai;
		$data = array(
			'id_sekolah' => $this->input->post('id_sekolah'),
			'saldo_awal' => $this->input->post('saldo_awal'),
			'saldo_bank' => $this->input->post('saldo_bank'),
			'bunga_bank' => $this->input->post('bunga_bank'),
			'saldo_kas_tunai' => $this->input->post('saldo_kas_tunai'),
			'tanggal' => $this->input->post('tanggal'),
			'id_jenis_sumber_dana' => $this->input->post('id_jenis_sumber_dana'),
			'jumlah' => $jumlah,
		);

		$this->db->insert('sumber_dana', $data);
	}

	public function get()
	{
		$this->db->order_by('nama_sekolah', 'ASC');
		$this->db->where('sumber_dana.id_sekolah != ', 0, FALSE);
		$this->db->join('sekolah','sumber_dana.id_sekolah = sekolah.id_sekolah');
		$this->db->join('jenis_sumber_dana','jenis_sumber_dana.id_jenis_sumber_dana = sumber_dana.id_jenis_sumber_dana');
		$query = $this->db->get('sumber_dana');
		return $query->result();
	}

	public function edit($id)
	{
		$saldo_awal = $this->input->post('saldo_awal');
		$saldo_bank = $this->input->post('saldo_bank');
		$saldo_kas_tunai = $this->input->post('saldo_kas_tunai');
		$jumlah= $saldo_awal + $saldo_bank + $saldo_kas_tunai;
		$data = array(
			// 'id_sekolah' => $this->input->post('id_sekolah'),
			'saldo_awal' => $this->input->post('saldo_awal'),
			'saldo_bank' => $this->input->post('saldo_bank'),
			'bunga_bank' => $this->input->post('bunga_bank'),
			'saldo_kas_tunai' => $this->input->post('saldo_kas_tunai'),
			'tanggal' => $this->input->post('tanggal'),
			'id_jenis_sumber_dana' => $this->input->post('id_jenis_sumber_dana'),
			'jumlah' => $jumlah,
		);
		$this->db->where('id_sekolah', $id);
		$this->db->update('sumber_dana', $data);
	}

	public function get_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('sumber_dana');
		$this->db->join('sekolah','sumber_dana.id_sekolah = sekolah.id_sekolah');
		$this->db->join('jenis_sumber_dana','jenis_sumber_dana.id_jenis_sumber_dana = sumber_dana.id_jenis_sumber_dana');
		$this->db->where(array('sumber_dana.id_sekolah' => $id));

		$query = $this->db->get();
		return $query->row();
	}

	public function delete($id)
	{
		
	}

}

/* End of file sumberdana_model.php */
/* Location: ./application/models/sumberdana_model.php */