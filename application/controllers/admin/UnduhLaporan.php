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
		$tgl = $this->input->post('triwulan').'/'.$this->input->post('tahun');

		$awal = date('Y-d-m',strtotime($tgl));
		$akhir = date('Y-m-d',strtotime($awal.'+3 month -1 day'));
		// $id = $this->input->post('id_sekolah');

		$data['sekolah'] = $this->sekolah_model->get();
		$data['namasekolah'] = $this->sekolah_model->get_by_id($id);
		$data['triwulan'] = $this->pengeluaran_model->cetakPengeluaran($id,$awal,$akhir);
		$data['periode'] = date('d-m-Y',strtotime($awal)).' S/D '.date('d-m-Y',strtotime($akhir));

		$this->load->view('admin/unduh/exportBos04', $data);
	}

public function exportK3($id)
	{
		
		$tgl = '1/'.$this->input->post('bulan').'/'.$this->input->post('tahun');
		$awal = date('Y-d-m',strtotime($tgl));
		$akhir = date('Y-m-d',strtotime($awal.'+1 month -1 day'));

		$data['saldoAwal'] = $this->sumberdana_model->getJumlahTerakhir($id);
		$data['namasekolah'] = $this->sekolah_model->get_by_id($id);
		$data['pemasukkan'] = $this->laporan_model->cetakK3($id,$awal,$akhir);
		$data['pengeluaran'] = $this->laporan_model->cetakBos04($id,$awal,$akhir);

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

		$this->load->view('admin/unduh/exportK3', $data);
	}
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */