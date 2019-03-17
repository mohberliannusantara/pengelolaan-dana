<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerimaan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('jenis_rencana_penerimaan_k1_model');
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
		$data['page'] = 'Rencana Penerimaan Sekolah';
		$data['penerimaan'] = $this->jenis_rencana_penerimaan_k1_model->get();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/penerimaan/index', $data);
		$this->load->view('admin/template/footer');
	}

	public function create()
	{
		$data['page'] = 'Rencana Penerimaan Sekolah';

		$this->form_validation->set_rules('nama_jenis_penerimaan', 'Nama jenis penerimaan', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->jenis_rencana_penerimaan_k1_model->create();
			echo "<script>alert('Successfully Added'); </script>";
			redirect('admin/penerimaan','refresh');
		}

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/penerimaan/create');
		$this->load->view('admin/template/footer');
	}

	public function edit($id)
	{
		$data['page'] = 'Rencana Penerimaan Sekolah';
		$data['penerimaan'] = $this->jenis_rencana_penerimaan_k1_model->get_jenis_by_id($id);

		$this->form_validation->set_rules('nama_jenis_penerimaan', 'Nama jenis penerimaan', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			// $this->load->model('sekolah_model');
			$this->jenis_rencana_penerimaan_k1_model->edit($id);
			echo "<script>alert('Successfully Edited'); </script>";
			redirect('admin/penerimaan','refresh');
		}

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/penerimaan/edit', $data);
		$this->load->view('admin/template/footer');
	}

	public function delete($id)
	{
		$this->jenis_rencana_penerimaan_k1_model->delete($id);
		echo "<script>alert('Successfully Deleted'); </script>";
		redirect('admin/penerimaan','refresh');
	}

}

/* End of file Penerimaan.php */
/* Location: ./application/controllers/admin/Penerimaan.php */