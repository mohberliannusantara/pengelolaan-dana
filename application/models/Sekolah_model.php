<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah_model extends CI_Model {

	public function get()
	{
		$query = $this->db->get('sekolah');
		return $query->result();
	}

	public function get_by_id($id)
  {
    $this->db->select('*');
    $this->db->from('sekolah');
    $this->db->where(array('sekolah.id_sekolah' => $id));

    $query = $this->db->get();
    return $query->row();
  }
}


/* End of file Sekolah_model.php */
/* Location: ./application/models/Sekolah_model.php */
