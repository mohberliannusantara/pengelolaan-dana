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

	public function cetakK2($id, $tahun)
	{
		$this->db->order_by('jenis_kegiatan.id_jenis_kegiatan', 'ASC');
		// $this->db->where('tanggal BETWEEN "'.$awal.'" AND "'.$akhir.'"');
		$this->db->where('year(detail_kegiatan.tanggal)',$tahun);
		$this->db->where('kegiatan.id_sekolah', $id);
		$this->db->join('kegiatan', 'jenis_kegiatan.id_jenis_kegiatan = kegiatan.id_jenis_kegiatan');
		$this->db->join('detail_kegiatan', 'kegiatan.id_kegiatan = detail_kegiatan.id_kegiatan');
		$query = $this->db->get('detail_kegiatan');

		return $query->result();
	}

	public function cetakK3($id,$awal,$akhir)
	{
		$this->db->where('id_sekolah', $id);
		$this->db->where('tanggal BETWEEN "'.$awal.'" AND "'.$akhir.'"');
		$this->db->order_by('tanggal', 'ASC');
		$query=$this->db->get('sumber_dana');
		return $query->result();
	}

	public function cekNama($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	public function sumMasuk($id,$awal,$akhir)
	{
		$this->db->select_sum('jumlah');
		$this->db->where('id_sekolah', $id);
		$this->db->where('tanggal BETWEEN "'.$awal.'" AND "'.$akhir.'"');
		$query=$this->db->get('sumber_dana');
		return $query->row()->jumlah;
	}

	public function sumKeluar($id,$awal,$akhir)
	{
		$this->db->select_sum('jumlah');
		$this->db->where('id_sekolah', $id);
		$this->db->where('tanggal BETWEEN "'.$awal.'" AND "'.$akhir.'"');
		$query=$this->db->get('pengeluaran');
		if($query->row()->jumlah == null){
			return "0";
		}else{
			return $query->row()->jumlah;
		}
		// return $query->row()->jumlah;
	}
}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */
// return $query->row()->jumlah == null ? "0" : $query->row()->jumlah ;
