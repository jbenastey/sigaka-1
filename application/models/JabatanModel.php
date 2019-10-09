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
    function editjabatan($id,$data)
    {
      $this->db->where('jabatan_id',$id);
      $this->db->update('sigaka_jabatan',$data);
    }
    function get_id($id)
    {
      $param = array('jabatan_id'=>$id);
      return $this->db->get_where('sigaka_jabatan',$param);
    }
  }



 ?>
