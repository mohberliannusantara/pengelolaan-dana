<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_kegiatan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('detail_kegiatan_model');
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
		redirect('kegiatan','refresh');
	}

	public function create($id, $id2)
	{
		$data['page'] = 'Kegiatan';
		$data['id'] = $id;

		$this->form_validation->set_rules('nama_kegiatan', 'nama kegiatan', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->detail_kegiatan_model->create($id);
			echo "<script>alert('Successfully Added'); </script>";
			redirect('kegiatan/list/' . $id2 ,'refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('detail_kegiatan/create', $data);
		$this->load->view('template/footer');
	}

	public function edit($id)
	{
		$data['page'] = 'Kegiatan';
		$data['kegiatan'] = $this->detail_kegiatan_model->get_by_id($id);

		$this->form_validation->set_rules('nama_detail_kegiatan', 'nama detail kegiatan', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->detail_kegiatan_model->edit($id);
			echo "<script>alert('Successfully Updated'); </script>";
			redirect('kegiatan','refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('detail_kegiatan/edit', $data);
		$this->load->view('template/footer');
	}

	public function delete($id)
	{
		$this->detail_kegiatan_model->delete($id);
		echo "<script>alert('Successfully Deleted'); </script>";
		redirect('kegiatan','refresh');
	}
}
