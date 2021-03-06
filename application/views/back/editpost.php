<!-- START BREADCRUMB -->
<ul class="breadcrumb push-down-0">
  <li><a href="#">Home</a></li>
  <li><a href="#">Pages</a></li>
  <li class="active">Calendar</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                

  <div class="row">
    <div class="col-md-12">

      <!-- START DEFAULT DATATABLE -->
      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
        <div class="panel-heading"><b>Form Upload Image</b></div>
        <div class="panel-body">
          <form action="<?php echo site_url('post/update') ?>" method="post" enctype="multipart/form-data">
            <table class="table table-striped">
              <tr>
                <td style="width:15%;">Nama paket wisata</td>
                <td>
                  <div class="col-sm-6">
                    <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Destinasi wisata</td>
                <td>
                  <div class="col-sm-6">
                    <input type="text" name="destination" class="form-control" value="<?php echo $destination ?>">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Detail tentang wisata</td>
                <td>
                  <div class="col-sm-6">
                    <textarea name="subject" class="form-control" ><?php echo $subject ?></textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Durasi wisata</td>
                <td>
                  <div class="col-sm-1">
                    <input type="number" name="duration" class="form-control" value="<?php echo $duration ?>">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Cuplikan gambar</td>
                <td>
                  <div class="col-sm-6">
                    <input type="file" name="filefoto" class="form-control" value="">
                  </div>
                </td>
              </tr>
              <tr>
                <td style="width:15%;">Jadwal wisata</td>
                <td>
                  <div class="col-md-12">
                    <textarea name="task" id='edit' style="margin-top: 30px;" placeholder="Type some text"><?php echo $task ?>
                    </textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <input type="hidden" name="id" value="<?php echo $id_post ?>" />
                  <input type="submit" name="mit" class="btn btn-success" value="Simpan">
                  <button type="reset" class="btn btn-default">Batal</button>
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>    <!-- /panel -->
      <!-- END DEFAULT DATATABLE -->
    </div>
  </div>                                

</div>
<!-- PAGE CONTENT WRAPPER -->  

<!-- /container -->