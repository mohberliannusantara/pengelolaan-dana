<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran_model extends CI_Model {

	public function get($id_sekolah)
	{
		$this->db->order_by('tanggal', 'ASC');
		$this->db->where('status', 'keluar');
		$this->db->where('keluar_masuk_dana.id_sekolah', $id_sekolah, FALSE);
		$this->db->join('jenis_dana_kegiatan','keluar_masuk_dana.id_jenis_dana_kegiatan = jenis_dana_kegiatan.id_jenis_dana_kegiatan');
		$query = $this->db->get('keluar_masuk_dana');

		return $query->result();
	}

	public function create()
	{
		$data = array(
			'nama_kegiatan' => $this->input->post('nama_pengeluaran'),
			'nama_toko' => $this->input->post('toko'),
			'id_jenis_dana_kegiatan' => $this->input->post('jenis_pengeluaran'),
			'jumlah' => $this->input->post('jumlah'),
			'id_sekolah' => $this->session->id_sekolah,
			'tanggal' => $this->input->post('tanggal'),
			'gambar' => $this->upload->data('file_name'),
			'status' => "keluar",
		);

		$this->db->insert('keluar_masuk_dana', $data);
	}

	public function getPengeluaranById($id)
	{
		$this->db->where('keluar_masuk_dana.id_keluar_masuk_dana', $id);
		$this->db->join('jenis_dana_kegiatan','keluar_masuk_dana.id_jenis_dana_kegiatan = jenis_dana_kegiatan.id_jenis_dana_kegiatan');
		$query = $this->db->get('keluar_masuk_dana');

		return $query->result();
	}

	public function edit($id)
	{
		if ($this->upload->data('file_name')==null) {
			$data = array(
			'nama_kegiatan' => $this->input->post('nama_pengeluaran'),
			'nama_toko' => $this->input->post('toko'),
			'id_jenis_dana_kegiatan' => $this->input->post('jenis_pengeluaran'),
			'jumlah' => $this->input->post('jumlah'),
			'id_sekolah' => $this->session->id_sekolah,
			'tanggal' => $this->input->post('tanggal'),
			);
			$this->db->where('id_pengeluaran', $id);
			$this->db->update('pengeluaran', $data);		
		}else{
			$data = array(
			'nama_kegiatan' => $this->input->post('nama_pengeluaran'),
			'nama_toko' => $this->input->post('toko'),
			'id_jenis_dana_kegiatan' => $this->input->post('jenis_pengeluaran'),
			'jumlah' => $this->input->post('jumlah'),
			'id_sekolah' => $this->session->id_sekolah,
			'tanggal' => $this->input->post('tanggal'),
			'gambar' => $this->upload->data('file_name'),
			);
			$this->db->where('id_keluar_masuk_dana', $id);
			$this->db->update('keluar_masuk_dana', $data);
		}
		
	}

	public function editPic($id)
	{
		$data = array(
			'nama_kegiatan' => $this->input->post('nama_pengeluaran'),
			'nama_toko' => $this->input->post('toko'),
			'id_jenis_dana_kegiatan' => $this->input->post('jenis_pengeluaran'),
			'jumlah' => $this->input->post('jumlah'),
			'id_sekolah' => $this->session->id_sekolah,
			'tanggal' => $this->input->post('tanggal'),
			'gambar' => $this->upload->data('file_name'),
		);

		$this->db->where('id_keluar_masuk_dana', $id);
		$this->db->update('keluar_masuk_dana', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_keluar_masuk_dana', $id);
		$this->db->delete('keluar_masuk_dana');
	}

	
}

/* End of file Pengeluaran_model.php */
/* Location: ./application/models/Pengeluaran_model.php */

?>
