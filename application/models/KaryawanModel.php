<?php
  /**
   *
   */
  class KaryawanModel extends CI_MODEL
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    function tampildata()
    {
      $this->db->from('sigaka_karyawan');
      $this->db->join('sigaka_jabatan','sigaka_jabatan.jabatan_id = sigaka_karyawan.karyawan_jabatan');
      $query = $this->db->get();
      return $query->result_array();
    }
    function simpan($data)
    {
      $this->db->insert('sigaka_karyawan', $data);
    }
  }


 ?>
