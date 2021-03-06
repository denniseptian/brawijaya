<!-- START BREADCRUMB -->
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>                    
  <li><a href="#">Tables</a></li>
  <li class="active">Data Tables</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE TITLE -->
<div class="page-title">                    
  <h2><span class="glyphicon glyphicon-th-list"></span> list Admin login time</h2>
</div>
<!-- END PAGE TITLE -->                

<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                

  <div class="row">
    <div class="col-md-12">

      <!-- START DEFAULT DATATABLE -->
      <div class="panel panel-default">
        <div class="panel-heading">                                
          <h3 class="panel-title">Log list</h3>
          <ul class="panel-controls">
            <li><a href="#" class="mb-control" data-box="#print-to-pdf-page"><span class="fa fa-file-text-o"></span></a></li>
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
                <th>ID User</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Seting</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($adminlog == NULL) {
                ?>
                <div class="alert alert-info" role="alert">Data masih kosong, tolong di isi!</div>
                <?php
              } else {
                $nomor = 0;
                foreach ($adminlog as $row) {
                  $nomor++;
                  ?>
                  <tr>
                    <td height="40"><center><?php echo $nomor; ?></center></td>
                    <td><?php echo $row->id_user; ?></td>
                    <td><?php echo $row->date; ?></td>
                    <td><?php echo $row->time; ?></td>
                    <td align="center">
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
<!-- END PAGE CONTENT -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="<?php echo base_url('assets/audio/alert'); ?>" id="dellete">
  <div class="mb-container">
    <div class="mb-middle">
      <div class="mb-title"><span class="glyphicon glyphicon-trash"></span><strong>Dellete</strong> ?</div>
      <div class="mb-content">
        <p>Are you sure want to delete this post?</p>                    
        <p>Press "No" if youwant to continue work. Press Yes to continue dellete this post.</p>
      </div>
      <div class="mb-footer">
        <div class="pull-right">
          <a href="<?php echo site_url('post/delete/' . $row->id_post); ?>" class="btn btn-success btn-lg">Yes</a>
          <button class="btn btn-default btn-lg mb-control-close">No</button>
        </div>
      </div>
    </div>
  </div>
</div><!--END MESSAGE BOX-->
<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="edit">
  <div class="mb-container">
    <div class="mb-middle">
      <div class="mb-title"><span class="glyphicon glyphicon-pencil"></span><strong>Edit</strong> ?</div>
      <div class="mb-content">
        <p>Are you sure want to Edit this post?</p>                    
        <p>Press "No" if youwant to continue work. Press Yes to continue Edit this post.</p>
      </div>
      <div class="mb-footer">
        <div class="pull-right">
          <a href="<?php echo site_url('post/edit/' . $row->id_post); ?>" class="btn btn-success btn-lg">Yes</a>
          <button class="btn btn-default btn-lg mb-control-close">No</button>
        </div>
      </div>
    </div>
  </div>
</div><!--END MESSAGE BOX-->
<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="print-to-pdf-page">
  <div class="mb-container">
    <div class="mb-middle">
      <div class="mb-title"><span class="fa fa-file-text-o"></span><strong> Print to PDF?</strong></div>
      <div class="mb-content">
        <p>Are you sure want print to PDF this data?</p>                    
        <p>Press "No" if youwant to continue work. Press Yes to continue print.</p>
      </div>
      <div class="mb-footer">
        <div class="pull-right">
          <a href="<?php echo site_url('outputfiles/logpdf') ?>" class="btn btn-success btn-lg">Yes</a>
          <button class="btn btn-default btn-lg mb-control-close">No</button>
        </div>
      </div>
    </div>
  </div>
</div><!--END MESSAGE BOX-->