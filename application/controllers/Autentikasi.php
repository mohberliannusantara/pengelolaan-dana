<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Autentikasi_model');
	}

	// function login()
	// {
	// 	$username = $this->input->post('username');
	// 	$password = md5($this->input->post('password'));
	// 	// print_r($email);
	// 	// print_r($password);
	// 	// die();
	// 	$this->load->library('form_validation');
	//       $this->form_validation->set_rules('username', 'Username', 'trim|required');
	//       $this->form_validation->set_rules('password', 'Password', 'trim|required');
	//
	// 	$cek = $this->Autentikasi_model->login($username,$password);
	// 	if ($cek->num_rows() == 1) {
	//
	// 		$value = $cek->row();
	//
	// 		$userdata = array(
	// 			'username' => $value->username,
	// 			'nama_pengguna' => $value->nama_pengguna,
	// 			'email' => $value->email,
	// 			'id_pengguna' => $value->id_pengguna,
	// 			'id_sekolah' =>$value->id_sekolah,
	// 			'nama_sekolah' => $value->nama_sekolah,
	// 			'nama_jenis_pengguna' => $value->nama_jenis_pengguna,
	// 			'logged_in' => TRUE
	// 		);
	// 		// print_r($userdata);
	// 		// die();
	//
	// 		$this->session->set_userdata('logged_in', $userdata);
	// 	}else{
	// 		echo "<script>alert('Informasi Akun yang Anda Masukkan Salah'); </script>";
	// 		redirect('welcome','refresh');
	// 	}
	//
	// 	if ($this->form_validation->run() == FALSE) {
	// 		echo validation_errors();
	// 	} else {
	// 			$session_data = $this->session->userdata('logged_in');
	//               $userdata['username'] = $session_data['username'];
	//               $userdata['nama_pengguna'] = $session_data['nama_pengguna'];
	//               $userdata['email'] = $session_data['email'];
	//               $userdata['id_pengguna'] = $session_data['id_pengguna'];
	//               $userdata['nama_sekolah'] = $session_data['nama_sekolah'];
	//               $userdata['nama_jenis_pengguna'] = $session_data['nama_jenis_pengguna'];
	//               $userdata['logged_in'] = $session_data['logged_in'];
	//
	//               if ($userdata['nama_jenis_pengguna']=='bendahara_sekolah') {
	//                   redirect('HomeBendahara','refresh');
	//               }else{
	//               	redirect('HomeAdmin','refresh');
	//               }
	//
	// 	}
	// }

	function Login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() === FALSE){
			redirect('welcome');
		}else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$cek = $this->Autentikasi_model->login($username,$password);

			if ($cek->num_rows() == 1) {

				$value = $cek->row();

				$userdata = array(
					'id_pengguna' => $value->id_pengguna,
					'username' => $value->username,
					'nama_pengguna' => $value->nama_pengguna,
					'email' => $value->email,
					'id_jenis_pengguna' => $value->id_jenis_pengguna,
					'nama_jenis_pengguna' => $value->nama_jenis_pengguna,
					'id_sekolah' =>$value->id_sekolah,
					'nama_sekolah' => $value->nama_sekolah,
					'kepala_sekolah' => $value->kepala_sekolah,
					'nama_jenis_sekolah' => $value->nama_jenis_sekolah,
					'nama_status_sekolah' => $value->nama_status_sekolah,
					'npsn' => $value->npsn,
					'kecamatan' => $value->kecamatan,
					'alamat' => $value->alamat,
					'npsn' => $value->npsn,
					'logged_in' => TRUE
				);

				$this->session->set_flashdata('user_loggedin', 'You are now logged in');

				if ($userdata['id_jenis_pengguna'] == 1) {
					$this->session->set_userdata($userdata);
					redirect('admin/beranda','refresh');
				}else {
					$this->session->set_userdata($userdata);
					redirect('beranda','refresh');
				}
			} else {
				echo "<script>.('Informasi Akun yang Anda Masukkan Salah'); </script>";
				// $this->session->set_flashdata('login_failed', 'Login is invalid');
				// echo "demo.showNotification('top','center'); </script>";
				redirect('welcome','refresh');
			}
		}
	}

	function logout()
	{
		$userdata = array('username','logged_in');
		$this->session->unset_userdata($userdata);
		redirect('welcome','refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
