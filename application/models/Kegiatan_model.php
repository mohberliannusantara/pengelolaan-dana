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

	public function get_detail_kegiatan($id)
	{
		$this->db->where('detail_kegiatan.id_kegiatan', $id, FALSE);
		$this->db->join('jenis_kegiatan','kegiatan.id_jenis_kegiatan = jenis_kegiatan.id_jenis_kegiatan');
		$this->db->join('kegiatan','kegiatan.id_kegiatan = detail_kegiatan.id_kegiatan');
		$query = $this->db->get('detail_kegiatan');

		return $query->result();
	}

}

/* End of file Kegiatan_model.php */
/* Location: ./application/models/Kegiatan_model.php */

?>
