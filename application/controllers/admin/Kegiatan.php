<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('jenis_kegiatan_model');
		$this->load->library('form_validation');

		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna == 2 ) {
			redirect('beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Rencana Kegiatan Sekolah';
		$data['kegiatan'] = $this->jenis_kegiatan_model->get();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/kegiatan/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function create()
	{
		$data['page'] = 'Kegiatan';

		$this->form_validation->set_rules('nama_jenis_kegiatan', 'Nama jenis kegiatan', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->jenis_kegiatan_model->create();
			echo "<script>alert('Successfully Added'); </script>";
			redirect('admin/kegiatan','refresh');
		}

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/kegiatan/create');
		$this->load->view('admin/template/footer');
	}

	public function edit($id)
	{
		$data['page'] = 'Kegiatan';
		$data['kegiatan'] = $this->jenis_kegiatan_model->get_jenis_by_id($id);

		$this->form_validation->set_rules('nama_jenis_kegiatan', 'Nama jenis kegiatan', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			// $this->load->model('sekolah_model');
			$this->jenis_kegiatan_model->edit($id);
			echo "<script>alert('Successfully Edited'); </script>";
			redirect('admin/kegiatan','refresh');
		}

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/kegiatan/edit', $data);
		$this->load->view('admin/template/footer');
	}

	public function delete($id)
	{
		$this->jenis_kegiatan_model->delete($id);
		echo "<script>alert('Successfully Deleted'); </script>";
		redirect('admin/kegiatan','refresh');
	}
}

/* End of file Kegiatan.php */
/* Location: ./application/controllers/admin/Kegiatan.php */