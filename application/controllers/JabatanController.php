<?php

  /**
   *
   */
  class JabatanController extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('JabatanModel');
    }
    function index()
    {
      $data['jabatan'] = $this->JabatanModel->tampildata();
      $this->load->view('templates/header');
      $this->load->view('jabatan/index',$data);
      $this->load->view('templates/footer');
    }
    function tambah()
    {
      if (isset($_POST['simpan'])) {
        $data = array(
          'jabatan_nama'=>$this->input->post('namajabatan'),
          'jabatan_basic'=>$this->input->post('basic'),
          'jabatan_uang_makan'=>$this->input->post('uangmakan'),
          'jabatan_lembur'=>$this->input->post('lembur')
        );
        $data = $this->JabatanModel->simpan($data);
        $this->session->set_flashdata('alert', 'berhasil_tambah');
        redirect('jabatan');
      }
      $this->load->view('templates/header');
      $this->load->view('jabatan/tambah');
      $this->load->view('templates/footer');
    }
    function edit()
    {
      $id = $this->uri->segment(3);
      if (isset($_POST['submit'])) {
        $nama = $this->input->post('namajabatan');
        $basic = $this->input->post('basic');
        $uangmakan = $this->input->post('uangmakan');
        $lembur = $this->input->post('lembur');

        $data = array(
          'jabatan_nama'=>$nama,
          'jabatan_basic'=>$basic,
          'jabatan_uang_makan'=>$uangmakan,
          'jabatan_lembur'=>$lembur
        );
        $this->JabatanModel->editjabatan($id,$data);
        $this->session->set_flashdata('alert', 'berhasil_edit');
        redirect('jabatan');
      }else {
        $data['row'] = $this->JabatanModel->get_id($id)->row_array();
        $this->load->view('templates/header');
        $this->load->view('jabatan/edit',$data);
        $this->load->view('templates/footer');
      }
    }
    function delete()
    {
      $id = $this->uri->segment(3);
      $data = array("jabatan_id"=>$id);
      $this->JabatanModel->deletejabatan($data);
      $this->session->set_flashdata('alert', 'berhasil_hapus');
      redirect('jabatan');
    }
  }

 ?>
