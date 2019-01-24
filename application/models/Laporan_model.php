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

	public function cetakK2($id,$awal,$akhir)
	{
		// $this->db->order_by('tanggal', 'ASC');
		$this->db->where('tanggal BETWEEN "'.$awal.'" AND "'.$akhir.'"');
		$this->db->where('kegiatan.id_sekolah', $id);
		$this->db->join('detail_kegiatan', 'kegiatan.id_kegiatan = detail_kegiatan.id_kegiatan');
		$this->db->join('kegiatan', 'jenis_kegiatan.id_jenis_kegiatan = kegiatan.id_jenis_kegiatan');
		$query = $this->db->get('jenis_kegiatan');

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

	public function cekDana($id_sekolah)
	{

		$tahun = $this->input->post('tahun');
		$tri = $this->input->post('triwulan');
		if ($tri == "1/1") {
			$triwulan = "Triwulan I";
		}elseif ($tri == "1/4") {
			$triwulan = "Triwulan II";
		}elseif ($tri == "1/7") {
			$triwulan = "Triwulan I";
		}elseif ($tri == "1/10") {
			$triwulan = "Triwulan I";
		}
		$nama= "Dana " .$triwulan." ".$tahun;
		$this->db->where('sumber_dana.id_sekolah', $id_sekolah, FALSE);
		$this->db->where('sumber_dana.nama_pemasukkan', $nama);
		$this->db->join('sekolah','sumber_dana.id_sekolah = sekolah.id_sekolah');
		$this->db->join('jenis_sumber_dana','jenis_sumber_dana.id_jenis_sumber_dana = sumber_dana.id_jenis_sumber_dana');
		$query = $this->db->get('sumber_dana');
		return $query->result();
	}

	public function create()
	{
		$saldo_awal = $this->input->post('saldo_awal');
		$saldo_bank = $this->input->post('saldo_bank');
		$saldo_kas_tunai = $this->input->post('saldo_kas_tunai');
		$bunga_bank =$this->input->post('bunga_bank');
		$jumlah= $saldo_awal + $saldo_bank + $saldo_kas_tunai - ($bunga_bank/100*$saldo_bank);
		$data = array(
			'id_sekolah' => $this->session->id_sekolah,
			'nama_pemasukkan' => $this->input->post('nama_pemasukkan'),
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
}

/* End of file Laporan_model.php */
/* Location: ./application/models/Laporan_model.php */
