<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div hidden class="loading">Loading&#8230;</div>
  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('/') ?>" class="logo" style="background: rgb(97, 22, 35)">
     {logo}
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #6C1827">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="user-image" alt="<?php echo base_url('images/alt_picture.jpg');?>">
              <span class="hidden-xs"><?php echo $this->session->first_name." ".$this->session->last_name ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="background-color: #6C1827">
                <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="img-circle" alt="<?php echo base_url('images/alt_picture.jpg');?>">

                <p>
                 <?php echo $this->session->first_name." ".$this->session->last_name." - ".$this->session->position ?>
                  <small>Member since <?php echo $this->session->date_created ?></small>
                </p>
              </li>              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="img-circle" alt="<?php echo base_url('images/alt_picture.jpg');?>">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->first_name." ".$this->session->last_name ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo site_url('/'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Enrollment</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('enrollment/dashboard'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Dashboard
              </a>
            </li> 
            <li>
              <a href="<?php echo site_url('enrollment/register_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Register Student
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('enrollment/enroll_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Enroll Student
              </a>
            </li>
          </ul>
          
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-mortar-board"></i>
            <span>Academics</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('academics/strands'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Strands
              </a>
            </li>
            <li class="active">
              <a href="<?php echo site_url('academics/teachers'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Teachers
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('academics/sections'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Sections
              </a>
            </li>          
            <li>
              <a href="<?php echo site_url('academics/subjects'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Subjects
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('academics/assign_subjects'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Assign Subjects
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('academics/schedule'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Schedule
              </a>
            </li>
          </ul>
          
        </li>
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-id-card"></i>
            <span>Student Information</span>
            <span class="pull-right-container">
              <span class="label label-warning pull-right">soon</span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('enrollment/dashboard'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Details
              </a>
            </li>         
            <li>
              <a href="<?php echo site_url('enrollment/register_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Grades
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('enrollment/enroll_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Promotion
              </a>
            </li>
          </ul>          
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <span class="label label-warning pull-right">soon</span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('enrollment/dashboard'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Reports
              </a>
            </li>         
            <li>
              <a href="<?php echo site_url('enrollment/register_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Grade Reports
              </a>
            </li>            
          </ul>          
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <span class="label label-warning pull-right">soon</span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('enrollment/dashboard'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                User Management
              </a>
            </li>                               
          </ul>          
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

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
                  <input type="text" class="form-control" id="id-input">
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="firstname-input">First Name</label>
                  <input type="text" class="form-control" id="firstname-input">
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="middlename-input">Middle Name</label>
                  <input type="text" class="form-control" id="middlename-input">
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="lastname-input">Last Name</label>
                  <input type="text" class="form-control" id="lastname-input">
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="major-input">Major</label>
                  <input type="text" class="form-control" id="major-input">
                </div>
                <div class="form-group" style="margin-bottom: 7px">
                  <label for="position-input">Position</label>
                  <input type="text" class="form-control" id="position-input">
                </div>
                <button id="add-btn" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right">Add</button>
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
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>Employee ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Position</th>
                  <th>Status</th>
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
            <div class="modal-content" >
              <div class="box box-primary">
            <div class="box-body box-profile flat">
              <img class="profile-user-img img-responsive img-circle" src="http://sms.local/dist/img/user4-128x128.jpg" alt="<?php echo base_url('images/alt_picture.jpg');?>"> <br>
              <a id="view-edit" class="btn btn-default btn-xs pull-right"><span class="fa fa-fw fa-pencil"></span></a>
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
                <a href="#" class="btn btn-sm btn-danger pull-left" data-dismiss="modal" style="width: 100px">Close</a>                
                <button id="view-update" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right">Update</button>
                 
                </li>   
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      <div class="modal fade" id="modal-edit">
          <div class="modal-dialog" style="max-width: 400px">
            <div class="modal-content" >
              <div class="box box-primary">
            <div class="box-body box-profile flat">
              <img class="profile-user-img img-responsive img-circle" src="http://sms.local/dist/img/user4-128x128.jpg" alt="<?php echo base_url('images/alt_picture.jpg');?>"> <br>
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
                  <a href="#" class="btn btn-sm btn-danger pull-left" data-dismiss="modal" style="width: 100px">Close</a>                
                  <button id="edit-update" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right">Update</button>                 
                </li>   
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

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
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo base_url('dist/js/academics/teachers.js'); ?>"></script>
  
<script>
</script>

</body>
</html>
