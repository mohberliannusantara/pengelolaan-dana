<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('sekolah_model');
		$this->load->model('pengguna_model');
		$this->load->library('form_validation');

		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna != 1 ) {
			redirect('beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Pengguna';
		$data['pengguna'] = $this->pengguna_model->get();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pengguna/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function get($id)
	{
		$data['pengguna'] = $this->pengguna_model->get_by_id($id);
		$this->load->view('admin/pengguna/show', $data);
	}

	public function create()
	{
		$data['page'] = 'Pengguna';
		$data2['sekolah'] = $this->sekolah_model->get();

		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('id_sekolah', 'Asal Sekolah', 'trim|required');


		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			// $this->load->model('sekolah_model');
			$this->sekolah_model->createAkun();
			echo "<script>alert('Successfully Added'); </script>";
			redirect('HomeAdmin','refresh');
		}

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pengguna/create', $data2);
		$this->load->view('admin/template/footer');
	}

	public function edit($id = null)
	{
		$data['page'] = 'Pengguna';
		$data['pengguna'] = $this->pengguna_model->get_by_id($id);

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->pengguna_model->edit($id);
			echo "<script>alert('Successfully Updated'); </script>";
			redirect('admin/pengguna','refresh');

		}

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pengguna/edit', $data);
		$this->load->view('admin/template/footer');
	}

	public function export()
	{
		$data['pengguna'] = $this->pengguna_model->get();
		$this->load->view('admin/pengguna/exportExcel', $data);

	}

	public function resetPass($username)
	{
		$this->pengguna_model->resetPass($username);
		echo "<script>alert('Successfully Updated'); </script>";
		redirect('admin/pengguna','refresh');

	}
}
