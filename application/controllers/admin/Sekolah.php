<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/

	function __construct()
	{
		parent::__construct();
		$this->load->model('sekolah_model');
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
		$data['page'] = 'Sekolah';
		$session_data = $this->session->userdata('logged_in');
		$data['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];
		$data['nama_pengguna'] = $session_data['nama_pengguna'];
		$data['sekolah'] = $this->sekolah_model->get();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/sekolah/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function create()
	{
		$session_data = $this->session->userdata('logged_in');

		$data['page'] = 'Sekolah';
		$data['id_sekolah'] = $session_data['id_sekolah'];
		$data['nama_pengguna'] = $session_data['nama_pengguna'];
		$data['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];

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

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/sekolah/create');
		$this->load->view('admin/template/footer');
	}

	public function get($id)
	{
		$data['sekolah'] = $this->sekolah_model->get_by_id($id);
		$this->load->view('sekolah/show', $data);
	}

	public function edit($id = null)
	{
		$session_data = $this->session->userdata('logged_in');
		$data['page'] = 'Sekolah';
		$data['nama_pengguna'] = $session_data['nama_pengguna'];
		$data['id_sekolah'] = $session_data['id_sekolah'];
		$data['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];
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
