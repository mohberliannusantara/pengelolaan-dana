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

}

/* End of file Pengeluaran_model.php */
/* Location: ./application/models/Pengeluaran_model.php */

?>
