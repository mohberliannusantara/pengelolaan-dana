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

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */