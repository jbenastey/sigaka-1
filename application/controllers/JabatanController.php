<?php

  /**
   *
   */
  class JabatanController extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    function index()
    {
      $this->load->view('templates/header');
      $this->load->view('jabatan/index');
      $this->load->view('templates/footer');
    }
    function tambah()
    {
      $this->load->view('templates/header');
      $this->load->view('jabatan/tambah');
      $this->load->view('templates/footer');
    }
  }

 ?>
