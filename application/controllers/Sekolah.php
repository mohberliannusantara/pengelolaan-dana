<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('sekolah_model');
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
		$data['page'] = 'Sekolah';
		$data['sekolah'] = $this->sekolah_model->get();

		$this->load->view('template/header', $data);
		$this->load->view('sekolah/index', $data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$data['page'] = 'Sekolah';

		$this->form_validation->set_rules('npsn', 'NPSN', 'trim|required');
		$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
		$this->form_validation->set_rules('id_jenis_sekolah', 'Jenis Sekolah', 'trim|required');
		$this->form_validation->set_rules('id_status_sekolah', 'Status Sekolah', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->sekolah_model->create();
			echo "<script>alert('Successfully Added'); </script>";
			redirect('sekolah','refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('sekolah/create');
		$this->load->view('template/footer');
	}

	public function get($id)
	{
		$data['sekolah'] = $this->sekolah_model->get_by_id($id);
		$this->load->view('sekolah/show', $data);
	}

	public function edit($id = null)
	{
		$data['page'] = 'Sekolah';
		$data['sekolah'] = $this->sekolah_model->get_by_id($id);

		$this->form_validation->set_rules('npsn', 'NPSN', 'trim|required');
		$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
		$this->form_validation->set_rules('id_jenis_sekolah', 'Jenis Sekolah', 'trim|required');
		$this->form_validation->set_rules('id_status_sekolah', 'Status Sekolah', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->sekolah_model->edit($id);
			echo "<script>alert('Successfully Updated'); </script>";
			if ($data['nama_jenis_pengguna'] == 'bendahara_sekolah') {
				redirect('HomeBendahara','refresh');
			}else{
				redirect('Sekolah','refresh');
			}
		}

		$this->load->view('template/header', $data);
		$this->load->view('sekolah/edit', $data);
		$this->load->view('template/footer');
	}
}
