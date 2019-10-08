<?php
  /**
   *
   */
  class AuthModel extends CI_MODEL
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    function cek($data)
    {
      $query = $this->db->get_where('sigaka_pengguna',$data);      
      return $query->row_array();
    }

  }


 ?>
