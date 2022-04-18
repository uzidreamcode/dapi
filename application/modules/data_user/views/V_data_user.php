<!-- ==================================================== -->
<!-- Alert Crud -->

<?php if($this->session->flashdata('tambah')){ ?>
  <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>  
      <?= $this->session->flashdata('tambah') ?>
  </div>
<?php } ?>

<?php if($this->session->flashdata('edit')){ ?>
  <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>  
      <?= $this->session->flashdata('edit') ?>
  </div>
<?php } ?>

<?php if($this->session->flashdata('hapus')){ ?>
  <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>  
      <?= $this->session->flashdata('hapus') ?>
  </div>
<?php } ?>

<!-- ==================================================== -->
<!-- End Alert Crud -->

<!--Page content-->
<!--===================================================-->
<div id="page-content">
  <div class="row">
    <div class="col-lg-12">
      <div class="panel">
        <div class="panel-body">
          <div class="row pad-btm">
            <?= form_open_multipart('data_user/fpdf/'); ?>
            <div style="margin-right: -40px">
              <div class="col-md-10">
                <a data-target="#tambah-modal" data-toggle="modal" class="btn btn-primary">Tambah</a>
              </div>
              <button type="submit" class="btn btn-primary">export</button>
            </div>
            <?= form_close(); ?>
          </div>
          <hr>
          <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th class="min-desktop">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tampil as $user) { ?>
                <tr>
                  <td><?= $user->nama_user ?></td>
                  <td><?= $user->email ?></td>
                  <td><?= $user->username ?></td>
                  <td>********</td>

                  <?php if ($user->role == '1') { ?>
                    <td>Admin</td>
                  <?php } else {?>
                    <td>Kasir</td>
                  <?php } ?>

                  <td class="text-center">
                    <a data-target="#edit-modal<?= $user->id_user ?>" data-toggle="modal" class="btn btn-success"><i class="ion-edit ion-lg"></i></a>
                    <a data-target="#hapus-modal<?= $user->id_user ?>" data-toggle="modal" class="btn btn-danger"><i class="ion-trash-b ion-lg"></i></a>
                  </td>
              </tr>

              <!--Default Bootstrap Modal-->
              <!--===================================================-->
              <div class="modal fade" id="hapus-modal<?= $user->id_user ?>" role="dialog" tabindex="-1" aria-labelledby="hapus-modal" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">

                          <!--Modal header-->
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                              <h4 class="modal-title">Hapus <?= $user->nama_user ?></h4>
                          </div>

                          <!--Modal body-->
                          <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus data?</p>
                          </div>

                          <!--Modal footer-->
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Tutup</button>
                              <a href="<?php echo base_url('data_user/hapus/'. $user->id_user) ?>" class="btn btn-danger">Hapus</a>
                          </div>
                      </div>
                  </div>
              </div>
              <!--===================================================-->
              <!--End Default Bootstrap Modal-->

              <!--Default Bootstrap Modal-->
              <!--===================================================-->
              <div class="modal fade" id="edit-modal<?= $user->id_user ?>" role="dialog" tabindex="-1" aria-labelledby="edit-modal" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">

                          <!--Modal header-->
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                              <h4 class="modal-title">Edit Paket</h4>
                          </div>

                          <?= form_open_multipart('data_user/edit'); ?>

                          <input type="hidden" name="id_user" value="<?= $user->id_user ?>">

                          <!--Modal body-->
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-6 mar-top">
                                <label for="nama-paket">Nama User</label>
                                <input type="text" name="nama_user" id="nama-paket" class="form-control" value="<?= $user->nama_user ?>">
                              </div>
                              <div class="col-md-6 mar-top">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="<?= $user->email ?>">
                              </div>
                              <div class="col-md-6 mar-top">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" value="<?= $user->username ?>">
                              </div>
                              <div class="col-md-6 mar-top">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" value="<?= $user->password ?>">
                              </div>
                              <div class="col-md-6 mar-top">
                                <label for="role">Role</label>
                                <select name="role" id="role" class="form-control">
                                  <option <?php echo ($user->role == '1') ? "selected": ""?> value="1">Admin</option>
                                  <option <?php echo ($user->role == '2') ? "selected": ""?> value="2">Kasir</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <!--Modal footer-->
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Tutup</button>
                              <button class="btn btn-primary">Simpan</button>
                          </div>

                          <?= form_close(); ?>

                      </div>
                  </div>
              </div>
              <!--===================================================-->
              <!--End Default Bootstrap Modal-->

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!--Default Bootstrap Modal-->
  <!--===================================================-->
  <div class="modal fade" id="tambah-modal" role="dialog" tabindex="-1" aria-labelledby="tambah-modal" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">

              <!--Modal header-->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                  <h4 class="modal-title">Tambah Paket</h4>
              </div>

              <?= form_open_multipart('data_user/tambah'); ?>

              <!--Modal body-->
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6 mar-top">
                    <label for="nama_user">Nama User</label>
                    <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Nama User">
                  </div>
                  <div class="col-md-6 mar-top">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Nama User">
                  </div>
                  <div class="col-md-6 mar-top">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                  </div>
                  <div class="col-md-6 mar-top">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="col-md-6 mar-top">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                      <option value="1">Admin</option>
                      <option value="2">Kasir</option>
                    </select>
                  </div>
                </div>
              </div>

              <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>

              <?= form_close(); ?>

          </div>
      </div>
  </div>
  <!--===================================================-->
  <!--End Default Bootstrap Modal-->
    
</div>