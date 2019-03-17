<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_Rencana_Penerimaan_k1_model extends CI_Model {

	function __construct()
  	{
    	parent::__construct();
  	}

  	public function get()
  	{
    	$query = $this->db->get('jenis_rencana_penerimaan_k1');
    	return $query->result();
  	}

  	public function createSub($id)
  	{
  		$data = array(
			'uraian' => $this->input->post('uraian'),
			'jumlah' => $this->input->post('jumlah'),
			'id_jenis_penerimaan' => $id
		);

		$this->db->insert('rencana_penerimaan_k1', $data);
  	}

  	public function get_detail_penerimaan($id)
	{
		$this->db->where('rencana_penerimaan_k1.id_jenis_penerimaan', $id, FALSE);
		$this->db->join('jenis_rencana_penerimaan_k1','jenis_rencana_penerimaan_k1.id_jenis_penerimaan = rencana_penerimaan_k1.id_jenis_penerimaan');
		$query = $this->db->get('rencana_penerimaan_k1');

		return $query->result();
	}

	public function get_by_id($id)
	{
		$this->db->where('rencana_penerimaan_k1.idPenerimaan', $id, FALSE);
		$query = $this->db->get('rencana_penerimaan_k1');

		return $query->row();
	}

	public function editSub($id)
	{
			$data = array(
			'uraian' => $this->input->post('uraian'),
			'jumlah' => $this->input->post('jumlah'),
		);

		$this->db->where('idPenerimaan', $id);
		$this->db->update('rencana_penerimaan_k1', $data);
	}

	public function deleteSub($id)
	{
		$this->db->where('idPenerimaan', $id);
		$this->db->delete('rencana_penerimaan_k1');
	}

	public function create()
  	{
      $data = array(
      	'uraian' => $this->input->post('nama_jenis_penerimaan'),
    	);

    	$this->db->insert('jenis_rencana_penerimaan_k1', $data);
  	}

  	public function edit($id)
  	{
	    	$data = array(
    	  	'uraian' => $this->input->post('nama_jenis_penerimaan'),
    );

	    $this->db->where('id_jenis_penerimaan', $id);
	    $this->db->update('jenis_rencana_penerimaan_k1', $data);
  	}

  	public function delete($id)
  	{
	    $this->db->where('id_jenis_penerimaan', $id);
	    $this->db->delete('jenis_rencana_penerimaan_k1');
  	}

  	public function get_jenis_by_id($id)
  	{
	    $this->db->where(array('id_jenis_penerimaan', $id));
	    $query = $this->db->get('jenis_rencana_penerimaan_k1');
	    return $query->row();
  	}

}

/* End of file Jenis_Rencana_Penerimaan_k1_model.php */
/* Location: ./application/models/Jenis_Rencana_Penerimaan_k1_model.php */