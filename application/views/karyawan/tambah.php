<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Karyawan</h4>
                  </div>
                  <form class="" action="<?php echo base_url('karyawan/tambah') ?>" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label>NIK</label>
                      <input type="text" class="form-control" name="nik">
                    </div>
                    <div class="form-group">
                      <label>Nama Karyawan</label>
                      <input type="text" class="form-control" name="namakaryawan">
                    </div>
                    <div class="form-group">
                      <label>Jabatan</label>
                      <select class="form-control" name="jabatan">
                        <?php foreach ($jabatan as $key => $value): ?>
                          <option value=""></option>
                          <option value="<?php echo $value['jabatan_id']; ?>"><?php echo $value['jabatan_nama']; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>No Rekening</label>
                      <input type="text" class="form-control" name="norekening">
                    </div>
                    <div class="form-group">
                      <label>Tanggal Masuk</label>
                      <input type="date" class="form-control" name="tglmasuk">
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" name="alamat"></textarea>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit" name="simpan">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                  </form>
                </div>
              </div>
