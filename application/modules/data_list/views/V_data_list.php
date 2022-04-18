<div id="page-content">
  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title">Basic Data Tables with responsive plugin</h3>
    </div>
    <a style="margin-left: 1%" class="btn btn-primary btn" data-toggle="modal" data-target="#demo-default-tambah">Tambah</a>
    <div class="panel-body">
      <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="min-tablet">No Kamar</th>
            <th>Jenis Kamar</th>
            <th data-hide="phone, tablet">Harga</th>
            <th data-hide="phone, tablet">Foto</th>
            <th data-hide="phone, tablet">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tampil as $kamar) { ?>
            <tr>
              <td><?= $kamar->no_kamar?></td>
              <td><?= $kamar->nama_jenis?></td>
              <td><?= $kamar->harga?></td>
              <td><img src="<?php echo base_url ()?>assets/img/<?php echo $kamar->foto_kamar?>" width="150px" alt="Image"></td>
              <td>
                <!-- DETAIL -->
                <a class="btn btn-mint btn-circle" href="<?php echo base_url('data_kamar/detail/'. $kamar->id_kamar); ?>"><i class="ion-information"></i></a>
                <!-- EDIT -->
                <a data-toggle="modal" data-target="#demo-default-modal1<?php echo $kamar->id_kamar?>" class="btn btn-success btn-circle" href=""><i class="ion-edit"></i></a>
                <!-- Hapus -->
                <a data-toggle="modal" data-target="#demo-default-modal2<?php echo $kamar->id_kamar?>" class="btn btn-danger btn-circle" href=""><i class="ion-trash-b"></i></a>
              </td>
            </tr>

            <!-- EDIT -->
            <div class="modal fade" id="demo-default-modal1<?php echo $kamar->id_kamar?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!--Modal Update-->
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <p class="modal-title text-1x text-semibold">Update</p>
                  </div>
                  <?= form_open_multipart('data_kamar/edit'); ?>
                  <input type="hidden" name="id_kamar" value="<?php echo $kamar->id_kamar?>">

                  <!--Modal body--> 
                  <div class="modal-body">

                    <div class="panel-body">

                      <div class="col-md-6" style="margin-top: 2%">
                        <label for="" class="control-label text-muted mar-no">Noner Kamar</label>
                        <input type="text" name="no_kamar" placeholder="Noner Kamar" class="form-control" maxlength="20" value="<?= $kamar->no_kamar?>" required="">
                      </div>
                      <div class="col-md-6" style="margin-top: 2%">
                        <label for="" class="control-label text-muted mar-no">Harga</label>
                        <input type="text" name="harga" placeholder="Harga" class="form-control" value="<?= $kamar->harga?>" required="">
                      </div>
                      <div class="col-md-6" style="margin-top: 2%">
                        <label for="" class="control-label text-muted mar-no">Foto Guru</label>
                        <input type="file" name="foto_kamar" placeholder="Foto Guru" class="form-control"  onchange="tampilkanPreview(this,'preview')">
                      </div>
                      <div class="col-md-6 " style="margin-top: 2%" >
                        <label for="" class="control-label text-muted">Preview Foto Profile</label>
                        <img src="<?= base_url(); ?>assets/img/<?= $kamar->foto_kamar ?>" width="150px" />
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="fotomu" value="<?php echo $kamar->foto_kamar ?>">

                  <!--Modal footer-->
                  <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                  </div>
                  <?= form_close(); ?>
                </div>
              </div>
            </div>

            <!-- HAPUS -->
            <div class="modal fade" id="demo-default-modal2<?php echo $kamar->id_kamar?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!--Modal header-->
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <p class="modal-title text-1x text-semibold">Hapus</p>
                  </div>

                  <!--Modal body-->
                  <div class="modal-body">
                    <p class="text-semibold text-muted mar-no"></p>
                    <p class="text-semibold text-muted mar-no">Anda Yakin Ingin Menghapus <b><?php echo $kamar->nama_jenis ?></b> ? </p>
                    <br>
                  </div>

                  <!--Modal footer-->
                  <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                    <a class="btn btn-danger" href="<?php echo base_url('data_kamar/hapus/'. $kamar->id_kamar) ?>">Hapus Data</a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- TAMBAH -->
<div class="modal fade" id="demo-default-tambah" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!--Modal Update-->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
        <h4 class="modal-title">Tambah</h4>
      </div>

      <?= form_open_multipart('data_kamar/tambah'); ?>
      <!--Modal body--> 
      <div class="modal-body">

        <div class="panel-body">

          <div class="col-md-6" style="margin-top: 2%">
            <label for="" class="control-label">Nomer Kamar</label>
            <input type="text" name="no_kamar" placeholder="Nomer Kamar" maxlength="20" class="form-control" required="">
          </div>
          <div class="col-md-6" style="margin-top: 2%">
            <label for="" class="control-label">Harga</label>
            <input type="text" name="harga" placeholder="Harga" class="form-control" required="">
          </div>
          <div class="col-md-6" style="margin-top: 2% ">
                  <label for="" class="control-label">Jenis Kamar</label>
                  <select name="id_jenis" required="" class="form-control">
                    <option  value="1">Deluxe Room
                    </option>
                    <option  value="2">Superior Room
                    </option>
                    <option  value="4">Standart Room
                    </option>
                    <option value="5">Suit Room</option>
                    <option value="6">Presidental Suit</option>
                  </select>
                </div>
          <div class="col-md-6" style="margin-top: 2%">
            <label for="" class="control-label">Foto Guru</label>
            <input type="file" name="foto_kamar" placeholder="Foto Guru" class="form-control"  onchange="tampilkanPreview(this,'preview')">
          </div>
          <div class="col-md-6 " style="margin-top: 2%">
            <label for="" class="control-label">Preview Foto Profile</label>
            <img id="preview" width="150px" />
          </div>
        </div>
      </div>
      <!--Modal footer-->
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
        <button class="btn btn-primary" id="btnsubmit" type="submit">Simpan</button>
      </div>
      <?= form_close(); ?>

    </div>
  </div>
</div>
<!--jQuery [ REQUIRED ]-->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

<script>
  $(document).ready(function () {


    $('#demo-dp-txtinputmasukkerja input').datepicker({
      format: "yyyy-m-d",
      todayBtn: "linked",
      todayHighlight: true
    });

    $('#demo-dp-txtinputakhirkerja input').datepicker({
      format: "yyyy-m-d",
      todayBtn: "linked",
      todayHighlight: true
    });



  });
</script>


<script type="text/javascript">


  function tampilkanPreview(userfile,idpreview)
  {
    var gb = userfile.files;
    for (var i = 0; i < gb.length; i++)
    {
      var gbPreview = gb[i];
      var imageType = /image.*/;
      var preview=document.getElementById(idpreview);
      var reader = new FileReader();
      if (gbPreview.type.match(imageType))
      {
      //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
    else
    {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
    }
  }
  function tampilkanPreview1(userfile,idpreview1)
  {
    var gb = userfile.files;
    for (var i = 0; i < gb.length; i++)
    {
      var gbPreview1 = gb[i];
      var imageType = /image.*/;
      var preview1=document.getElementById(idpreview1);
      var reader = new FileReader();
      if (gbPreview1.type.match(imageType))
      {
      //jika tipe data sesuai
      preview1.file = gbPreview1;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview1);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview1);
    }
    else
    {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
    }
  }
</script>