<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran_model extends CI_Model {

	public function get($id_sekolah)
	{
		$this->db->order_by('tanggal', 'ASC');
		$this->db->where('pengeluaran.id_sekolah', $id_sekolah, FALSE);
		$this->db->join('jenis_pengeluaran','pengeluaran.id_jenis_pengeluaran = jenis_pengeluaran.id_jenis_pengeluaran');
		$query = $this->db->get('pengeluaran');

		return $query->result();
	}

	public function create()
	{
		$data = array(
			'nama_pengeluaran' => $this->input->post('nama_pengeluaran'),
			'nama_toko' => $this->input->post('toko'),
			'id_jenis_pengeluaran' => $this->input->post('jenis_pengeluaran'),
			'jumlah' => $this->input->post('jumlah'),
			'id_sekolah' => $this->session->id_sekolah,
			'tanggal' => $this->input->post('tanggal'),
		);

		$this->db->insert('pengeluaran', $data);
	}

	public function getPengeluaranById($id)
	{
		$this->db->where('pengeluaran.id_pengeluaran', $id);
		$this->db->join('jenis_pengeluaran','pengeluaran.id_jenis_pengeluaran = jenis_pengeluaran.id_jenis_pengeluaran');
		$query = $this->db->get('pengeluaran');

		return $query->result();
	}

	public function edit($id)
	{
		$data = array(
			'nama_pengeluaran' => $this->input->post('nama_pengeluaran'),
			'nama_toko' => $this->input->post('toko'),
			'id_jenis_pengeluaran' => $this->input->post('jenis_pengeluaran'),
			'jumlah' => $this->input->post('jumlah'),
			'id_sekolah' => $this->session->id_sekolah,
			'tanggal' => $this->input->post('tanggal'),
		);

		$this->db->where('id_pengeluaran', $id);
		$this->db->update('pengeluaran', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_pengeluaran', $id);
		$this->db->delete('pengeluaran');
	}

	public function cetakPengeluaran($id, $awal, $akhir)
	{
		$this->db->where('id_sekolah', $id);
		$this->db->where('tanggal BETWEEN "'.$awal.'" AND "'.$akhir.'"');
		$this->db->order_by('tanggal', 'ASC');
		$query=$this->db->get('pengeluaran');
		return $query->result();
	}

}

/* End of file Pengeluaran_model.php */
/* Location: ./application/models/Pengeluaran_model.php */

?>
