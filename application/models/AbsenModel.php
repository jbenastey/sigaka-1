<?php
  /**
   *
   */
  class AbsenModel extends CI_MODEL
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    function tampil()
    {
      $this->db->from('sigaka_karyawan');
      $query = $this->db->get();
      return $query->result_array();
    }
    function tampildata()
    {
      $this->db->from('sigaka_absen');
      $this->db->join('sigaka_karyawan','sigaka_karyawan.karyawan_nik = sigaka_absen.absen_karyawan_nik');
      $query = $this->db->get();
      return $query->result_array();
    }
    function simpan($data)
    {
      $this->db->insert('sigaka_absen',$data);
    }
    function update($id,$data)
    {
      $this->db->where('absen_id',$id);
      $this->db->update('sigaka_absen',$data);
    }
    function get_absen($id)
    {
      $this->db->select('*');
      $this->db->from('sigaka_absen');
      $this->db->where('absen_id', $id);
      $query = $this->db->get();
      return $query->result_array();
    }
  }

 ?>
