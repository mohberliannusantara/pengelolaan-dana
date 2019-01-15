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

		$this->load->view('template/header', $data);
		$this->load->view('pengeluaran/index', $data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$data['page'] = 'Pengeluaran';
		$data['jenis_pengeluaran'] = $this->jenis_pengeluaran_model->get();

		$this->form_validation->set_rules('nama_pengeluaran', 'nama pengeluaran', 'trim|required');
		$this->form_validation->set_rules('jenis_pengeluaran', 'jenis pengeluaran', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->pengeluaran_model->create();
			echo "<script>alert('Successfully Added'); </script>";
			redirect('pengeluaran','refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('pengeluaran/create', $data);
		$this->load->view('template/footer');
	}

	public function edit($id)
	{
		$data['page'] = 'Pengeluaran';
		$data['jenis_pengeluaran'] = $this->jenis_pengeluaran_model->get();
		$data['pengeluaran'] = $this->pengeluaran_model->getPengeluaranById($id);

		// print_r($data['pengeluaran']);
		// die();

		$this->form_validation->set_rules('nama_pengeluaran', 'nama pengeluaran', 'trim|required');
		$this->form_validation->set_rules('jenis_pengeluaran', 'jenis pengeluaran', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->pengeluaran_model->edit($id);
			echo "<script>alert('Successfully Added'); </script>";
			redirect('pengeluaran','refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('pengeluaran/edit', $data);
		$this->load->view('template/footer');	
	}

	public function delete($id)
	{
		$this->pengeluaran_model->delete($id);
		redirect('pengeluaran','refresh');
	}
}
