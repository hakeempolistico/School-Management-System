<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | User Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users
        <!-- <small></small> -->
      </h1>
      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-user"></i> Users Management</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-primary"><i class="fa fa-users"></i> Users List</h3>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-6 no-padding">
              <div class="form-group">
                <label>Filter by:</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Student</option>
                  <option>Teacher</option>
                </select>

              </div>
              </div>
              <table id="UsersTable" class="table table-bordered table-striped display nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>123</td>
                  <td>Havanahunana</td>
                  <td>Teacher</td>
                  <td><span class="label label-success">Active</span></td>
                  <td><button class="btn btn-xs btn-primary"><i class="fa fa-search "></i></button></td>
                </tr>
                <tr>
                  <td>123</td>
                  <td>Havanahunana</td>
                  <td>Teacher</td>
                  <td><span class="label label-success">Active</span></td>
                  <td><button class="btn btn-xs btn-primary"><i class="fa fa-search "></i></button></td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            </div>
          </div>
        </div>
        <!-- /.row-->
        <div class="modal fade" id="modal-add">
          <div class="modal-dialog" style="max-width: 900px">
              <div class="box box-primary">
                <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-user text-primary"></i>

                <h3 class="box-title text-primary">Add Users</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
            <div class="box-body box-profile flat">
              <div class="table-responsive">
              <table id="teacher-table" class="table table-bordered table-striped display nowrap" cellspacing="0" width="100%" >
                <thead>
                <tr>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>123</td>
                    <td>OneTwoThree</td>
                    <td>Department Head</td>
                    <td><span class="label label-success">Active</span></td>
                    <td><button data-toggle="modal" data-target="#modal-confirm" class="btn btn-primary btn-xs">Activate User</button></td>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="modal fade" id="modal-confirm">
        <div class="modal-dialog" style="max-width: 400px">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-check"></i> Confirmation Message!</h3>
            </div>
            <div class="panel-body">
              <p>Are you sure you want to activate user?</p>              
              <button data-dismiss="modal" type="button" id="btn-confirm" style="width: 100px" class="btn btn-sm btn-block btn-success pull-right"><i class="fa fa-check"></i> &nbsp; Confirm</button>
            </div>
          </div>
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
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>bower_components/Chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- page script -->
<script src="<?php echo base_url(); ?>dist/js/enrollment/dashboard.js"></script>
<script src="<?php echo base_url(); ?>dist/js/settings/user_management.js"></script>
</body>
</html>
