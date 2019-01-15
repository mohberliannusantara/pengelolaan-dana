<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeBendahara extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->logged_in == TRUE) {
			redirect('Welcome','refresh');
		}
	}

	public function index()
	{
		$session_data = $this->session->userdata('logged_in');

		$data['page'] = 'Sekolah';
		$data['nama_pengguna'] = $session_data['nama_pengguna'];
		$data['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];
		$data['id_sekolah'] = $session_data['id_sekolah'];
		$data['email'] = $session_data['email'];

		$this->load->model('sekolah_model');
		$userdata['sekolah'] = $this->sekolah_model->get_by_id($session_data['id_sekolah']);


		// print_r($userdata['data']);
		// die();
		$this->load->view('template/header', $data);
		$this->load->view('bendahara/index', array_merge($userdata, $data));
		$this->load->view('template/footer');
	}

}
