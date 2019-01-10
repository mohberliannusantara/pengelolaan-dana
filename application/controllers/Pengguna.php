<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/
	function __construct()
	{
		parent::__construct();
		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna == 1 ) {
			redirect('admin/beranda','refresh');
		}
	}

	public function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['nama_pengguna'] = $session_data['nama_pengguna'];
        $data['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];
        $data['id_sekolah'] = $session_data['id_sekolah'];
        $data['email'] = $session_data['email'];

		$data['page'] = 'Beranda';

		$this->load->model('sekolah_model');
		$userdata['sekolah'] = $this->sekolah_model->get_by_id($this->session->id_sekolah);

		$this->load->model('pengguna_model');
		$userdata['pengguna'] = $this->pengguna_model->get_by_id($this->session->id_pengguna);

		$this->load->view('template/header', $data);
		$this->load->view('pengguna/index', $userdata);
		$this->load->view('template/footer');
	}
}
