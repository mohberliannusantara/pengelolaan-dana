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
		$this->load->model('sekolah_model');
		$this->load->model('pengguna_model');
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

		$this->load->model('sekolah_model');
		$userdata['sekolah'] = $this->sekolah_model->get_by_id($this->session->id_sekolah);

		$this->load->model('pengguna_model');
		$userdata['pengguna'] = $this->pengguna_model->get_by_id($this->session->id_pengguna);

		$this->load->view('template/header', array_merge($data,$userdata));
		$this->load->view('pengguna/index', $userdata);
		$this->load->view('template/footer');
	}

	public function edit($id, $id2)
	{
		$data['page'] = 'Pengguna';
		$data['sekolah'] = $this->sekolah_model->get_by_id($id);
		$data['pengguna'] = $this->pengguna_model->get_by_id($id2);


		$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
		$this->form_validation->set_rules('id_jenis_sekolah', 'Jenis Sekolah', 'trim|required');
		$this->form_validation->set_rules('id_status_sekolah', 'Status Sekolah', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
		$this->form_validation->set_rules('kepala_sekolah', 'Kepala Sekolah', 'trim|required');
		$this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');


		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->sekolah_model->edit($id);
			$this->pengguna_model->edit($id2);
			echo "<script>alert('Successfully Updated'); </script>";
			redirect('pengguna','refresh');
			
		}

		$this->load->view('template/header', $data);
		$this->load->view('pengguna/edit', $data);
		$this->load->view('template/footer');
	}

	public function gantiPass($id)
	{
		$data['page'] = 'Pengguna';
		$data['pengguna'] = $this->pengguna_model->get_by_id($id);

		// $this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password Lama', 'trim|required');
		$this->form_validation->set_rules('password2', 'Password Baru', 'trim|required');
		$this->form_validation->set_rules('password3', 'Konfirmasi Password Baru', 'trim|required');
		
		

		if($this->pengguna_model->get_by_id($id)->password != md5($this->input->post('password'))){
			echo "<script>alert('Password lama yang dimasukkan salah'); </script>";
			redirect('','refresh');
		}else if ($this->input->post('password2') != $this->input->post('password3')){
			echo "<script>alert('Password baru dan Konfirmasi password tidak sesuai!'); </script>";
			redirect('','refresh');
		}else{
			if ($this->form_validation->run()==FALSE){
				echo validation_errors();
			}else{
				$this->pengguna_model->gantiPass($id);
				echo "<script>alert('Successfully Updated'); </script>";
				redirect('pengguna','refresh');
			}	
		}

		$this->load->view('template/header', $data);
		$this->load->view('beranda/index', $data);
		$this->load->view('template/footer');
	}

}
