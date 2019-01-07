<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah_model extends CI_Model {

	public function get()
	{
    $this->db->order_by('nama_sekolah', 'ASC');
    $this->db->join('jenis_sekolah','sekolah.id_jenis_sekolah = jenis_sekolah.id_jenis_sekolah');
    $this->db->join('status_sekolah','status_sekolah.id_status_sekolah = sekolah.id_status_sekolah');
		$query = $this->db->get('sekolah');
		return $query->result();

	}

	public function get_by_id($id)
  {
    $this->db->select('*');
    $this->db->from('sekolah');
    $this->db->join('jenis_sekolah','sekolah.id_jenis_sekolah = jenis_sekolah.id_jenis_sekolah');
    $this->db->join('status_sekolah','status_sekolah.id_status_sekolah = sekolah.id_status_sekolah');
    $this->db->where(array('sekolah.id_sekolah' => $id));

    $query = $this->db->get();
    return $query->row();
  }
}


/* End of file Sekolah_model.php */
/* Location: ./application/models/Sekolah_model.php */
