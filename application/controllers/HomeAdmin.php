<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {

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

        $userdata['email'] = $session_data['email'];
        $userdata['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];
        $userdata['nama_sekolah'] = $session_data['nama_sekolah'];

		$this->load->view('template/header', $data);
		$this->load->view('admin/index', $userdata);
		$this->load->view('template/footer');

	}
}
