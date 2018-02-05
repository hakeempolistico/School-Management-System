<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | View Grades</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Pace style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/pace/pace.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css"> 
  <!-- ANIMATE CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/animate.css/animate.css">
  <!-- Bootstrap Toggle -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-toggle/toggle.css"> 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
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
  <style type="text/css">
  </style>
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
    <section class="content-header" style="margin-bottom: -10px">
      <h1>
        System Lock
        <small>System Lock</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-user"></i> Student Details</a></li>
        <li class="active">Student Details</li>
      </ol>
    </section>
    <style type="text/css">
      th, td {
          vertical-align: middle;
      }
      .font-century-gothic {
        font-family: Century Gothic;
      }
    </style>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-4 col-sm-12 col-xs-12">
          <h1 style="font-size: 23px">
            <small><b>User  </b></small>
          </h1>
          <select id="select-user" data-placeholder="Select User" class="form-control select2" style="width: 100%;">
            <option></option>
            <option value="admin">Admin</option>
            <option value="super_user">Super User</option>
            <option value="user">User</option>
          </select>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h1 style="font-size: 23px">
            <small><b>System Modules  </b></small>
          </h1>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-file-text"></i></span>

            <div class="info-box-content">
              <span class="info-box-number pull-right"><input type="checkbox" class="toggle Enrollment-toggle" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
              <span class="info-box-number text-primary" >Enrollment</span>
              <span class="">Details here</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-mortar-board"></i></span>

            <div class="info-box-content">
              <span class="info-box-number pull-right"><input type="checkbox" class="toggle Academics-toggle toggle-academics" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
              <span class="info-box-number text-primary">Academics</span>
              <span class="">Details here</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-id-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-number pull-right"><input type="checkbox" class="toggle Student-Promotion-toggle" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
              <span class="info-box-number text-primary">Student Promotion</span>
              <span class="">Details here</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-teal"><i class="fa fa-star"></i></span>

            <div class="info-box-content">
              <span class="info-box-number pull-right"><input type="checkbox" class="toggle Grades-Management-toggle" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
              <span class="info-box-number text-primary">Grades Management</span>
              <span class="">Details here</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-teal"><i class="fa fa-star"></i></span>

            <div class="info-box-content">
              <span class="info-box-number pull-right"><input type="checkbox" class="toggle Advisory-Class-toggle" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
              <span class="info-box-number text-primary">Advisory Class</span>
              <span class="">Details here</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-teal"><i class="fa fa-star"></i></span>

            <div class="info-box-content">
              <span class="info-box-number pull-right"><input type="checkbox" class="toggle Audit-Trail-toggle" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
              <span class="info-box-number text-primary">Audit Trail</span>
              <span class="">Details here</span>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-teal"><i class="fa fa-star"></i></span>

            <div class="info-box-content">
              <span class="info-box-number pull-right"><input type="checkbox" class="toggle Reports-toggle" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
              <span class="info-box-number text-primary">Reports</span>
              <span class="">Details here</span>
            </div>
          </div>
        </div>
   
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h1 style="font-size: 23px">
            <small><b>Academics Sub-Module</b></small>
          </h1>
        </div>


            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua-active"><i class="fa fa-tag"></i></span>

                <div class="info-box-content">
                  <span class="info-box-number pull-right"><input type="checkbox" class="toggle Strands-toggle toggle-acad" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
                  <span class="info-box-number text-primary">Strands</span>
                  <span class="">Details here</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-olive-active "><i class="fa fa-university"></i></span>

                <div class="info-box-content">
                  <span class="info-box-number pull-right"><input type="checkbox" class="toggle Rooms-toggle toggle-acad" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
                  <span class="info-box-number text-primary">Rooms</span>
                  <span class="">Details here</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-star"></i></span>

                <div class="info-box-content">
                  <span class="info-box-number pull-right"><input type="checkbox" class="toggle Sections-toggle toggle-acad" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
                  <span class="info-box-number text-primary">Sections</span>
                  <span class="">Details here</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red-active"><i class="fa fa-book"></i></span>

                <div class="info-box-content">
                  <span class="info-box-number pull-right"><input type="checkbox" class="toggle Subjects-toggle toggle-acad" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
                  <span class="info-box-number text-primary">Subjects</span>
                  <span class="">Details here</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-lime"><i class="fa fa-key"></i></span>

                <div class="info-box-content">
                  <span class="info-box-number pull-right"><input type="checkbox" class="toggle Curriculum-toggle toggle-acad" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
                  <span class="info-box-number text-primary">Curriculum</span>
                  <span class="">Details here</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-check-square-o"></i></span>

                <div class="info-box-content">
                  <span class="info-box-number pull-right"><input type="checkbox" class="toggle Assign-Subjects-toggle toggle-acad" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
                  <span class="info-box-number text-primary">Assign Subjects</span>
                  <span class="">Details here</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-maroon"><i class="fa fa-calendar"></i></span>

                <div class="info-box-content">
                  <span class="info-box-number pull-right"><input type="checkbox" class="toggle Schedule-toggle toggle-acad" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
                  <span class="info-box-number text-primary">Schedule</span>
                  <span class="">Details here</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-purple"><i class="fa fa-th-large"></i></span>

                <div class="info-box-content">
                  <span class="info-box-number pull-right"><input type="checkbox" class="toggle Assign-Advisory-toggle toggle-acad" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
                  <span class="info-box-number text-primary">Assign Advisory</span>
                  <span class="">Details here</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-orange"><i class="fa fa-star"></i></span>

                <div class="info-box-content">
                  <span class="info-box-number pull-right"><input type="checkbox" class="toggle Teachers-toggle toggle-acad" data-toggle="toggle" data-onstyle="primary" data-offstyle="danger" data-size="mini" data-on="<i class='fa fa-check'></i>" data-off="<i class='fa fa-close'></i>"></span>
                  <span class="info-box-number text-primary">Teachers</span>
                  <span class="">Details here</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
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
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>bower_components/Chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- Bootstrap Toggle -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-toggle/toggle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- Page Script -->
<script src="<?php echo base_url(); ?>dist/js/settings/lock.js"></script>

<script>

  var updateUrl = '<?php echo base_url('settings/lock/ajaxUpdate'); ?>';
  var updateRecordUrl = '<?php echo base_url('settings/lock/ajaxUpdateRecord'); ?>';
  var ajaxGetPermissionUrl = '<?php echo base_url('settings/lock/ajaxGetPermission'); ?>';

  $('.select2').select2();
  $(document).ajaxStart(function () {
    Pace.restart()
  })

  function toggleOn() {
    $('.toggle').bootstrapToggle('on');
  }
  function toggleOff() {
    $('.toggle').bootstrapToggle('off')  
  }


</script>

<!-- page script -->

</body>
</html>
