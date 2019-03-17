<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RencanaPenerimaanK1 extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('jenis_rencana_penerimaan_k1_model');

		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna == 1 ) {
			redirect('admin/beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Rencana Kegiatan dan Anggaran Sekolah (RKAS) K1';

		$data['jenis'] = $this->jenis_rencana_penerimaan_k1_model->get();
		$this->load->view('template/header', $data);
		$this->load->view('rencana_kegiatanK1/index', $data);
		$this->load->view('template/footer');
	}

	public function list($id)
	{
		$data['page'] = 'Rencana Kegiatan dan Anggaran Sekolah (RKAS) K1';
		$data['penerimaan'] = $this->jenis_rencana_penerimaan_k1_model->get_penerimaan($id);
		$data['id'] = $id;

		$this->load->view('template/header', $data);
		$this->load->view('rencana_kegiatanK1/detail', $data);
		$this->load->view('template/footer');
	}

	public function createSub($id)
	{
		$data['page'] = 'Rencana Kegiatan dan Anggaran Sekolah (RKAS) K1';
		$data['id'] = $id;
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->jenis_rencana_penerimaan_k1_model->createSub($id);
			echo "<script>alert('Successfully Added'); </script>";
			redirect('RencanaPenerimaanK1','refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('rencana_KegiatanK1/createSub', $data);
		$this->load->view('template/footer');
	}

	public function view($id)
	{
		$data['detail_penerimaan'] = $this->jenis_rencana_penerimaan_k1_model->get_detail_penerimaan($id);
		$this->load->view('rencana_kegiatanK1/show', $data);
	}

	public function editSub($id)
	{
		$data['page'] = 'Rencana Kegiatan dan Anggaran Sekolah (RKAS) K1';
		$data['penerimaan'] = $this->jenis_rencana_penerimaan_k1_model->get_by_id($id);

		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->jenis_rencana_penerimaan_k1_model->editSub($id);
			echo "<script>alert('Successfully Updated'); </script>";
			redirect('RencanaPenerimaanK1','refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('rencana_kegiatanK1/editSub', $data);
		$this->load->view('template/footer');
	}

	public function deleteSub($id)
	{
		$this->jenis_rencana_penerimaan_k1_model->deleteSub($id);
		echo "<script>alert('Successfully Deleted'); </script>";
		redirect('RencanaPenerimaanK1','refresh');
	}
}

/* End of file rencanaKegiatanK1.php */
/* Location: ./application/controllers/rencanaKegiatanK1.php */