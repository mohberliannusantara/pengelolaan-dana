<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
		$this->load->model('kegiatan_model');
		$this->load->model('jenis_kegiatan_model');

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
		$data['kegiatan'] = $this->jenis_kegiatan_model->get();

		$this->load->view('template/header', $data);
		$this->load->view('kegiatan/index', $data);
		$this->load->view('template/footer');
	}

	public function list($id)
	{
		$data['page'] = 'Kegiatan';
		$data['kegiatan'] = $this->kegiatan_model->get_kegiatan($id);
		$data['id'] = $id;

		$this->load->view('template/header', $data);
		$this->load->view('kegiatan/detail', $data);
		$this->load->view('template/footer');
	}

	public function view($id)
	{
		$data['detail_kegiatan'] = $this->kegiatan_model->get_detail_kegiatan($id);
		$this->load->view('kegiatan/show', $data);
	}

	public function create($id)
	{
		$data['page'] = 'Kegiatan';
		$data['id'] = $id;

		$this->form_validation->set_rules('nama_kegiatan', 'nama kegiatan', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->kegiatan_model->create($id, $this->session->id_sekolah);
			echo "<script>alert('Successfully Added'); </script>";
			redirect('kegiatan/list/' . $id ,'refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('kegiatan/create', $data);
		$this->load->view('template/footer');
	}

	public function edit($id, $id2)
	{
		$data['page'] = 'Kegiatan';
		$data['kegiatan'] = $this->kegiatan_model->get_by_id($id);
		$data['id'] = $id2;

		$this->form_validation->set_rules('nama_kegiatan', 'nama kegiatan', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

		if ($this->form_validation->run()==FALSE) {
			echo validation_errors();
		} else {
			$this->kegiatan_model->edit($id);
			echo "<script>alert('Successfully Updated'); </script>";
			redirect('kegiatan/list/' . $id2 ,'refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('kegiatan/edit', $data);
		$this->load->view('template/footer');
	}

	public function delete($id, $id2)
	{
		$this->kegiatan_model->delete($id);
		echo "<script>alert('Successfully Deleted'); </script>";
		redirect('kegiatan/list/'. $id2,'refresh');
	}
}
