<div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tabel Karyawan</h4>
                  </div>
                  <div class="card-body">
                    <a href="<?php echo base_url('karyawan/tambah')  ?>" class="btn btn-primary">Tambah</a><hr>
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              No
                            </th>
                            <th>NIK</th>
                            <th>Nama Karyawan</th>
                            <th>Jabatan</th>
                            <th>No rekening</th>
                            <th>Tanggal Masuk</th>
                            <th>Alamat</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $no = 1;
                          foreach ($karyawan as $key => $value): ?>
                            <tr>
                              <td><?=$no ?></td>
                              <td><?=$value['karyawan_nik']?></td>
                              <td><?=$value['karyawan_nama']?></td>
                              <td><?=$value['jabatan_nama']?></td>
                              <td><?=$value['karyawan_no_rekening']?></td>
                              <td><?=$value['karyawan_tanggal_masuk']?></td>
                              <td><?=$value['karyawan_alamat']?></td>
                              <td>
                                <a href="<?php echo base_url('karyawan/edit/'.$value['karyawan_nik']); ?>" class="btn btn-success">Edit</a>
                                <a href="<?php echo base_url('karyawan/hapus'); ?>" class="btn btn-danger">Hapus</a>
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
