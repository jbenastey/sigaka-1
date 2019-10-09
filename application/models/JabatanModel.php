<?php
  /**
   *
   */
  class JabatanModel extends CI_MODEL
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    function tampildata()
    {
      $this->db->from('sigaka_jabatan');
      $query = $this->db->get();
      return $query->result_array();

    }
    function simpan($data)
    {
      $this->db->insert('sigaka_jabatan', $data);
    }
  }



 ?>
