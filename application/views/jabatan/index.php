      <div class="col-12">
            <?php if ($this->session->flashdata('alert') == 'berhasil_tambah') { ?>
              <div class="alert alert-primary alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                  <span>&times;</span>
                  </button>
                  Berhasil Menambah Data
                </div>
              </div>
            <?php }elseif ($this->session->flashdata('alert') == 'berhasil_edit') { ?>
              <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                  <span>&times;</span>
                  </button>
                  Berhasil Mengubah Data
                </div>
              </div>
            <?php }elseif ($this->session->flashdata('alert') == 'berhasil_hapus') {?>
              <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                  <span>&times;</span>
                  </button>
                  Berhasil Menghapus Data
                </div>
              </div>
            <?php } ?>
                <div class="card">
                  <div class="card-header">
                    <h4>Tabel Jabatan</h4>
                  </div>
                  <div class="card-body">
                    <a href="<?php echo base_url('jabatan/tambah')  ?>" class="btn btn-primary">Tambah</a><hr>
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>Jabatan</th>
                            <th>Basic</th>
                            <th>Uang Makan</th>
                            <th>lembur</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                          $no = 1;
                          foreach ($jabatan as $key => $value): ?>
                            <tr>
                              <td><?=$no ?></td>
                              <td><?=$value['jabatan_nama']?></td>
                              <td><?=$value['jabatan_basic']?></td>
                              <td><?=$value['jabatan_uang_makan']?></td>
                              <td><?=$value['jabatan_lembur']?></td>
                              <td>
                                <a href="<?php echo base_url("jabatan/edit/".$value['jabatan_id']); ?>" class="btn btn-success">Edit</a>
                                <a href="<?php echo base_url('jabatan/delete/'.$value['jabatan_id']); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                              </td>
                            </tr>
                          <?php
                          $no++;
                          endforeach; ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
