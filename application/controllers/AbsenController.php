<?php

  /**
   *
   */
  class AbsenController extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model("AbsenModel");
      $this->load->helper('tgl_indo_helper');
    }
    function index()
    {
      $data['absen'] = $this->AbsenModel->tampildata();
      $data['karyawan'] = $this->AbsenModel->tampil();
      $this->load->view('templates/header');
      $this->load->view('absen/index',$data);
      $this->load->view('templates/footer');
    }
    function tambah()
    {
      if (isset($_POST['submit'])) {
        $data = array(
          'absen_karyawan_nik'=>$this->input->post('karyawan_nik'),
          'absen_hari'=>hari_indo(date('l')),
          'absen_status'=>'normal'
        );
        $this->AbsenModel->simpan($data);
        $this->session->set_flashdata('alert', 'berhasil_tambah');
        redirect('absen');
      }
    }
    function edit()
    {
      if (isset($_POST['submit'])) {
        $id = $this->input->post('absen_id');
        $status = $this->input->post('status');
        $lembur = $this->input->post('lembur');

        $data = array(
          'absen_id'=>$id,
          'absen_status'=>$status,
          'absen_jam_lembur'=>$lembur
        );
        $this->AbsenModel->update($id,$data);
        $this->session->set_flashdata('alert', 'berhasil_edit');
        redirect('absen');
      }
    }
    function semua($absen){
        $id = $this->AbsenController->get_absen($absen);
        echo json_encode($id);
    }
  }



 ?>
