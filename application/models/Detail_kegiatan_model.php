<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_kegiatan_model extends CI_Model {

	public function create($id)
	{
		$data = array(
			'nama_detail_kegiatan' => $this->input->post('nama_kegiatan'),
			'jumlah' => $this->input->post('jumlah'),
			'tanggal' => $this->input->post('tanggal'),
			'id_kegiatan' => $id
		);

		$this->db->insert('detail_kegiatan', $data);
	}

	public function get_by_id($id)
	{
		$this->db->where('detail_kegiatan.id_detail_kegiatan', $id, FALSE);
		$query = $this->db->get('detail_kegiatan');

		return $query->row();
	}

	public function edit($id)
	{
		$data = array(
			'nama_detail_kegiatan' => $this->input->post('nama_detail_kegiatan'),
			'jumlah' => $this->input->post('jumlah'),
			'tanggal' => $this->input->post('tanggal'),
		);

		$this->db->where('id_detail_kegiatan', $id);
		$this->db->update('detail_kegiatan', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_detail_kegiatan', $id);
		$this->db->delete('detail_kegiatan');
	}
}

/* End of file Detail_kegiatan_model.php */
/* Location: ./application/models/Detail_kegiatan_model.php */

?>
