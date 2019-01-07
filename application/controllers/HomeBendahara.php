<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeBendahara extends CI_Controller {

	public function index()
	{
		$data['page'] = 'Sekolah';
		$session_data = $this->session->userdata('logged_in');
                $userdata['email'] = $session_data['email'];
                $userdata['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];
		$this->load->view('template/header', $data);
		$this->load->view('bendahara/index', $userdata);
		$this->load->view('template/footer');
	}

}

/* End of file HomeBendahara.php */
/* Location: ./application/controllers/HomeBendahara.php */