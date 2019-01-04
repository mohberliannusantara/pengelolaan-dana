<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Autentikasi_model');
	}

	function login()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		// print_r($email);
		// print_r($password);
		// die();

		$cek = $this->Autentikasi_model->login($email,$password);
		if ($cek->num_rows() == 1) {

			$value = $cek->row();

			$userdata = array(
				'nama_pengguna' => $value->nama_pengguna,
				'email' => $value->email,
				'id_pengguna' => $value->id_pengguna,
				// 'nama_sekolah' => $value->nama_sekolah,
				// 'nama_jenis_pengguna' => $value->nama_jenis_pengguna,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($userdata);
			redirect('Beranda','refresh');
		} else {
			redirect('Welcome');
		}
	}

	function logout()
	{
		$userdata = array('rayon','logged_in');
		$this->session->unset_userdata($userdata);
		redirect('Welcome','refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
