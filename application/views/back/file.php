<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Forms Stuff</a></li>
    <li class="active">File Handling</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE TITLE -->
<div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span> File Handling</h2>
</div>
<!-- END PAGE TITLE -->                

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">
                    <h3><span class="fa fa-mail-forward"></span> File Input</h3>
                    <p>Add class <code>file</code> to file input to get Bootstrap FileInput plugin</p>                                    
                    <form enctype="multipart/form-data" class="form-horizontal">                                        
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Default</label>
                                <?php echo form_open_multipart('c_gallery/do_upload');?>
                                <input type="file" multiple class="file" data-preview-file-type="any"/>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                

  <div class="row">
    <div class="col-md-12">

      <!-- START DEFAULT DATATABLE -->
      <div class="panel panel-default">
        <div class="panel-heading">                                
          <h3 class="panel-title">Default</h3>
          <ul class="panel-controls">
            <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
            <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
          </ul>                                
        </div>
        <div class="panel-body">
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama file</th>
                <th>Subject</th>
                <th>Tanggal</th>
                <th>Seting</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($data_get == NULL) {
                ?>
                <div class="alert alert-info" role="alert">Data masih kosong, tolong di isi!</div>
                <?php
              } else {
                $nomor = 0;
                foreach ($data_get as $row) {
                  $nomor++;
                  ?>
                  <tr>
                    <td height="40"><center><?php echo $nomor; ?></center></td>
                    <td><?php echo $row->filename; ?></td>
                    <td><?php echo $row->subject; ?></td>
                    <td><?php echo $row->dateinsert; ?></td>
                    <td align="center">
                    <a href="<?php echo site_url('outputfiles/pdf'); ?>" class=" btn-warning btn-xs"><span class="fa fa-file-text-o" aria-hidden="true"></span></a>
                      <a href="#" class="mb-control btn-warning btn-xs" data-box="#edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                      <a href="#" class="mb-control btn-danger btn-xs" data-box="#dellete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </td>
                  </tr>
                  <?php
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- END DEFAULT DATATABLE -->
    </div>
  </div>                                

</div>
<!-- PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTENT WRAPPER -->                                    
</div>            
<!-- END PAGE CONTENT -->
</div>
        <!-- END PAGE CONTAINER -->