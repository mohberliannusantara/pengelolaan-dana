<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
		$this->load->model('kegiatan_model');
		$this->load->model('jenis_kegiatan_model');
		// $this->load->model('detail_kegiatan_model');

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
		$data['page'] = 'Kegiatan';
		$data['pengguna'] = $this->pengguna_model->get_by_id($this->session->id_pengguna);
		$data['kegiatan'] = $this->kegiatan_model->get();

		$this->load->view('template/header', $data);
		$this->load->view('kegiatan/index', $data);
		$this->load->view('template/footer');
	}

	public function list($id)
	{
		$data['page'] = 'Kegiatan';
		$data['kegiatan'] = $this->kegiatan_model->get_kegiatan($id);

		$this->load->view('template/header', $data);
		$this->load->view('kegiatan/detail', $data);
		$this->load->view('template/footer');
	}

	public function view($id)
	{
		$data['page'] = 'Kegiatan';
		$data['kegiatan'] = $this->kegiatan_model->get_detail_kegiatan($id);

		$this->load->view('kegiatan/show', $data);
	}

	public function create()
	{
		$data['page'] = 'Kegiatan';
		$this->form_validation->set_rules('nama_pengeluaran', 'nama pengeluaran', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->pengeluaran_model->create($id, $this->session->id_sekolah);
			echo "<script>alert('Successfully Added'); </script>";
			redirect('kegiatan','refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('kegiatan/create');
		$this->load->view('template/footer');
	}

}
