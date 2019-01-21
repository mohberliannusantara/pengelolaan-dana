<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_model');
		$this->load->model('pengeluaran_model');
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

		$data['triwulan'] = $this->laporan_model->cetakBos04($this->session->id_sekolah,$awal,$akhir);
		$data['periode'] = date('d-m-Y',strtotime($awal)).' S/D '.date('d-m-Y',strtotime($akhir));

		$this->load->view('laporan/bos04', $data);
	}

	public function exportk3($id)
	{
		$this->load->view('laporan/k3', $data);
	}
}
