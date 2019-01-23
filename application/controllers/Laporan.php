<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_model');
		$this->load->model('pengeluaran_model');
		$this->load->model('sumberdana_model');
		$this->load->model('jenis_pengeluaran_model');
		
		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna == 1 ) {
			redirect('admin/beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Laporan';

		$this->load->view('template/header', $data);
		$this->load->view('laporan/index', $data);
		$this->load->view('template/footer');
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
		$monthList = array(
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember',
		);
		$data['tahun'] = $this->input->post('tahun');
		$data['triwulan'] = $this->laporan_model->cetakBos04($this->session->id_sekolah,$awal,$akhir);
		$data['bulanAwal'] = $monthList[$monthAwal];
		$data['bulanAkhir'] = $monthList[$monthAkhir];
		$data['periode'] = $monthList[$monthAwal].' - '.$monthList[$monthAkhir];

		$this->load->view('laporan/bos04', $data);
	}

	public function exportBosK2($id)
	{
		if($this->input->post('triwulan') == 'semua'){
			$tgl = '1/1/'.$this->input->post('tahun');
			$awal = date('Y-d-m',strtotime($tgl));
			$akhir = date('Y-m-d',strtotime($awal.'+1 year -1 day'));

		}else{
			// $tgl = $this->input->post('triwulan').'/'.$this->input->post('tahun');
			$awal = date('Y-d-m',strtotime($this->input->post('tahun')));
			$akhir = date('Y-m-d',strtotime($awal.'+3 month -1 day'));
		}

		$data['triwulan'] = $this->laporan_model->cetakBosK2($this->session->id_sekolah,$awal,$akhir);
		$data['periode'] = date('d-m-Y',strtotime($awal)).' S/D '.date('d-m-Y',strtotime($akhir));

		$this->load->view('laporan/bos04', $data);
	}

	public function exportk3($id)
	{
		$tgl = '1/'.$this->input->post('bulan').'/'.$this->input->post('tahun');
		$awal = date('Y-d-m',strtotime($tgl));
		$akhir = date('Y-m-d',strtotime($awal.'+1 month -1 day'));

		$data['saldoAwal'] = $this->sumberdana_model->getJumlahTerakhir($this->session->id_sekolah);
		$data['pemasukkan'] = $this->laporan_model->cetakK3($this->session->id_sekolah,$awal,$akhir);
		$data['pengeluaran'] = $this->laporan_model->cetakBos04($this->session->id_sekolah,$awal,$akhir);

		$day = date('D', strtotime($akhir));
		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);

		$month = date("m",strtotime($akhir));
		$monthList = array(
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember',
		);

		$data['hari'] = $dayList[$day];
		$data['bulan'] = $monthList[$month];
		$data['tahun'] = $this->input->post('tahun');
		$data['akhir'] = date('d-m-Y',strtotime($akhir));
		$data['nama'] = $this->session->nama_sekolah;


		// print_r($data['pemasukkan']);
		// die();

		$this->load->view('laporan/k3', $data);
	}
}
