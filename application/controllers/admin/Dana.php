<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dana extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('sekolah_model');
		$this->load->library('form_validation');

		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna == 2 ) {
			redirect('beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Kelola Dana';
		$data['sekolah'] = $this->sekolah_model->get();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/dana/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function manage($id)
	{
		$data['page'] = 'Kelola Dana';
		$data['sekolah'] = $this->sekolah_model->get();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/dana/detail', $data);
		$this->load->view('admin/template/footer');
	}
}

/* End of file Dana.php */
/* Location: ./application/controllers/admin/Dana.php */
