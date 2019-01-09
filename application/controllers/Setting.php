<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna == 1 ) {
			redirect('admin/beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Beranda';
		$this->load->view('template/header', $data);
		$this->load->view('setting/index');
		$this->load->view('template/footer');
	}

	public function editSekolah($id)
	{
		$session_data = $this->session->userdata('logged_in');
		$data['page'] = 'Sekolah';
		$data['nama_pengguna'] = $session_data['nama_pengguna'];
		$data['id_sekolah'] = $session_data['id_sekolah'];
		$data['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];
		$this->load->model('sekolah_model');
		$data['sekolah'] = $this->sekolah_model->get_by_id($id);

		$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
		$this->form_validation->set_rules('id_jenis_sekolah', 'Jenis Sekolah', 'trim|required');
		$this->form_validation->set_rules('id_status_sekolah', 'Status Sekolah', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
		$this->form_validation->set_rules('kepala_sekolah', 'Kepala Sekolah', 'trim|required');


		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->sekolah_model->edit($id);
			echo "<script>alert('Successfully Updated'); </script>";
			redirect('pengguna','refresh');
			
		}

		$this->load->view('template/header', $data);
		$this->load->view('setting/editSekolah', $data);
		$this->load->view('template/footer');
	}

	public function editPengguna($id)
	{
		$session_data = $this->session->userdata('logged_in');
		$data['page'] = 'Sekolah';
		$data['nama_pengguna'] = $session_data['nama_pengguna'];
		$data['id_sekolah'] = $session_data['id_sekolah'];
		$data['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];
		$this->load->model('pengguna_model');
		$data['sekolah'] = $this->pengguna_model->get_by_id($id);

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');


		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->pengguna_model->edit($id);
			$this->session->unset_userdata($session_data);
			echo "<script>alert('Successfully Updated'); </script>";
			$session_data = $this->session->userdata('logged_in');
			redirect('pengguna','refresh');
			
		}

		$this->load->view('template/header', $data);
		$this->load->view('setting/editPengguna', $data);
		$this->load->view('template/footer');	
	}

}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */