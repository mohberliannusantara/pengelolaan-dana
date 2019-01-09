<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->logged_in == TRUE) {
			redirect('Welcome','refresh');
		}
	}

	public function index()
	{
		$session_data = $this->session->userdata('logged_in');

		$data['page'] = 'Sekolah';
        $data['nama_pengguna'] = $session_data['nama_pengguna'];
        $data['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];

        $userdata['email'] = $session_data['email'];
        $userdata['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];
        $userdata['nama_sekolah'] = $session_data['nama_sekolah'];

		$this->load->view('template/header', $data);
		$this->load->view('admin/index', $userdata);
		$this->load->view('template/footer');

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
			redirect('admin/pengguna','refresh');
		}

        $this->load->view('template/header', $data);
		$this->load->view('admin/createAkun', $data2);
		$this->load->view('template/footer');
	}
}
