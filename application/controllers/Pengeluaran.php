<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {

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
		$this->load->model('pengeluaran_model');
		$this->load->model('jenis_pengeluaran_model');
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
		$data['page'] = 'Pengeluaran';
		$data['pengeluaran'] = $this->pengeluaran_model->get($this->session->id_sekolah);
		$data['pengguna'] = $this->pengguna_model->get_by_id($this->session->id_pengguna);

		$this->load->view('template/header', $data);
		$this->load->view('pengeluaran/index', $data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$data['page'] = 'Pengeluaran';
		$data['pengguna'] = $this->pengguna_model->get_by_id($this->session->id_pengguna);
		$data['jenis_pengeluaran'] = $this->jenis_pengeluaran_model->get();

		$this->form_validation->set_rules('npsn', 'NPSN', 'trim|required');
		$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'trim|required');
		$this->form_validation->set_rules('id_jenis_sekolah', 'Jenis Sekolah', 'trim|required');
		$this->form_validation->set_rules('id_status_sekolah', 'Status Sekolah', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
		$this->form_validation->set_rules('kepala_sekolah', 'Kepala Sekolah', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->sekolah_model->create();
			echo "<script>alert('Successfully Added'); </script>";
			redirect('pengeluaran','refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('pengeluaran/create', $data);
		$this->load->view('template/footer');
	}

}
