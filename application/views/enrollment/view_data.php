<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | View Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css">
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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

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

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('/') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">School Management</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
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
          <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo site_url('/'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Enrollment</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('enrollment/dashboard'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Dashboard
              </a>
            </li>
            <li  class="active">
              <a href="<?php echo site_url('enrollment/view_data'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  View Data
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('enrollment/enrollstudent'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Enroll Student
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('enrollment/manage_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Manage Student
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                  Manage Schedule
              </a>
            </li>
          </ul>
        </li>
      
        
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-bottom: 400px;">
    <!-- Content Header (Page header) -->
	<div class="alert bg-orange alert-dismissible flat">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-bullhorn"></i> View Data!</h4>
        Practice information discretion at all times to avoid identity thefts and such.
      </div>
    <section class="content-header">
      <h1>
        View Data
        <small>Select table to view</small>
      </h1>
      <ol class="breadcrumb" >
        <li><a href="#"><i class="fa fa-dashboard"></i>Enrollment</a></li>
        <li class="active">View Table</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua" id="viewStudents" style="cursor: pointer;">
            <div class="inner">
              <h3>1200</h3>

              <p>Students</p>
            </div>
            <div class="icon">
              <i class="fa fa-pencil"></i>
            </div>
            <a href="#" class="small-box-footer">View table <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green" id="viewTeachers" style="cursor: pointer;">
            <div class="inner">
              <h3>169</h3>

              <p>Teachers</p>
            </div>
            <div class="icon">
              <i class="fa fa-mortar-board"></i>
            </div>
            <a href="#" class="small-box-footer">View table  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow" id="viewRooms" style="cursor: pointer;">
            <div class="inner">
              <h3>44</h3>

              <p>Rooms</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="#" class="small-box-footer">View table <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red" id="viewClass" style="cursor: pointer;">
            <div class="inner">
              <h3>65</h3>

              <p>Sections</p>
            </div>
            <div class="icon">
              <i class="fa fa-star"></i>
            </div>
            <a href="#" class="small-box-footer">View table <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-xs-12">
          <div id="lapa">
            <div class="alert bg-gray" style="height: 234px;">
                <div>
                <center>
                <i class="icon fa fa-exclamation-triangle fa-4x" style="margin-top: 25px;"></i>
                <h3>No table selected!</h3>
                <h4> Please choose from the above tables to view data</h4>
                </center>
                </div>
            </div>
          </div>
      </div>
    </div>
      <div class="row">
        <div class="col-xs-12">
          <div hidden id = "box" class="box">
            <div class="box-header">
              <h3 class="box-title" id = "tableTitle" >Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>LRN</th>
                  <th>Name</th>
                  <th>Grade</th>
                </tr>
                </thead>
                <tbody>
                <tr id = "record">
                  <td>14-038-014</td>
                  <td>Hakeem Polistico
                  </td>
                  <td>12</td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!--Modal-->
<div class="modal fade" id="modal-default">

          <div class="modal-dialog" style="align-self: center; max-width: 500px">
          <!-- Profile Image -->
          <div class="box box-primary" >
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Adrielle Kristine Nicolette M. Escaro</h3>

              <p class="text-muted text-center">Grade 12 Student</p>
		<div class="row">
        <div class="col-md-6">
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>LRN</b><br> <a>123456789121</a>
                </li>
                <li class="list-group-item">
                  <b>Contact No.</b><br> <a>0997-586-4782</a>
                </li>
                <li class="list-group-item">
                  <b>Birthdate</b><br> <a >July 22, 1994</a>
                </li>
                <li class="list-group-item">
                  <b>Birthplace</b> <br><a>Mandaluyong City</a>
                </li>
                <li class="list-group-item">
                  <b>Age</b><br> <a>23</a>
                </li>
                <li class="list-group-item">
                  <b>Mother Tongue</b><br> <a>Filipino</a>
                </li>
                <li class="list-group-item">
                  <b>Religion</b> <br><a>Roman Catholic</a>
                </li>
                <li class="list-group-item">
                  <b>Address</b> <br><a>226-B Evangelista St.,</a><br><a>Talaba I, Bacoor City</a><br><a>Cavite</a><br>
                </li>
				</ul>
			</div>
			<div class="col-md-6">
			<ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Sex</b> <br><a>Male</a>
                </li>
				<li class="list-group-item">
                  <b>Father's Name</b> <br><a >Tom Cruise</a>
                </li>
				<li class="list-group-item">
                  <b>Father's Contact No</b> <br><a>0997-555-5555</a>
                </li>
				<li class="list-group-item">
                  <b>Mother's Maiden Name</b> <br><a>Marissa Tomei</a>
                </li>
				<li class="list-group-item">
                  <b>Mother's Contact No</b> <br><a>0997-555-5555</a>
                </li>
				<li class="list-group-item">
                  <b>Guardian's Name</b><br> <a>Michael</a>
                </li>
				<li class="list-group-item">
                  <b>Guardian's Relationship</b> <br><a>Guardian Angel</a>
                </li>
				<li class="list-group-item">
                  <b>Guardian's Contact No</b> <br><a>0997-555-5555</a>
                </li>
				</ul>
			</div>
			</div>
				<ul class="list-group list-group-unbordered">
				<li class="list-group-item">
					<strong><i class="fa fa-book margin-r-5"></i> Note</strong>
	
					 <p class="text-muted">
						B.S. in Information System in Technological University of the Philippines
					 </p>
				</li>
				
				<li class="list-group-item">
					<strong><i class="fa fa-book margin-r-5"></i> Requirements</strong>
	
					  <select class="form-control select2" multiple="multiple" id="inputREQUIREMENTS" data-placeholder="Select Requirement" style="width: 100%;">
              <option id="f137">Form 137</option>
              <option id="f138">Form 138</option>
              <option id="nso">NSO Birth Certificate</option>
            </select>

				</li>
              </ul>
              <a href="#" class="btn btn-primary btn-block pull-left" data-dismiss="modal" style="max-width: 100px"><b>Close</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

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
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- page script -->
<script>

  var arrofobject = [{"lrn":"14-038-027","name":"Adrii", "year":"12", "status": "ENROLLED"}];
  var arrofobject2 = [{"lrn":"14-038-014","name":"Hakeem", "year":"12"}];
  var arrofobject3 = [{"lrn":"14-038-013","name":"Jasver", "year":"12"}];
  var arrofobject4 = [{"lrn":"14-038-015","name":"Marc", "year":"12"}]; //JSON

  $(document).ready(function(){ 
    
		function changeTable(){
			$('table').DataTable().destroy();
			$('#box').removeAttr('hidden'); 
			$('table th').remove(); 
			$('#record').remove();
			$('#lapa').remove();
		};
		$("#viewStudents").click(function(){ 
			changeTable();
			$('#tableTitle').text('List of Students');
			$('thead tr').append( $('<th />', {text : 'LRN'}) );
			$('thead tr').append( $('<th />', {text : 'Name'}) ); 
			$('thead tr').append( $('<th />', {text : 'Grade'}) ); 
			$('thead tr').append( $('<th />', {text : 'Status'}) ); 
			$('thead tr').append( $('<th />', {text : 'Action'}) ); 

			$.each(arrofobject, function(index, val) {
				$('tbody').append('<tr id="record"><td>'+val.lrn+'</td><td>'+val.name+'</td><td>'+val.year+'</td> <td><span class="label label-success">'+val.status+'</span></td> <td><button id="buttonView" type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-block btn-info btn-flat btn-xs" style="max-width: 100px; display:block;margin: auto;">View</button></td> </div> </tr>');
				});
				
				$("#buttonView").click(function(){
					$.ajax({
					url: "<?php echo base_url("enrollment/view_data/ajax"); ?>", 
						success: function(result){
							alert(result);
						}
					});
				});
					
		 $('table').DataTable();
		});
		
		$("#viewTeachers").click(function(){ 
			changeTable();
			$('#tableTitle').text('List of Teachers');
			$('thead tr').append( $('<th />', {text : 'LRN'}) );
			$('thead tr').append( $('<th />', {text : 'Name'}) ); 
			$('thead tr').append( $('<th />', {text : 'Grade'}) ); 
			$('thead tr').append( $('<th />', {text : 'Action'}) ); 

			$.each(arrofobject2, function(index, val) {
				$('tbody').append('<tr id="record"><td>'+val.lrn+'</td><td>'+val.name+'</td><td>'+val.year+'</td> <td><button id="buttonView" type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-block btn-info btn-flat btn-xs" style="max-width: 100px; display:block;margin: auto;">View</button></td> </div> </tr>');
				});
					
		 $('table').DataTable();
		});
		
		$("#viewRooms").click(function(){ 
			changeTable();
			$('#tableTitle').text('List of Rooms');
			$('thead tr').append( $('<th />', {text : 'LRN'}) );
			$('thead tr').append( $('<th />', {text : 'Name'}) ); 
			$('thead tr').append( $('<th />', {text : 'Grade'}) ); 
			$('thead tr').append( $('<th />', {text : 'Action'}) ); 

			$.each(arrofobject3, function(index, val) {
				$('tbody').append('<tr id="record"><td>'+val.lrn+'</td><td>'+val.name+'</td><td>'+val.year+'</td> <td><button id="buttonView" type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-block btn-info btn-flat btn-xs" style="max-width: 100px; display:block;margin: auto;">View</button></td> </div> </tr>');
				});
					
		 $('table').DataTable();
		});
		
		$("#viewClass").click(function(){ 
			changeTable();
			$('#tableTitle').text('List of Classes');
			$('thead tr').append( $('<th />', {text : 'LRN'}) );
			$('thead tr').append( $('<th />', {text : 'Name'}) ); 
			$('thead tr').append( $('<th />', {text : 'Grade'}) ); 
			$('thead tr').append( $('<th />', {text : 'Action'}) ); 

			$.each(arrofobject4, function(index, val) {
				$('tbody').append('<tr id="record"><td>'+val.lrn+'</td><td>'+val.name+'</td><td>'+val.year+'</td> <td><button id="buttonView" type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-block btn-info btn-flat btn-xs" style="max-width: 100px; display:block;margin: auto;">View</button></td> </div> </tr>');
				});
					
		 $('table').DataTable();
		});
		
}); 


</script> 

<script type="text/javascript">
  //Initialize Select2 Elements
    $('.select2').select2()
</script>

</body>
</html>
