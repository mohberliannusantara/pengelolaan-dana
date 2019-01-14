<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('kegiatan_model');
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
		$data['page'] = 'Kegiatan';
		$data['kegiatan'] = $this->kegiatan_model->get();

		$this->load->view('template/header', $data);
		$this->load->view('kegiatan/index', $data);
		$this->load->view('template/footer');
	}
}
