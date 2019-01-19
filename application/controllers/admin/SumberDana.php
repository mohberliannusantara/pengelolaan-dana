<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SumberDana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('sekolah_model');
		$this->load->model('sumberdana_model');

		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna == 2 ) {
			redirect('beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Sumber Dana';
		$data['sumberdana'] = $this->sumberdana_model->get();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/sumberdana/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function create()
	{
		$data['page'] = 'Sumber Dana';
		$data2['sekolah'] = $this->sekolah_model->get();
		$data2['jenisdana'] = $this->sumberdana_model->getJenisSumberDana();

		$this->form_validation->set_rules('id_sekolah', 'Sekolah', 'trim|required');
		$this->form_validation->set_rules('saldo_awal', 'Saldo Awal', 'trim|required');
		$this->form_validation->set_rules('saldo_bank', 'Saldo Bank', 'trim|required');
		$this->form_validation->set_rules('bunga_bank', 'Bunga Bank', 'trim|required');
		$this->form_validation->set_rules('saldo_kas_tunai', 'Saldo Kas Tunai', 'trim|required');
		$this->form_validation->set_rules('id_jenis_sumber_dana', 'Jenis Sumber Dana', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');


		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			// $this->load->model('sekolah_model');
			$this->sumberdana_model->create();
			echo "<script>alert('Successfully Added'); </script>";
			redirect('admin/SumberDana','refresh');
		}

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/sumberdana/create', $data2);
		$this->load->view('admin/template/footer');
	}

	function edit($id)
	{
		$data['page'] = 'Sumber Dana';
		$data2['sumberdana'] = $this->sumberdana_model->get_by_id($id);
		$data2['jenisdana'] = $this->sumberdana_model->getJenisSumberDana();

		$this->form_validation->set_rules('id_sekolah', 'Sekolah', 'trim|required');
		$this->form_validation->set_rules('saldo_awal', 'Saldo Awal', 'trim|required');
		$this->form_validation->set_rules('saldo_bank', 'Saldo Bank', 'trim|required');
		$this->form_validation->set_rules('bunga_bank', 'Bunga Bank', 'trim|required');
		$this->form_validation->set_rules('saldo_kas_tunai', 'Saldo Kas Tunai', 'trim|required');
		$this->form_validation->set_rules('id_jenis_sumber_dana', 'Jenis Sumber Dana', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');


		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			// $this->load->model('sekolah_model');
			$this->sumberdana_model->edit($id);
			echo "<script>alert('Successfully Added'); </script>";
			redirect('admin/SumberDana','refresh');
		}

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/sumberdana/edit', $data2);
		$this->load->view('admin/template/footer');
	}

}

/* End of file sumberDana.php */
/* Location: ./application/controllers/sumberDana.php */