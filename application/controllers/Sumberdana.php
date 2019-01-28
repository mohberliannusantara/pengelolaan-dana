<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SumberDana extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('sekolah_model');
		$this->load->model('pengguna_model');
		$this->load->model('sumberdana_model');

		if (!$this->session->logged_in == TRUE) {
			redirect('welcome','refresh');
		}
		if ($this->session->id_jenis_pengguna == 1 ) {
			redirect('beranda','refresh');
		}
	}

	public function index()
	{
		$data['page'] = 'Sumber Dana';
		$data['sumberdana'] = $this->sumberdana_model->get($this->session->id_sekolah);
		$data['pengguna'] = $this->pengguna_model->get_by_id($this->session->id_pengguna);

		$this->load->view('template/header', $data);
		$this->load->view('sumberdana/index', $data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$data['page'] = 'Sumber Dana';
		$data2['sekolah'] = $this->sekolah_model->get();
		$data2['jenisdana'] = $this->sumberdana_model->getJenisSumberDana();
		$data2['saldoawal'] = $this->sumberdana_model->getJumlahTerakhir($this->session->id_sekolah);

		// $this->form_validation->set_rules('nama_pemasukkan', 'Nama Pemasukkan', 'trim|required');
		$this->form_validation->set_rules('saldo_awal', 'Saldo Awal', 'trim|required');
		$this->form_validation->set_rules('saldo_bank', 'Saldo Bank', 'trim|required');
		$this->form_validation->set_rules('bunga_bank', 'Bunga Bank', 'trim|required');
		$this->form_validation->set_rules('saldo_kas_tunai', 'Saldo Kas Tunai', 'trim|required');
		$this->form_validation->set_rules('id_jenis_sumber_dana', 'Jenis Sumber Dana', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');

		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$bulanList = array(	'01' => 'Januari', '02' => 'Februari', '03' => 'Maret', '04' => 'April',
								'05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus',
								'09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
			
			if($this->input->post('id_jenis_sumber_dana') == 1){
				$nama = "Bosnas ".$bulanList[date("m",strtotime($this->input->post('tanggal')))]." ".date("Y",strtotime($this->input->post('tanggal')));
			}else if ($this->input->post('id_jenis_sumber_dana') == 2) {
				$nama = "Bosda ".$bulanList[date("m",strtotime($this->input->post('tanggal')))]." ".date("Y",strtotime($this->input->post('tanggal')));
			}else{
				$nama = "Sumber Dana Lain-Lain ".$bulanList[date("m",strtotime($this->input->post('tanggal')))]." ".date("Y",strtotime($this->input->post('tanggal')));
			}

			$this->sumberdana_model->create($nama);
			echo "<script>alert('Successfully Added'); </script>";
			redirect('SumberDana','refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('sumberdana/create', $data2);
		$this->load->view('template/footer');
	}

	function edit($id_sumber_dana)
	{
		$data['page'] = 'Sumber Dana';
		$data2['sumberdana'] = $this->sumberdana_model->get_by_id($this->session->id_sekolah,$id_sumber_dana);
		$data2['jenisdana'] = $this->sumberdana_model->getJenisSumberDana();

		$this->form_validation->set_rules('saldo_awal', 'Saldo Awal', 'trim|required');
		$this->form_validation->set_rules('saldo_bank', 'Saldo Bank', 'trim|required');
		$this->form_validation->set_rules('bunga_bank', 'Bunga Bank', 'trim|required');
		$this->form_validation->set_rules('saldo_kas_tunai', 'Saldo Kas Tunai', 'trim|required');
		$this->form_validation->set_rules('id_jenis_sumber_dana', 'Jenis Sumber Dana', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');


		if ($this->form_validation->run()==FALSE){
			echo validation_errors();
		}else{
			$this->sumberdana_model->edit($this->session->id_sekolah,$id_sumber_dana);
			echo "<script>alert('Successfully Added'); </script>";
			redirect('SumberDana','refresh');
		}

		$this->load->view('template/header', $data);
		$this->load->view('sumberdana/edit', $data2);
		$this->load->view('template/footer');
	}

	public function delete($id)
	{
		$this->sumberdana_model->delete($id);
		redirect('Sumberdana','refresh');
	}

	public function get($id_sumber_dana)
	{
		$data['sumberdana'] = $this->sumberdana_model->get_by_id($this->session->id_sekolah,$id_sumber_dana);
		$this->load->view('sumberdana/show', $data);
	}

}

/* End of file sumberDana.php */
/* Location: ./application/controllers/sumberDana.php */