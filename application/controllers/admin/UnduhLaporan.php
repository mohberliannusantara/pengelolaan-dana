<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UnduhLaporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
		$this->load->model('pengeluaran_model');
		$this->load->model('sekolah_model');
		$this->load->model('jenis_pengeluaran_model');
		$this->load->library('form_validation');
		$this->load->model('laporan_model');
		$this->load->model('sumberdana_model');
		// if (!$this->session->logged_in == TRUE) {
		// 	redirect('welcome','refresh');
		// }
		// if ($this->session->id_jenis_pengguna == 1 ) {
		// 	redirect('admin/beranda','refresh');
		// }
	}

	public function index()
	{
		$data['page'] = 'Kelola Dana';
		$data['sekolah'] = $this->sekolah_model->get();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/dana/detail', $data);
		$this->load->view('admin/template/footer');
	}

	public function exportBos04($id)
	{
		if($this->input->post('triwulan') == 'semua'){
			$tgl = '1/1/'.$this->input->post('tahun');
			$awal = date('Y-d-m',strtotime($tgl));
			$akhir = date('Y-m-d',strtotime($awal.'+1 year -1 day'));

		}else{
			$tgl = $this->input->post('triwulan').'/'.$this->input->post('tahun');
			$awal = date('Y-d-m',strtotime($tgl));
			$akhir = date('Y-m-d',strtotime($awal.'+3 month -1 day'));
		}
		$monthAwal = date("m",strtotime($awal));
		$monthAkhir = date("m",strtotime($akhir));
	
		$monthList = array(	'01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April',
							'05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus',
							'09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');

		$data['sekolah'] = $this->sekolah_model->get();
		$data['namasekolah'] = $this->sekolah_model->get_by_id($id);
		$data['triwulan'] = $this->laporan_model->cetakBos04($id,$awal,$akhir);
		$data['bulanAwal'] = $monthList[$monthAwal];
		$data['bulanAkhir'] = $monthList[$monthAkhir];
		$data['periode'] = $monthList[$monthAwal].' - '.$monthList[$monthAkhir]." ".$this->input->post('tahun');

		$this->load->view('admin/unduh/bos04', $data);
	}

	public function lhtBos04($id)
	{
		if($this->input->post('triwulan') == 'semua'){
			$tgl = '1/1/'.$this->input->post('tahun');
			$awal = date('Y-d-m',strtotime($tgl));
			$akhir = date('Y-m-d',strtotime($awal.'+1 year -1 day'));

		}else{
			$tgl = $this->input->post('triwulan').'/'.$this->input->post('tahun');
			$awal = date('Y-d-m',strtotime($tgl));
			$akhir = date('Y-m-d',strtotime($awal.'+3 month -1 day'));
		}
		$monthAwal = date("m",strtotime($awal));
		$monthAkhir = date("m",strtotime($akhir));
	
		$monthList = array(	'01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April',
							'05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus',
							'09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');

		$data['sekolah'] = $this->sekolah_model->get();
		$data['namasekolah'] = $this->sekolah_model->get_by_id($id);
		$data['triwulan'] = $this->laporan_model->cetakBos04($id,$awal,$akhir);
		$data['bulanAwal'] = $monthList[$monthAwal];
		$data['bulanAkhir'] = $monthList[$monthAkhir];
		$data['periode'] = $monthList[$monthAwal].' - '.$monthList[$monthAkhir]." ".$this->input->post('tahun');

		$this->load->view('admin/unduh/lhtbos04', $data);
	}

public function exportK3($id)
	{
		if($this->input->post('triwulan') == 'semua'){
			$tgl = '1/1/'.$this->input->post('tahun');
			$awal = date('Y-d-m',strtotime($tgl));
			$akhir = date('Y-m-d',strtotime($awal.'+1 year -1 day'));

		}else{
			$tgl = $this->input->post('triwulan').'/'.$this->input->post('tahun');
			$awal = date('Y-d-m',strtotime($tgl));
			$akhir = date('Y-m-d',strtotime($awal.'+3 month -1 day'));
		}
		$day = date('D', strtotime($akhir));
		$monthAwal = date("m",strtotime($awal));
		$monthAkhir = date("m",strtotime($akhir));

		$dayList = array(	'Sun' => 'Minggu', 'Mon' => 'Senin', 'Tue' => 'Selasa', 'Wed' => 'Rabu', 
							'Thu' => 'Kamis', 'Fri' => 'Jumat', 'Sat' => 'Sabtu');
		$monthList = array(	'01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April',
							'05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus',
							'09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');


		$data['namasekolah'] = $this->sekolah_model->get_by_id($id);
		$data['pemasukkan'] = $this->laporan_model->cetakK3($id,$awal,$akhir);
		$data['pengeluaran'] = $this->laporan_model->cetakBos04($id,$awal,$akhir);
		$data['saldoAwal'] = $this->sumberdana_model->getJumlahTerakhir($id);
		$data['sumMasuk'] = $this->laporan_model->sumMasuk($id,$awal,$akhir);
		$data['sumKeluar'] = $this->laporan_model->sumKeluar($id,$awal,$akhir);
		$data['hari'] = $dayList[$day];
		$data['tahun'] = $this->input->post('tahun');
		$data['akhir'] = date('d-m-Y',strtotime($akhir));
		$data['bulanAwal'] = $monthList[$monthAwal];
		$data['bulanAkhir'] = $monthList[$monthAkhir];
		// print_r($data['pemasukkan']);
		// die();

		$this->load->view('admin/unduh/k3', $data);
	}

public function lhtK3($id)
	{
		if($this->input->post('triwulan') == 'semua'){
			$tgl = '1/1/'.$this->input->post('tahun');
			$awal = date('Y-d-m',strtotime($tgl));
			$akhir = date('Y-m-d',strtotime($awal.'+1 year -1 day'));

		}else{
			$tgl = $this->input->post('triwulan').'/'.$this->input->post('tahun');
			$awal = date('Y-d-m',strtotime($tgl));
			$akhir = date('Y-m-d',strtotime($awal.'+3 month -1 day'));
		}
		$day = date('D', strtotime($akhir));
		$monthAwal = date("m",strtotime($awal));
		$monthAkhir = date("m",strtotime($akhir));

		$dayList = array(	'Sun' => 'Minggu', 'Mon' => 'Senin', 'Tue' => 'Selasa', 'Wed' => 'Rabu', 
							'Thu' => 'Kamis', 'Fri' => 'Jumat', 'Sat' => 'Sabtu');
		$monthList = array(	'01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April',
							'05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus',
							'09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');


		$data['namasekolah'] = $this->sekolah_model->get_by_id($id);
		$data['pemasukkan'] = $this->laporan_model->cetakK3($id,$awal,$akhir);
		$data['pengeluaran'] = $this->laporan_model->cetakBos04($id,$awal,$akhir);
		$data['saldoAwal'] = $this->sumberdana_model->getJumlahTerakhir($id);
		$data['sumMasuk'] = $this->laporan_model->sumMasuk($id,$awal,$akhir);
		$data['sumKeluar'] = $this->laporan_model->sumKeluar($id,$awal,$akhir);
		$data['hari'] = $dayList[$day];
		$data['tahun'] = $this->input->post('tahun');
		$data['akhir'] = date('d-m-Y',strtotime($akhir));
		$data['bulanAwal'] = $monthList[$monthAwal];
		$data['bulanAkhir'] = $monthList[$monthAkhir];
		// print_r($data['pemasukkan']);
		// die();

		$this->load->view('admin/unduh/lhtk3', $data);
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */