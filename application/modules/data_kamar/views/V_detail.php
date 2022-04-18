<div id="page-content">
  
 <!-- Search -->
 <!--===================================================-->
 <div class="row pad-btm">
  <form action="#" method="post" class="col-xs-12 col-sm-10 col-sm-offset-1 pad-hor">
    <div class="input-group mar-btm">
     <input type="text" placeholder="Search posts..." class="form-control input-lg">
     <span class="input-group-btn">
       <button class="btn btn-primary btn-lg" type="button">Search</button>
     </span>
   </div>
 </form>
</div>

<!-- Toolbar -->
<!--===================================================-->
<div class="pad-all text-center">
  <div class="box-inline mar-btm pad-rgt">
   Only in categories :
   <div class="select">
     <select id="demo-ease">
       <option value="internet" selected="">Internet</option>
       <option value="musics">Musics</option>
       <option value="sports">Sports</option>
       <option value="tutorials">Tutorials</option>
       <option value="movies">Movies</option>
     </select>
   </div>
 </div>
 <div class="box-inline mar-btm">
   Sort by :
   <div class="select">
     <select id="demo-ease">
       <option value="date-created" selected="">Date Created</option>
       <option value="date-modified">Date Modified</option>
       <option value="frequency-used">Frequency Used</option>
       <option value="alpabetically">Alpabetically</option>
       <option value="alpabetically-reversed">Alpabetically Reversed</option>
     </select>
   </div>
 </div>
 <button class="btn btn-default">Filter</button>
</div>

<hr class="new-section-xs bord-no">

<div class="panel">
 <?php foreach ($detail as $detail) {?>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-vcenter">
        <thead>
          <tr>
            <th></th>
            <th>Post Title</th>
            <th>Creation Date</th>
            <th>Categories</th>
            <th>Post by</th>
            <th>Status</th>
            <th class="text-center">Tracking Number</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-1.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">Lorem ipsum dolor sit amet</a></td>
            <td><span class="text-muted">Oct 22, 2014</span></td>
            <td>Internet</td>
            <td><a href="#" class="btn-link">Betty Murphy</a></td>
            <td>
              <div class="label label-table label-success">Published</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-3.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">The copy warned the Little Blind Text</a></td>
            <td><span class="text-muted">Oct 24, 2014</span></td>
            <td>Movies</td>
            <td><a href="#" class="btn-link">Jack George</a></td>
            <td>
              <div class="label label-table label-success">Published</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-2.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">I should be incapable of drawing a single stroke</a></td>
            <td><span class="text-muted">Oct 24, 2014</span></td>
            <td>Sports</td>
            <td><a href="#" class="btn-link">Lucy Doe</a></td>
            <td>
              <div class="label label-table label-warning">Unpublish</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-4.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">Drops of rain could be heard hitting the pane</a></td>
            <td><span class="text-muted">Oct 15, 2014</span></td>
            <td>Entertainment</td>
            <td><a href="#" class="btn-link">Teresa L. Doe</a></td>
            <td>
              <div class="label label-table label-warning">Unpublish</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-6.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">How quickly daft jumping zebras</a></td>
            <td><span class="text-muted">Oct 12, 2014</span></td>
            <td>Tutorial</td>
            <td><a href="#" class="btn-link">Teresa L. Doe</a></td>
            <td>
              <div class="label label-table label-success">Published</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-2.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">I should be incapable of drawing a single stroke</a></td>
            <td><span class="text-muted">Oct 24, 2014</span></td>
            <td>Sports</td>
            <td><a href="#" class="btn-link">Lucy Doe</a></td>
            <td>
              <div class="label label-table label-warning">Unpublish</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-5.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">The copy warned the Little Blind Text</a></td>
            <td><span class="text-muted">Oct 24, 2014</span></td>
            <td>Movies</td>
            <td><a href="#" class="btn-link">Jack George</a></td>
            <td>
              <div class="label label-table label-success">Published</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-1.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">I should be incapable of drawing a single stroke</a></td>
            <td><span class="text-muted">Oct 24, 2014</span></td>
            <td>Sports</td>
            <td><a href="#" class="btn-link">Lucy Doe</a></td>
            <td>
              <div class="label label-table label-warning">Unpublish</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <div>Showing 1 to 10 of 57 entries</div>
      </div>
      <div class="col-sm-7 text-right">
        <ul class="pagination">
          <li class="disabled"><a href="#" class="demo-pli-arrow-left"></a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><span>...</span></li>
          <li><a href="#">20</a></li>
          <li><a href="#" class="demo-pli-arrow-right"></a></li>
        </ul>
      </div>
    </div>
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




<!-- Search -->
<!--===================================================-->
<div class="row pad-btm">
  <form action="#" method="post" class="col-xs-12 col-sm-10 col-sm-offset-1 pad-hor">
    <div class="input-group mar-btm">
     <input type="text" placeholder="Search posts..." class="form-control input-lg">
     <span class="input-group-btn">
       <button class="btn btn-primary btn-lg" type="button">Search</button>
     </span>
   </div>
 </form>
</div>

<!-- Toolbar -->
<!--===================================================-->
<div class="pad-all text-center">
  <div class="box-inline mar-btm pad-rgt">
   Only in categories :
   <div class="select">
     <select id="demo-ease">
       <option value="internet" selected="">Internet</option>
       <option value="musics">Musics</option>
       <option value="sports">Sports</option>
       <option value="tutorials">Tutorials</option>
       <option value="movies">Movies</option>
     </select>
   </div>
 </div>
 <div class="box-inline mar-btm">
   Sort by :
   <div class="select">
     <select id="demo-ease">
       <option value="date-created" selected="">Date Created</option>
       <option value="date-modified">Date Modified</option>
       <option value="frequency-used">Frequency Used</option>
       <option value="alpabetically">Alpabetically</option>
       <option value="alpabetically-reversed">Alpabetically Reversed</option>
     </select>
   </div>
 </div>
 <button class="btn btn-default">Filter</button>
</div>

<hr class="new-section-xs bord-no">

<div class="panel">
  
  <!--Posts Table-->
  <!--===================================================-->
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-vcenter">
        <thead>
          <tr>
            <th></th>
            <th>Post Title</th>
            <th>Creation Date</th>
            <th>Categories</th>
            <th>Post by</th>
            <th>Status</th>
            <th class="text-center">Tracking Number</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-1.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">Lorem ipsum dolor sit amet</a></td>
            <td><span class="text-muted">Oct 22, 2014</span></td>
            <td>Internet</td>
            <td><a href="#" class="btn-link">Betty Murphy</a></td>
            <td>
              <div class="label label-table label-success">Published</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-3.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">The copy warned the Little Blind Text</a></td>
            <td><span class="text-muted">Oct 24, 2014</span></td>
            <td>Movies</td>
            <td><a href="#" class="btn-link">Jack George</a></td>
            <td>
              <div class="label label-table label-success">Published</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-2.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">I should be incapable of drawing a single stroke</a></td>
            <td><span class="text-muted">Oct 24, 2014</span></td>
            <td>Sports</td>
            <td><a href="#" class="btn-link">Lucy Doe</a></td>
            <td>
              <div class="label label-table label-warning">Unpublish</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-4.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">Drops of rain could be heard hitting the pane</a></td>
            <td><span class="text-muted">Oct 15, 2014</span></td>
            <td>Entertainment</td>
            <td><a href="#" class="btn-link">Teresa L. Doe</a></td>
            <td>
              <div class="label label-table label-warning">Unpublish</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-6.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">How quickly daft jumping zebras</a></td>
            <td><span class="text-muted">Oct 12, 2014</span></td>
            <td>Tutorial</td>
            <td><a href="#" class="btn-link">Teresa L. Doe</a></td>
            <td>
              <div class="label label-table label-success">Published</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-2.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">I should be incapable of drawing a single stroke</a></td>
            <td><span class="text-muted">Oct 24, 2014</span></td>
            <td>Sports</td>
            <td><a href="#" class="btn-link">Lucy Doe</a></td>
            <td>
              <div class="label label-table label-warning">Unpublish</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-5.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">The copy warned the Little Blind Text</a></td>
            <td><span class="text-muted">Oct 24, 2014</span></td>
            <td>Movies</td>
            <td><a href="#" class="btn-link">Jack George</a></td>
            <td>
              <div class="label label-table label-success">Published</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
          <tr>
            <td><img class="img-responsive img-sm" src="img/thumbs/img-1.jpg" alt="thumbs"></td>
            <td><a class="btn-link" href="#">I should be incapable of drawing a single stroke</a></td>
            <td><span class="text-muted">Oct 24, 2014</span></td>
            <td>Sports</td>
            <td><a href="#" class="btn-link">Lucy Doe</a></td>
            <td>
              <div class="label label-table label-warning">Unpublish</div>
            </td>
            <td class="min-width">
              <div class="btn-groups">
                <a href="#" class="btn btn-icon demo-pli-gear icon-lg add-tooltip" data-original-title="Settings" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-file-text-image icon-lg add-tooltip" data-original-title="View post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-pen-5 icon-lg add-tooltip" data-original-title="Edit Post" data-container="body"></a>
                <a href="#" class="btn btn-icon demo-pli-trash icon-lg add-tooltip" data-original-title="Remove" data-container="body"></a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <div>Showing 1 to 10 of 57 entries</div>
      </div>
      <div class="col-sm-7 text-right">
        <ul class="pagination">
          <li class="disabled"><a href="#" class="demo-pli-arrow-left"></a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><span>...</span></li>
          <li><a href="#">20</a></li>
          <li><a href="#" class="demo-pli-arrow-right"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--===================================================-->
  <!--End Posts Table-->
  
  
  
  
</div>
<!--===================================================-->
<!--End page content-->

