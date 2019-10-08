<?php

  /**
   *
   */
  class KaryawanController extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    function index()
    {
      $this->load->view('templates/header');
      $this->load->view('karyawan/index');
      $this->load->view('templates/footer');
    }
    function tambah()
    {
      $this->load->view('templates/header');
      $this->load->view('karyawan/tambah');
      $this->load->view('templates/footer');
    }
  }

 ?>
