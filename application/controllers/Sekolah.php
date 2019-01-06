<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

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
		$this->load->model('sekolah_model');
		$this->load->library('form_validation');
		if (!$this->session->logged_in == TRUE) {
			redirect('Welcome','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Sekolah';
		$data['sekolah'] = $this->sekolah_model->get();

		$this->load->view('template/header', $data);
		$this->load->view('sekolah/index', $data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$data['page'] = 'Sekolah';
		$this->load->view('template/header', $data);
		$this->load->view('sekolah/index');
		$this->load->view('template/footer');
	}

	public function get($id)
  {
    $data['sekolah'] = $this->sekolah_model->get_by_id($id);
		$this->load->view('sekolah/show', $data);
  }

	public function edit($id = null)
	{
		$data['page'] = 'Sekolah';
		$data['sekolah'] = $this->sekolah_model->get_by_id($id);

		$this->load->view('template/header', $data);
		$this->load->view('sekolah/edit', $data);
		$this->load->view('template/footer');
	}
}
