<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student Reports</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Datatable buttons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/buttons.dataTables.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- Loading -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/googlefont.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div hidden class="loading">Loading&#8230;</div>
  <?=$template?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- <div class="alert alert-success alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Day 1 of Enrollment is successful!</h4>
        Congratulations! Job well done! Please do the same on Day 2 of Enrollment!
     </div> -->
     <div id="alert-box" class="alert alert-danger alert-dismissible flat" hidden>
      <button type="button" class="close" aria-hidden="true">&times;</button>
      <h4 id="alert-title"><i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!</h4>
        <div id="alert-message">Subject code already used. Please use another one.</div>
     </div>
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Reports
        <small>Print reports regarding student information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Academics</a></li>
        <li class="active">Strands</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Search Criteria</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <?php if(isset($criteria['semester']) || isset($criteria['quarter']) || isset($criteria['section_id'])) { ?>
                  <div class="row">
                    <?php if(isset($criteria['semester'])) { ?>
                      <div class="col-lg-3 col-xs-12">
                        <h5 style="color: darkgrey"><b>Semester</b></h5>
                        <h5><b><?php echo $criteria['semester'];?></b></h5>
                      </div>
                    <?php } ?>
                    <?php if(isset($criteria['quarter'])) { ?>
                      <div class="col-lg-3 col-xs-12">
                        <h5 style="color: darkgrey"><b>Quarter</b></h5>
                        <h5><b><?php echo $criteria['quarter'];?></b></h5>
                      </div>
                    <?php } ?>
                    <?php if(isset($criteria['section_id'])) { ?>
                      <div class="col-lg-3 col-xs-12">
                        <h5 style="color: darkgrey"><b>Section</b></h5>
                        <h5><b><?php echo $criteria['section_id'];?></b></h5>
                      </div>
                    <?php } ?>
                  </div>
                  <hr style="margin: 0px">
                <?php } ?>
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <div class="box-title">Column Display</div>
                <div class="box-title text-gray" style="font-size: 15px">(max of 5)</div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-2 col-xs-12">
                    <div class="checkbox">
                      <label style="margin-right: 15px;">
                        <input id="cb-lrn" type="checkbox" checked>
                        LRN
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-2 col-xs-12">
                    <div class="checkbox">
                      <label style="margin-right: 15px;">
                        <input id="cb-name" type="checkbox" checked>
                        Name
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-2 col-xs-12">
                    <div class="checkbox">
                      <label style="margin-right: 15px;">
                        <input id="cb-sex" type="checkbox" checked>
                        Sex
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-2 col-xs-12">
                    <div class="checkbox">
                      <label style="margin-right: 15px;">
                        <input id="cb-contact" type="checkbox" checked>
                        Contact
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-2 col-xs-12">
                    <div class="checkbox">
                      <label style="margin-right: 15px;">
                        <input id="cb-birthdate" type="checkbox" checked>
                        Birthdate
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-2 col-xs-12">
                    <div class="checkbox">
                      <label style="margin-right: 15px;">
                        <input id="cb-address" type="checkbox" checked>
                        Address
                      </label>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Search Results</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Gen. Ave</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($stud_grades as $v) {?>
                  <tr>
                    <td>-</td>
                    <td><?php echo $v['full_name']; ?></td>
                    <td><?php echo $v['ave']; ?> </td>
                  </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Gen. Ave</th>
                </tr>
                </tfoot>
              </table>                
              </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  {footer}
</div>
<!-- ./wrapper -->

<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- DataTable buttons -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/vfs_fonts.js"></script>


<script>
var t = $('#example2').DataTable({
  'paging'      : true,
  'lengthChange': false,
  'searching'   : false,
  'ordering'    : true,
  'info'        : true,
  'autoWidth'   : false,
  'pageLength'  : 50, 
  "order": [[ 2, "desc" ]],
  dom: 'Bfrtip',
  buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
})

t.on( 'order.dt search.dt', function () {
    t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
    } );
} ).draw();

$("#cb-lrn").change(function() {
  if(this.checked) {
    $('#example2').DataTable().column( 0 ).visible( true );
  }
  else if(!this.checked) {
    $('#example2').DataTable().column( 0 ).visible( false );
  }
});

$("#cb-name").change(function() {
  if(this.checked) {
    $('#example2').DataTable().column( 1 ).visible( true );
  }
  else if(!this.checked) {
    $('#example2').DataTable().column( 1 ).visible( false );
  }
});

$("#cb-sex").change(function() {
  if(this.checked) {
    $('#example2').DataTable().column( 2 ).visible( true );
  }
  else if(!this.checked) {
    $('#example2').DataTable().column( 2 ).visible( false );
  }
});

$("#cb-contact").change(function() {
  if(this.checked) {
    $('#example2').DataTable().column( 3 ).visible( true );
  }
  else if(!this.checked) {
    $('#example2').DataTable().column( 3 ).visible( false );
  }
});

$("#cb-birthdate").change(function() {
  if(this.checked) {
    $('#example2').DataTable().column( 4 ).visible( true );
  }
  else if(!this.checked) {
    $('#example2').DataTable().column( 4 ).visible( false );
  }
});

$("#cb-address").change(function() {
  if(this.checked) {
    $('#example2').DataTable().column( 4 ).visible( true );
  }
  else if(!this.checked) {
    $('#example2').DataTable().column( 4 ).visible( false );
  }
});
</script>
</body>
</html>
