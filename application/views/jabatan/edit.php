<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Jabatan</h4>
                  </div>
                  <form class="" action="<?php echo base_url('jabatan/edit/'.$row['jabatan_id']) ?>" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label>Nama Jabatan</label>
                      <input type="text" name="namajabatan" class="form-control" value="<?= $row['jabatan_nama'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Basic</label>
                      <input type="number" name="basic" class="form-control" value="<?= $row['jabatan_basic'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Uang Makan</label>
                      <input type="number" name="uangmakan" class="form-control" value="<?= $row['jabatan_uang_makan'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Lembur</label>
                      <input type="number" name="lembur" class="form-control" value="<?= $row['jabatan_lembur'] ?>">
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" name="submit" type="submit">Update</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                  </form>
                </div>
              </div>
