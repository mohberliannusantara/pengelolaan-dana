<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis_kegiatan_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function sumKegiatan($id)
  {
  	$query = "SELECT SUM(jumlah) as jumlah from detail_kegiatan as d INNER JOIN kegiatan as k ON d.id_kegiatan=k.id_kegiatan INNER join jenis_kegiatan as j ON k.id_jenis_kegiatan=j.id_jenis_kegiatan WHERE j.id_jenis_kegiatan=$id ";
  	return $query->result();
  }

  public function create()
  {
      $data = array(
      'nama_jenis_kegiatan' => $this->input->post('nama_jenis_kegiatan'),
    );

    $this->db->insert('jenis_kegiatan', $data);
  }

  public function edit($id)
  {
    $data = array(
      'nama_jenis_kegiatan' => $this->input->post('nama_jenis_kegiatan'),
    );

    $this->db->where('id_jenis_kegiatan', $id);
    $this->db->update('jenis_kegiatan', $data);
  }

  public function delete($id)
  {
    $this->db->where('id_jenis_kegiatan', $id);
    $this->db->delete('jenis_kegiatan');
  }

  public function get_jenis_by_id($id)
  {
    $this->db->where(array('id_jenis_kegiatan' => $id));
    $query = $this->db->get('jenis_kegiatan');
    return $query->row();
  }
}


?>
