<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis_kegiatan_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function get()
  {
    $query = $this->db->get('jenis_kegiatan');
    return $query->result();
  }

}


?>
