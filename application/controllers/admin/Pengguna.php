<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

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

	public function create()
	{
		$session_data = $this->session->userdata('logged_in');

		$data['page'] = 'Sekolah';
		$data['id_sekolah'] = $session_data['id_sekolah'];
		$data['nama_pengguna'] = $session_data['nama_pengguna'];
		$data['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];

		$this->load->model('sekolah_model');
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
}
