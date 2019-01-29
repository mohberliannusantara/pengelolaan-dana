<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sumberdana_model extends CI_Model {

	public function getJenisSumberDana()
	{
		$query = $this->db->get('jenis_sumber_dana');
		return $query->result();
	}

	public function createJenis()
	{
		$nama_jenis_sumber_dana = $this->input->post('nama_jenis_sumber_dana');
		$data = array('nama_jenis_sumber_dana' => $this->input->post("nama_jenis_sumber_dana") );
		$this->db->insert('jenis_sumber_dana', $data);
	}

	public function get_jenis_by_id($id)
	{
		$this->db->where(array('id_jenis_sumber_dana' => $id));
		$query = $this->db->get('jenis_sumber_dana');
		return $query->row();
	}

	public function editJenis($id)
	{
		$data = array(
			'nama_jenis_sumber_dana' => $this->input->post('nama_jenis_sumber_dana')
		);
		$this->db->where('id_jenis_sumber_dana',$id);
		$this->db->update('jenis_sumber_dana', $data);
	}

	public function deleteJenis($id)
	{
		$this->db->where('id_jenis_sumber_dana', $id);
		$this->db->delete('jenis_sumber_dana');
	}


	public function getJumlahTerakhir($id)
	{
		$this->db->select('jumlah');
		$this->db->order_by('tanggal', 'DESC');
		$this->db->where('sumber_dana.id_sekolah', $id);
		$this->db->limit(1);

		$query = $this->db->get('sumber_dana');
		return $query->row();
	}
	
	public function create($nama)
	{
		$saldo_awal = $this->input->post('saldo_awal');
		$saldo_bank = $this->input->post('saldo_bank');
		$saldo_kas_tunai = $this->input->post('saldo_kas_tunai');
		$bunga_bank =$this->input->post('bunga_bank');
		$jumlah= $saldo_awal + $saldo_bank + $saldo_kas_tunai - ($bunga_bank/100*$saldo_bank);
		$data = array(
			'id_sekolah' => $this->session->id_sekolah,
			'nama_pemasukkan' => $nama,
			'saldo_awal' => $this->input->post('saldo_awal'),
			'saldo_bank' => $this->input->post('saldo_bank'),
			'bunga_bank' => $this->input->post('bunga_bank'),
			'saldo_kas_tunai' => $this->input->post('saldo_kas_tunai'),
			'tanggal' => $this->input->post('tanggal'),
			'id_jenis_sumber_dana' => $this->input->post('id_jenis_sumber_dana'),
			'jumlah' => $jumlah,
		);

		$query= $this->db->insert('sumber_dana', $data);
		// return $query->row();
	}

	public function createAuto($nama,$tanggal,$saldo)
	{
		$data = array(
			'id_sekolah' => $this->session->id_sekolah,
			'nama_pemasukkan' => $nama,
			'saldo_awal' => $saldo,
			'tanggal' => $tanggal,
			'id_jenis_sumber_dana' => "1",
			'jumlah' => $saldo
		);

		$query= $this->db->insert('sumber_dana', $data);
	}

	public function updateAuto($nama,$id_sekolah,$saldo)
	{
		$data = array('saldo_awal' => $saldo,'jumlah' => $saldo);
		$this->db->where(array('sumber_dana.id_sekolah' => $id_sekolah, 'sumber_dana.nama_pemasukkan' => $nama));
		$this->db->update('sumber_dana', $data);

	}

	public function get($id_sekolah)
	{
		$this->db->order_by('tanggal', 'ASC');
		$this->db->where('sumber_dana.id_sekolah', $id_sekolah, FALSE);
		$this->db->join('sekolah','sumber_dana.id_sekolah = sekolah.id_sekolah');
		$this->db->join('jenis_sumber_dana','jenis_sumber_dana.id_jenis_sumber_dana = sumber_dana.id_jenis_sumber_dana');
		$query = $this->db->get('sumber_dana');
		return $query->result();
	}

	public function edit($id_sekolah,$id_sumber_dana)
	{
		$saldo_awal = $this->input->post('saldo_awal');
		$saldo_bank = $this->input->post('saldo_bank');
		$saldo_kas_tunai = $this->input->post('saldo_kas_tunai');
		$jumlah= $saldo_awal + $saldo_bank + $saldo_kas_tunai;
		$data = array(
			'nama_pemasukkan' => $this->input->post('nama_pemasukkan'),
			'saldo_awal' => $this->input->post('saldo_awal'),
			'saldo_bank' => $this->input->post('saldo_bank'),
			'bunga_bank' => $this->input->post('bunga_bank'),
			'saldo_kas_tunai' => $this->input->post('saldo_kas_tunai'),
			'tanggal' => $this->input->post('tanggal'),
			'id_jenis_sumber_dana' => $this->input->post('id_jenis_sumber_dana'),
			'jumlah' => $jumlah,
		);
		$this->db->where(array('sumber_dana.id_sekolah' => $id_sekolah, 'sumber_dana.id_sumber_dana' => $id_sumber_dana));
		$this->db->update('sumber_dana', $data);
	}

	public function get_by_id($id_sekolah,$id_sumber_dana)
	{
		$this->db->select('*');
		$this->db->from('sumber_dana');
		$this->db->join('sekolah','sumber_dana.id_sekolah = sekolah.id_sekolah');
		$this->db->join('jenis_sumber_dana','jenis_sumber_dana.id_jenis_sumber_dana = sumber_dana.id_jenis_sumber_dana');
		$this->db->where(array('sumber_dana.id_sekolah' => $id_sekolah, 'sumber_dana.id_sumber_dana' => $id_sumber_dana));

		$query = $this->db->get();
		return $query->row();
	}

	public function delete($id)
	{
		$this->db->where('id_sumber_dana', $id);
		$this->db->delete('sumber_dana');
	}

}

/* End of file sumberdana_model.php */
/* Location: ./application/models/sumberdana_model.php */