<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisSumberDana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('sekolah_model');
		$this->load->model('sumberdana_model');

		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna == 2 ) {
			redirect('beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Sumber Dana';
		$data['jenissumberdana'] = $this->sumberdana_model->getJenisSumberDana();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/jenissumberdana/index2', $data);
		$this->load->view('admin/template/footer');
	}

	public function create()
	{
		$data['page'] = 'Sumber Dana';
		$data2['sekolah'] = $this->sekolah_model->get();

		$this->form_validation->set_rules('nama_jenis_sumber_dana', 'Nama Jenis Sumber Dana', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->sumberdana_model->createJenis();
			echo "<script>alert('Successfully Added'); </script>";
			redirect('admin/jenissumberdana','refresh');
		}

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/jenissumberdana/create', $data2);
		$this->load->view('admin/template/footer');
	}

	function edit($id)
	{
		$data['page'] = 'Sumber Dana';
		$data2['jenissumberdana'] = $this->sumberdana_model->get_jenis_by_id($id);

		$this->form_validation->set_rules('nama_jenis_sumber_dana', 'Nama Jenis Sumber Dana', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			// $this->load->model('sekolah_model');
			$this->sumberdana_model->editJenis($id);
			echo "<script>alert('Successfully Edited'); </script>";
			redirect('admin/jenissumberdana','refresh');
		}

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/jenissumberdana/edit', $data2);
		$this->load->view('admin/template/footer');
	}

	public function delete($id)
	{
		$this->sumberdana_model->deleteJenis($id);
		echo "<script>alert('Successfully Deleted'); </script>";
		redirect('admin/jenissumberdana','refresh');
	}

	public function get($id)
	{
		$data['sumberdana'] = $this->sumberdana_model->get_by_id($id);
		$this->load->view('admin/jenissumberdana/show', $data);
	}

}

/* End of file sumberDana.php */
/* Location: ./application/controllers/sumberDana.php */
