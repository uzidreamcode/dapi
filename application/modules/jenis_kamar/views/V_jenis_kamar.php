<div id="page-content">
  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title">Basic Data Tables with responsive plugin</h3>
    </div>
    <div class="panel-body">
      <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Jenis</th>
            <th class="min-tablet">Foto</th>
            <th class="min-desktop">action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($tampil as $jenis) { ?>
            <tr>
              <td><?= $no++?></td>
              <td><?= $jenis->nama_jenis?></td>
              <td><img src="<?php echo base_url ()?>assets/img/<?php echo $jenis->foto?>" width="150px" alt="Image"></td>
              <td>
                <!-- TAMBAH -->
                <a class="btn btn-mint btn-circle" href="<?php echo base_url(); ?>"><i class="ion-information"></i></a>
                <!-- EDIT -->
                <a data-toggle="modal" data-target="#demo-default-modal1<?php echo $jenis->id_jenis?>" class="btn btn-success btn-circle" href=""><i class="ion-edit"></i></a>
                <!-- Hapus -->
                <a data-toggle="modal" data-target="#demo-default-modal2<?php echo $jenis->id_jenis?>" class="btn btn-danger btn-circle" href=""><i class="ion-trash-b"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
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