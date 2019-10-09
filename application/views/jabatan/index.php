<div class="col-12">
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
                                <a href="<?php echo base_url('jabatan/hapus'); ?>" class="btn btn-danger">Hapus</a>
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
