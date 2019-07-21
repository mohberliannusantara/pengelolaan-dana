<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('sekolah_model');
		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna == 2 ) {
			redirect('beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Beranda';

		$data['sekolah'] = $this->sekolah_model->get();
		$datauser['sdnegeri'] = count($this->sekolah_model->get_by_status('1','1'));
		$datauser['sdswasta'] = count($this->sekolah_model->get_by_status('1','2'));
		$datauser['smpnegeri'] = count($this->sekolah_model->get_by_status('1','1'));
		$datauser['smpswasta'] = count($this->sekolah_model->get_by_status('2','2'));

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/beranda/index',$datauser);
		$this->load->view('admin/template/footer');
	}
}
