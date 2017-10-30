<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manage Subjects</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Pace style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/pace/pace.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
        Subjects
        <small>temporary message here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Academics</a></li>
        <li class="active">Subjects</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Add Subjects</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="form-group"style="margin-bottom: 5px;">
                    <label for="code-input">Code</label>
                    <label for="name-input" class="text-danger">*</label>
                    <input type="text" class="form-control" id="code-input" placeholder="Subject Code" required>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                    <label for="name-input">Name</label>
                    <label for="name-input" class="text-danger">*</label>
                    <input type="text" class="form-control" id="name-input" placeholder="Subject Name" required>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                    <label for="type-input">Type</label>
                    <input type="text" class="form-control" id="type-input" placeholder="Subject Type">
                  </div>
                  <div class="form-group" style="margin-bottom: 7px;">
                    <label for="description-input">Description</label>
                    <input type="text" class="form-control" id="description-input" placeholder="Subject Description">
                  </div>
                  <button id="add-btn" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right">Add</button>
              </div>
          </div>
        </div>
        <div class="col-lg-8 col-xs-12">

          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Subject List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="subjectsTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tfoot>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>

        <div class="modal fade in" id="modal-view">
          <div class="modal-dialog" style="max-width: 400px">
              <div class="box box-primary">

              <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-search"></i>

                <h3 class="box-title text-info">View Subject</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button id="view-edit" type="button" class="btn btn-box-tool" ><i class="fa fa-pencil text-info"></i></button>
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>

            <div class="box-body box-profile flat ">

              <ul class="list-group list-group-unbordered">
                <li>
                <div class="form-group">
                  <label for="view-code">Code</label>
                  <input type="text" class="form-control" id="view-code" placeholder="subject code" value="Subject Code">
                </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-name">Name</label>
                  <input type="text" class="form-control" id="view-name" placeholder="subject name" value="Subject Name">
                </div>
                <div class="form-group"style="margin-bottom: 5px;">
                  <label for="view-type">Type</label>
                  <input type="text" class="form-control" id="view-type" placeholder="subject type" value="Subject Type">
                </div>
                <div class="form-group">
                  <label for="view-description">Description</label>
                  <textarea type="text" class="form-control" id="view-description" placeholder="subject description">Subject Description </textarea>
                </div>                
                <button id="view-update" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right">Update</button>
                 
                </li>                
              </ul>
             
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal fade in" id="modal-edit">
          <div class="modal-dialog" style="max-width: 400px">              
            <div class="box box-primary">
              <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-pencil"></i>
                <h3 class="box-title">Edit Subject</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body box-profile flat ">
              <ul class="list-group list-group-unbordered">
                <li>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="edit-code">Code</label>
                  <input type="text" class="form-control" id="edit-code" placeholder="subject code">
                </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                  <label for="edit-name">Name</label>
                  <input type="text" class="form-control" id="edit-name" placeholder="subject name">
                </div>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="edit-type">Type</label>
                  <input type="text" class="form-control" id="edit-type" placeholder="subject type">
                </div>
                <div class="form-group">
                  <label for="edit-description">Description</label>
                  <textarea type="text" class="form-control" id="edit-description" placeholder="subject description" value="THIS IS DESCRIPTION SECTION"> </textarea>
                </div>
                <button id="edit-update" type="button" style="width: 100px; margin-top: -10px;" class="btn btn-sm btn-block btn-primary pull-right">Update</button>
                 
                </li>                
              </ul>
             
            </div>
            <!-- /.box-body -->
          </div>
        </div>
          <!-- /.modal-dialog -->
      </div>

        <div class="modal fade in" id="modal-delete">
          <div class="modal-dialog" style="max-width: 320px">
            <div class="box box-primary">
              <div class="box-body box-profile flat ">
                <h4>Are you sure you want to delete record?</h4>
                <button id="delete-confirm" data-dismiss="modal" type="button" style="width: 75px" class="btn btn-block btn-primary btn-sm pull-right">Confirm</button>
                <button data-dismiss="modal" type="button" style="width: 75px" class="btn btn-sm btn-block btn-danger">Cancel</button>
              </div>
            </div>
          </div>
        </div>
              
                 
                </li>                
              </ul>
             
            </div>
            <!-- /.box-body -->
          </div>
          {footer}
          </div>
          <!-- /.modal-dialog -->
        </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>

  $(document).ajaxStart(function () {
    Pace.restart()
  })

</script>

<script src="<?php echo base_url(); ?>dist/js/academics/subjects.js"></script>
</body>
</html>
