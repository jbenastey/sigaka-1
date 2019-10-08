<?php

  /**
   *
   */
  class KaryawanController extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('JabatanModel');
      $this->load->model('KaryawanModel');
    }
    function index()
    {
      $data['karyawan'] = $this->KaryawanModel->tampildata();
      $this->load->view('templates/header');
      $this->load->view('karyawan/index',$data);
      $this->load->view('templates/footer');
    }
    function tambah()
    {
      if (isset($_POST['simpan'])) {
        $data = array(
          'karyawan_nik'=>$this->input->post('nik'),
          'karyawan_nama'=>$this->input->post('namakaryawan'),
          'karyawan_jabatan'=>$this->input->post('jabatan'),
          'karyawan_no_rekening'=>$this->input->post('norekening'),
          'karyawan_tanggal_masuk'=>$this->input->post('tglmasuk'),
          'karyawan_alamat'=>$this->input->post('alamat')
        );
        $data = $this->KaryawanModel->simpan($data);
        redirect('karyawan');
      }
      $data['jabatan'] = $this->JabatanModel->tampildata();
      $this->load->view('templates/header');
      $this->load->view('karyawan/tambah',$data);
      $this->load->view('templates/footer');
    }
  }

 ?>
