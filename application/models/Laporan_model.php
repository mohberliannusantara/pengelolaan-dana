<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {

	public function cetakBos04($id, $awal, $akhir)
	{
		$this->db->where('id_sekolah', $id);
		$this->db->where('tanggal BETWEEN "'.$awal.'" AND "'.$akhir.'"');
		$this->db->order_by('tanggal', 'ASC');
		$query=$this->db->get('pengeluaran');
		return $query->result();
	}

	

}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */