<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Autentikasi_model');
	}

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
				echo "<script>alert('Informasi Akun yang Anda Masukkan Salah') </script>";
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
