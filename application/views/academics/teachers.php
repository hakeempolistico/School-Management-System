<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manage Teachers</title>
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
  <!-- Pace style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/pace/pace.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">

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
        Teachers
        <small>temporary message here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Academics</a></li>
        <li class="active">Teachers</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Add Teacher</h3>
              </div>
              <div class="box-body">
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="id-input">Employee ID</label>
                  <label for="name-input" class="text-danger">*</label>
                  <input type="text" class="form-control" id="id-input" placeholder="Teacher Employee ID">
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="firstname-input">First Name</label>
                  <input type="text" class="form-control" id="firstname-input" placeholder="Teacher First Name">
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="middlename-input">Middle Name</label>
                  <input type="text" class="form-control" id="middlename-input" placeholder="Teacher Middle Name">
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="lastname-input">Last Name</label>
                  <input type="text" class="form-control" id="lastname-input" placeholder="Teacher Last Name">
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="major-input">Major</label>
                  <input type="text" class="form-control" id="major-input" placeholder="Teacher Major">
                </div>
                <div class="form-group" style="margin-bottom: 7px">
                  <label for="position-input">Position</label>
                  <input type="text" class="form-control" id="position-input" placeholder="Teacher Position">
                </div>
                <button id="add-btn" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-plus"></i> &nbsp; Add</button>
              </div>
          </div>
        </div>
        <div class="col-lg-8 col-xs-12">

          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Teacher List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="teachersTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>

      </div>

      <div class="modal fade" id="modal-view">
          <div class="modal-dialog" style="max-width: 400px">
              <div class="box box-primary">
                <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-search"></i>

                <h3 class="box-title text-info">View Teacher</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button id="view-edit" type="button" class="btn btn-box-tool" ><i class="fa fa-pencil text-info"></i></button>
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
            <div class="box-body box-profile flat">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('images/alt_picture.jpg');?>" alt="<?php echo base_url('images/alt_picture.jpg');?>"> <br>
              <ul class="list-group list-group-unbordered">
                <li>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-id">Employee ID</label>
                  <input type="text" class="form-control" id="view-id">
                </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-firstname">First Name</label>
                  <input type="text" class="form-control" id="view-firstname">
                </div>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-middlename">Middle Name</label>
                  <input type="text" class="form-control" id="view-middlename">
                </div>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-lastname">Last Name</label>
                  <input type="text" class="form-control" id="view-lastname">
                </div>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-major">Major</label>
                  <input type="text" class="form-control" id="view-major">
                </div>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-position">Position</label>
                  <input type="text" class="form-control" id="view-position">
                </div>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-status">Status</label>
                  <input type="text" class="form-control" id="view-status">
                </div>
                <button id="view-update" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-save"></i> &nbsp; Save</button>
                 
                </li>   
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      <div class="modal fade" id="modal-edit">
          <div class="modal-dialog" style="max-width: 400px">
              <div class="box box-primary">
                <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-pencil"></i>

                <h3 class="box-title text-info">Edit Teacher</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>

            <div class="box-body box-profile flat">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('images/alt_picture.jpg');?>" alt="<?php echo base_url('images/alt_picture.jpg');?>"> <br>
              <ul class="list-group list-group-unbordered">
                <li>
                  <div class="form-group" style="margin-bottom: 5px;">
                    <label for="edit-id">Employee ID</label>
                    <input type="text" class="form-control" id="edit-id">
                  </div>
                    <div class="form-group" style="margin-bottom: 5px;">
                    <label for="edit-firstname">First Name</label>
                    <input type="text" class="form-control" id="edit-firstname">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                    <label for="edit-middlename">Middle Name</label>
                    <input type="text" class="form-control" id="edit-middlename">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                    <label for="edit-lastname">Last Name</label>
                    <input type="text" class="form-control" id="edit-lastname">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                    <label for="edit-major">Major</label>
                    <input type="text" class="form-control" id="edit-major">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                    <label for="edit-position">Position</label>
                    <input type="text" class="form-control" id="edit-position">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                    <label for="edit-status">Status</label>
                    <input type="text" class="form-control" id="edit-status">
                  </div>                  
                  <button id="edit-update" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-save"></i> &nbsp; Save</button>                 
                </li>   
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade in" id="modal-delete">
          <div class="modal-dialog" style="max-width: 320px">
            <div class="box box-danger">
              <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-warning text-danger"></i>

                <h3 class="box-title text-danger">Warning</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body box-profile flat" style="margin-top: -10px">
                <h4>Are you sure you want to delete record?</h4>
                <button id="delete-confirm" data-dismiss="modal" type="button" style="width: 75px" class="btn btn-block btn-danger btn-sm pull-right">Confirm</button>
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
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url('dist/js/academics/teachers.js'); ?>"></script>
  
<script>

  $(document).ajaxStart(function () {
    Pace.restart()
  })
  
</script>

</body>
</html>
