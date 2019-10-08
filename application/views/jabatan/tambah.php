<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Jabatan</h4>
                  </div>
                  <form class="" action="<?php echo base_url('jabatan/tambah') ?>" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama Jabatan</label>
                      <input type="text" name="namajabatan" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Basic</label>
                      <input type="number" name="basic" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Uang Makan</label>
                      <input type="number" name="uangmakan" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Lembur</label>
                      <input type="number" name="lembur" class="form-control">
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" name="simpan" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                  </form>
                </div>
              </div>
