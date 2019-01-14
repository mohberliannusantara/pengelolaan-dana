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

}

/* End of file Kegiatan_model.php */
/* Location: ./application/models/Kegiatan_model.php */

?>
