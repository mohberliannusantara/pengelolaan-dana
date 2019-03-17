<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggunaan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
		$this->load->model('kegiatan_model');
		$this->load->model('jenis_kegiatan_model');

		$this->load->library('form_validation');

		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna == 1 ) {
			redirect('admin/beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Penggunaan Dana';
		$data['kegiatan'] = $this->jenis_kegiatan_model->get();
		// $data['jumlah'] = $this->jenis_kegiatan_model->sumKegiatan($id);

		$this->load->view('template/header', $data);
		$this->load->view('penggunaan/index', $data);
		$this->load->view('template/footer');
	}

	public function list($id)
	{
		$data['page'] = 'Penggunaan Dana';
		$data['kegiatan'] = $this->kegiatan_model->get_kegiatan($id);
		$data['id'] = $id;

		$this->load->view('template/header', $data);
		$this->load->view('penggunaan/detail', $data);
		$this->load->view('template/footer');
	}

	public function listKegiatan($id, $id2)
	{
		$data['page'] = 'Penggunaan Dana';
		$data['kegiatan'] = $this->kegiatan_model->get_kegiatan($id);
		$data['id'] = $id;

		$this->load->view('template/header', $data);
		$this->load->view('penggunaan/detail', $data);
		$this->load->view('template/footer');
	}


}

/* End of file Penggunaan.php */
/* Location: ./application/controllers/Penggunaan.php */