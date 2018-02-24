<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Assign Advisory Class</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- ANIMATE CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/animate.css/animate.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css"> 
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/  /3.7.3/html5shiv.min.js"></script>
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
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Assign Advisory Class
        <!-- <small>Student Grades</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-graduation-cap"></i> Academics</a></li>
        <li class="active">Assign Advisory</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-primary" style="font-size: 17px;"><i class="fa fa-star"></i> Advisory Classes</h3>
            </div>
            <div class="box-body">
              <table id= "advisory-table"class="table table-bordered table-striped display nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>Employee ID</th>
                  <th>Full Name</th>
                  <th>Advisory Class</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                  <th>Employee ID</th>
                  <th>Full Name</th>
                  <th>Advisory Class</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>                
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- modal-->
      <div class="modal" id="modal-view">
        <div class="modal-dialog" style="width: 500px;">
              <div class="box box-primary">
                <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-edit text-info"></i>

                <h3 class="box-title text-info">Assign</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
            <div class="box-body box-profile flat">
              <h4 id="modal-status"><b>Teacher Name:</b> -- <span class="badge bg-green status pull-right">assigned</span></h4><hr>
                <div class="form-group" style="margin-bottom: 5px">
                  <label>Strand</label>
                  <select id="select-strand" class="form-control select2" style="width: 100%;" data-placeholder="select strand">
                    <option></option>
                    <?php foreach($strandsInfo as $val) { ?>
                    <option value="<?php echo $val->code;?>"><?php echo $val->code;?></option>
                    <?php } ?>
                  </select>
                </div>  
                <div class="form-group" style="margin-bottom: 5px">
                  <label>Grade</label>
                  <select id="select-year" class="form-control select2" style="width: 100%;" data-placeholder="select grade">
                    <option></option>
                    <option value="1">Grade 11</option>
                    <option value="2">Grade 12</option>
                  </select>
                </div>                   
                <div class="form-group" style="margin-bottom: 7px">
                  <label>Section</label>
                  <select id="select-section" class="form-control select2" style="width: 100%;" data-placeholder="select class">
                    <option></option>
                  </select>
                </div>
                <button id="btn-save" type="button" data-dismiss="modal" style="width: 100px" class="btn btn-sm btn-primary pull-right">Save</button>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.modal-dialog -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {footer}
</div>
<!-- ./wrapper -->

<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- BOOTSTRAP NOTIF -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-notify-3.1.3/dist/bootstrap-notify.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>

<script>
var getSection = '<?php echo base_url('academics/assign_advisory_class/getSection'); ?>';
var updateUrl = '<?php echo base_url('academics/assign_advisory_class/update'); ?>';
var getRecordsUrl = '<?php echo base_url('academics/assign_advisory_class/ajaxGetRecords'); ?>';
var checkSectionUrl = '<?php echo base_url('academics/assign_advisory_class/checkSection'); ?>';
var auditTrailAssignUrl = '<?php echo base_url('academics/assign_advisory_class/auditTrailAssign'); ?>';

  $(function (){
    $('input[type="checkbox"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue'
    })

    $('.select2').select2();
  })
</script>

<!-- page script -->
<script src="<?php echo base_url(); ?>dist/js/academics/assign_advisory.js"></script>

</body>
</html>
