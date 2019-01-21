<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_model extends CI_Model {

	public function get()
	{
		// $this->db->order_by('tanggal', 'ASC');
		// $this->db->where('pengeluaran.id_sekolah', $id_sekolah, FALSE);
		// $this->db->join('jenis_pengeluaran','pengeluaran.id_jenis_pengeluaran = jenis_pengeluaran.id_jenis_pengeluaran');
		$query = $this->db->get('jenis_kegiatan');

		return $query->result();
	}

	public function get_kegiatan($id)
	{
		$this->db->where('kegiatan.id_jenis_kegiatan', $id, FALSE);
		$this->db->join('jenis_kegiatan','kegiatan.id_jenis_kegiatan = jenis_kegiatan.id_jenis_kegiatan');
		$query = $this->db->get('kegiatan');

		return $query->result();
	}

	public function get_by_id($id)
	{
		$this->db->where('kegiatan.id_kegiatan', $id, FALSE);
		$query = $this->db->get('kegiatan');

		return $query->row();
	}

	public function get_detail_kegiatan($id)
	{
		$this->db->where('detail_kegiatan.id_kegiatan', $id, FALSE);
		$this->db->join('kegiatan','kegiatan.id_kegiatan = detail_kegiatan.id_kegiatan');
		$query = $this->db->get('detail_kegiatan');

		return $query->result();
	}

	public function create($id, $id_sekolah)
	{
		$data = array(
			'nama_kegiatan' => $this->input->post('nama_kegiatan'),
			'id_sekolah' => $id_sekolah,
			'id_jenis_kegiatan' => $id
		);

		$this->db->insert('kegiatan', $data);
	}

	public function edit($id)
	{
		$data = array(
			'nama_kegiatan' => $this->input->post('nama_kegiatan'),
		);

		$this->db->where('id_kegiatan', $id);
		$this->db->update('kegiatan', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_kegiatan', $id);
		$this->db->delete('kegiatan');
	}
}

/* End of file Kegiatan_model.php */
/* Location: ./application/models/Kegiatan_model.php */

?>
