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
		$this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

		$cek = $this->Autentikasi_model->login($email,$password);
		if ($cek->num_rows() == 1) {

			$value = $cek->row();

			$userdata = array(
				'nama_pengguna' => $value->nama_pengguna,
				'email' => $value->email,
				'id_pengguna' => $value->id_pengguna,
				// 'nama_sekolah' => $value->nama_sekolah,
				'nama_jenis_pengguna' => $value->nama_jenis_pengguna,
				// 'logged_in' => TRUE
			);
			// print_r($userdata);
			// die();

			$this->session->set_userdata('logged_in', $userdata);
		}

		if ($this->form_validation->run() == FALSE) {
			echo validation_errors();
		} else {
				$session_data = $this->session->userdata('logged_in');
                $userdata['email'] = $session_data['email'];
                $userdata['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];

                // print_r($userdata);
                // die();

                if ($userdata['nama_jenis_pengguna']=='bendahara_sekolah') {
                    redirect('HomeBendahara','refresh');
                }else{
                	redirect('beranda','refresh');
                }
			
		}
	}

	function logout()
	{
		$userdata = array('email','logged_in');
		$this->session->unset_userdata($userdata);
		redirect('welcome','refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
