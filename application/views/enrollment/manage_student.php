<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Manage Student</title>
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
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">

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
            <li>
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
            <li  class="active">
              <a href="<?php echo site_url('enrollment/manage_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Manage Student
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('enrollment/manage_schedule'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Manage Schedule
              </a>
            </li>
          </ul>
        </li>
      
        
        <li class="header">LABELS</li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="alert bg-red alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Danger!</h4>
        There are no schedules, subjects, and classes! Create one below.
     </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Students
        <!--<small>Control panel</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li class="active">Manage Students</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="row">
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-green" id="stem_list" style="cursor: pointer;">
            <div class="inner">
              <h3>STEM</h3>

              <p>Science, Technology,<br> Engineering, and Mathematics</p>
            </div>
            <div class="icon">
              <i class="fa fa-flask"></i>
            </div>
            <div class="small-box-footer">View Students <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-maroon" id="gas_list" style="cursor: pointer;">
            <div class="inner">
              <h3>GAS</h3>

              <p>General<br>Academic Strand</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <div class="small-box-footer">View Students <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-yellow" id="humss_list" style="cursor: pointer;">
            <div class="inner">
              <h3>HUMSS</h3>

              <p>Humanities<br>and Social Sciences</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <div class="small-box-footer">View Students <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-purple" id="abm_list" style="cursor: pointer;">
            <div class="inner">
              <h3>ABM</h3>

              <p>Accountancy<br>and Business Management</p>
            </div>
            <div class="icon">
              <i class="fa fa-briefcase"></i>
            </div>
            <div class="small-box-footer">View Students <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>

        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-blue" id="tvlhe_list" style="cursor: pointer;">
            <div class="inner">
              <h3>TVL-HE</h3>

              <p>Technology-Vocational<br>Livelihood: Home Economics</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <div class="small-box-footer">View Students <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>

        <div class="col-lg-4 col-xs-4">
          <!-- small box -->
          <div class="small-box bg-navy" id="tvlas_list" style="cursor: pointer;">
            <div class="inner">
              <h3>TVL-AS</h3>

              <p>Technogy-Vocational<br>Livelihood: Automotive Services</p>
            </div>
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="small-box-footer">View Students <i class="fa fa-arrow-circle-right"></i></div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!--container ng mga ic-click na box-->
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

      <!-- BOX OF STEM-->
          <div class="box box-success" hidden id="stem_box">
            <div class="box-header">
              <h3 class="box-title">STEM</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Student List</a></li>
                  <li> <a href="#tab_2" data-toggle="tab">Section</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">  
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th><input type="checkbox" class="check" id="checkAll"></th>
                          <th>#</th>
                          <th>LRN</th>
                          <th>Full Name</th>
                          <th>Sex</th>
                          <th>Section</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>STEM-2</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>2.</td>
                          <td>000000000007</td>
                          <td>Polistico, Hakeem</td>
                          <td>Male</td>
                          <td>STEM-1</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>3.</td>
                          <td>000000000009</td>
                          <td>Salva, Jasver Anlouise</td>
                          <td>Female</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>4.</td>
                          <td>000000000010</td>
                          <td>Morales, Shiela May</td>
                          <td>Female</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>5.</td>
                          <td>000000000021</td>
                          <td>Zulueta, Shanai Hazel</td>
                          <td>Female</td>
                          <td>STEM-3</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>6.</td>
                          <td>000000000005</td>
                          <td>Francia, Jan Diether</td>
                          <td>Male</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>7.</td>
                          <td>000000000001</td>
                          <td>Terrobias, Marc Inzon</td>
                          <td>Male</td>
                          <td>STEM-3</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>8.</td>
                          <td>000000000003</td>
                          <td>Alcantara, Aaron James</td>
                          <td>Male</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">
                      <a href="#tab_2" data-toggle="tab">
                      <button type="button" class="btn btn-default" style="width: 15%;">Add</button></a>
                      <button type="button" class="btn btn-default" style="width: 15%;">Transfer</button>
                  </div>
                  <!-- /.end student tab-->

                  <div class="tab-pane" id="tab_2">  
                    <table id="example2" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Section Name</th>
                          <th>Count</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>STEM-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>STEM-2</td>
                          <td>40/40</td>
                          <td><span class="label label-danger">Closed</span></td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>STEM-3</td>
                          <td>0/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" style="width: 15%;">Save</button>                      
                  </div>
                  <!--end section_tab-->
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.nav-tabs-custom-->
            </div>
            <!-- /.box-body -->
          </div>
          <!--/.box (box ng STEM)-->

          <!-- BOX OF GAS START-->
          <div class="box" hidden id="gas_box">
            <div class="box-header">
              <h3 class="box-title">GAS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#gas_student_tab" data-toggle="tab">Student List</a></li>
                  <li> <a href="#gas_section_tab" data-toggle="tab">Section</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="gas_student_tab">  
                    <table id="gas_student_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th><input type="checkbox" class="check" id="checkAll"></th>
                          <th>#</th>
                          <th>LRN</th>
                          <th>Full Name</th>
                          <th>Sex</th>
                          <th>Section</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>GAS-2</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>2.</td>
                          <td>000000000007</td>
                          <td>Polistico, Hakeem</td>
                          <td>Male</td>
                          <td>GAS-1</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>3.</td>
                          <td>000000000009</td>
                          <td>Salva, Jasver Anlouise</td>
                          <td>Female</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>4.</td>
                          <td>000000000010</td>
                          <td>Morales, Shiela May</td>
                          <td>Female</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>5.</td>
                          <td>000000000021</td>
                          <td>Zulueta, Shanai Hazel</td>
                          <td>Female</td>
                          <td>STEM-3</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>6.</td>
                          <td>000000000005</td>
                          <td>Francia, Jan Diether</td>
                          <td>Male</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>7.</td>
                          <td>000000000001</td>
                          <td>Terrobias, Marc Inzon</td>
                          <td>Male</td>
                          <td>STEM-3</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>8.</td>
                          <td>000000000003</td>
                          <td>Alcantara, Aaron James</td>
                          <td>Male</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">
                      <a href="#gas_section_tab" data-toggle="tab">
                      <button type="button" class="btn btn-default" style="width: 15%;">Add</button></a>
                      <button type="button" class="btn btn-default" style="width: 15%;">Transfer</button>
                  </div>
                  <!-- /.end student tab-->

                  <div class="tab-pane" id="gas_section_tab">  
                    <table id="gas_section_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Section Name</th>
                          <th>Count</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>GAS-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>GAS-2</td>
                          <td>40/40</td>
                          <td><span class="label label-danger">Closed</span></td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>GAS-3</td>
                          <td>0/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#gas_modal" style="width: 15%;">Save</button>                      
                  </div>
                  <!--end section_tab-->
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.nav-tabs-custom-->
            </div>
            <!-- /.box-body -->
          </div>
          <!--/.box (box ng GAS)-->

          <!-- BOX OF HUMSS start-->
          <div class="box box-warning" hidden id="humss_box">
            <div class="box-header">
              <h3 class="box-title">HUMSS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#humms_student_tab" data-toggle="tab">Student List</a></li>
                  <li> <a href="#humss_section_tab" data-toggle="tab">Section</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="humms_student_tab">  
                    <table id="humss_student_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th><input type="checkbox" class="check" id="checkAll"></th>
                          <th>#</th>
                          <th>LRN</th>
                          <th>Full Name</th>
                          <th>Sex</th>
                          <th>Section</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>HUMSS-2</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>2.</td>
                          <td>000000000007</td>
                          <td>Polistico, Hakeem</td>
                          <td>Male</td>
                          <td>HUMSS-1</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>3.</td>
                          <td>000000000009</td>
                          <td>Salva, Jasver Anlouise</td>
                          <td>Female</td>
                          <td></td>
                        </tr>                        
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">
                      <a href="#humss_section_tab" data-toggle="tab">
                      <button type="button" class="btn btn-default" style="width: 15%;">Add</button></a>
                      <button type="button" class="btn btn-default" style="width: 15%;">Transfer</button>
                  </div>
                  <!-- /.end student tab-->

                  <div class="tab-pane" id="humss_section_tab">  
                    <table id="humss_section_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Section Name</th>
                          <th>Count</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>HUMSS-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>HUMSS-2</td>
                          <td>40/40</td>
                          <td><span class="label label-danger">Closed</span></td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>HUMSS-3</td>
                          <td>0/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" style="width: 15%;">Save</button>                      
                  </div>
                  <!--end section_tab-->
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.nav-tabs-custom-->
            </div>
            <!-- /.box-body -->
          </div>
          <!--/.box (box ng HUMSS)-->

          <!-- BOX OF ABM start-->
          <div class="box box-warning" hidden id="abm_box">
            <div class="box-header">
              <h3 class="box-title">ABM</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#abm_student_tab" data-toggle="tab">Student List</a></li>
                  <li> <a href="#abm_section_tab" data-toggle="tab">Section</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="abm_student_tab">  
                    <table id="abm_student_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th><input type="checkbox" class="check" id="checkAll"></th>
                          <th>#</th>
                          <th>LRN</th>
                          <th>Full Name</th>
                          <th>Sex</th>
                          <th>Section</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>ABM-2</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>2.</td>
                          <td>000000000007</td>
                          <td>Polistico, Hakeem</td>
                          <td>Male</td>
                          <td>ABM-1</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>3.</td>
                          <td>000000000009</td>
                          <td>Salva, Jasver Anlouise</td>
                          <td>Female</td>
                          <td></td>
                        </tr>                        
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">
                      <a href="#abm_section_tab" data-toggle="tab">
                      <button type="button" class="btn btn-default" style="width: 15%;">Add</button></a>
                      <button type="button" class="btn btn-default" style="width: 15%;">Transfer</button>
                  </div>
                  <!-- /.end student tab-->

                  <div class="tab-pane" id="abm_section_tab">  
                    <table id="abm_section_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Section Name</th>
                          <th>Count</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>ABM-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>ABM-2</td>
                          <td>40/40</td>
                          <td><span class="label label-danger">Closed</span></td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>ABM-3</td>
                          <td>0/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" style="width: 15%;">Save</button>                      
                  </div>
                  <!--end section_tab-->
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.nav-tabs-custom-->
            </div>
            <!-- /.box-body -->
          </div>
          <!--/.box (box ng ABM)-->

          <!-- BOX OF TVL-HE start-->
          <div class="box box-primary" hidden id="tvlhe_box">
            <div class="box-header">
              <h3 class="box-title">TVL-HE</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tvlhe_student_tab" data-toggle="tab">Student List</a></li>
                  <li> <a href="#tvlhe_section_tab" data-toggle="tab">Section</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tvlhe_student_tab">  
                    <table id="tvlhe_student_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th><input type="checkbox" class="check" id="checkAll"></th>
                          <th>#</th>
                          <th>LRN</th>
                          <th>Full Name</th>
                          <th>Sex</th>
                          <th>Section</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>TVL-HE-2</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>2.</td>
                          <td>000000000007</td>
                          <td>Polistico, Hakeem</td>
                          <td>Male</td>
                          <td>TVL-HE-1</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>3.</td>
                          <td>000000000009</td>
                          <td>Salva, Jasver Anlouise</td>
                          <td>Female</td>
                          <td></td>
                        </tr>                        
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">
                      <a href="#abm_section_tab" data-toggle="tab">
                      <button type="button" class="btn btn-default" style="width: 15%;">Add</button></a>
                      <button type="button" class="btn btn-default" style="width: 15%;">Transfer</button>
                  </div>
                  <!-- /.end student tab-->

                  <div class="tab-pane" id="tvlhe_section_tab">  
                    <table id="tvlhe_section_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Section Name</th>
                          <th>Count</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>TVL-HE-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>TVL-HE-2</td>
                          <td>40/40</td>
                          <td><span class="label label-danger">Closed</span></td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>TVL-HE-3</td>
                          <td>0/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" style="width: 15%;">Save</button>                      
                  </div>
                  <!--end section_tab-->
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.nav-tabs-custom-->
            </div>
            <!-- /.box-body -->
          </div>
          <!--/.box (box ng TVL-HE end)--> 

          <!-- BOX OF TVL-AS start-->
          <div class="box box-primary" hidden id="tvlas_box">
            <div class="box-header">
              <h3 class="box-title">TVL-AS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tvlas_student_tab" data-toggle="tab">Student List</a></li>
                  <li> <a href="#tvlas_section_tab" data-toggle="tab">Section</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tvlas_student_tab">  
                    <table id="tvlas_student_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th><input type="checkbox" class="check" id="checkAll"></th>
                          <th>#</th>
                          <th>LRN</th>
                          <th>Full Name</th>
                          <th>Sex</th>
                          <th>Section</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>TVL-HE-2</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>2.</td>
                          <td>000000000007</td>
                          <td>Polistico, Hakeem</td>
                          <td>Male</td>
                          <td>TVL-HE-1</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="check"></td>
                          <td>3.</td>
                          <td>000000000009</td>
                          <td>Salva, Jasver Anlouise</td>
                          <td>Female</td>
                          <td></td>
                        </tr>                        
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">
                      <a href="#tvlas_section_tab" data-toggle="tab">
                      <button type="button" class="btn btn-default" style="width: 15%;">Add</button></a>
                      <button type="button" class="btn btn-default" style="width: 15%;">Transfer</button>
                  </div>
                  <!-- /.end student tab-->

                  <div class="tab-pane" id="tvlas_section_tab">  
                    <table id="tvlas_section_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Section Name</th>
                          <th>Count</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1.</td>
                          <td>TVL-AS-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                        <tr>
                          <td>2.</td>
                          <td>TVL-AS-2</td>
                          <td>40/40</td>
                          <td><span class="label label-danger">Closed</span></td>
                        </tr>
                        <tr>
                          <td>3.</td>
                          <td>TVL-AS-3</td>
                          <td>0/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" style="width: 15%;">Save</button>                      
                  </div>
                  <!--end section_tab-->
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.nav-tabs-custom-->
            </div>
            <!-- /.box-body -->
          </div>
          <!--/.box (box ng TVL-HE end)-->     
          
                <!--modal start-->
                <div class="modal fade" id="modal-default">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">ADD TO <b>STEM-1</b></h4>
                      </div>
                      <div class="modal-body">
                        <div class="box-body table-responsive no-padding">
                          <table class="table">
                            <tr>
                              <th>#</th>
                              <th>LRN</th>
                              <th>Full Name</th>
                              <th>Sex</th>
                              
                            </tr>
                            <tr>
                              <td>1.</td>
                              <td>00000000008</td>
                              <td>Escaro, Adrielle Kristine Nicolette</td>
                              <td>Female</td>
                              
                            </tr>
                            <tr>
                              <td>2.</td>
                              <td>00000000009</td>
                              <td>Polistico, Hakeem</td>
                              <td>Male</td>
                              
                            </tr>  
                            <tr>
                              <td>3.</td>
                              <td>00000000007</td>
                              <td>Salva, Jasver Anlouise</td>
                              <td>Female</td>
                              
                            </tr>                
                          </table>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Confirm</button>
                      </div>
                    </div>   
                  </div>
                </div>
                <!--end of modal-->

                <!--modal start-->
                <div class="modal fade" id="gas_modal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">ADD TO <b>GAS-1</b></h4>
                      </div>
                      <div class="modal-body">
                        <div class="box-body table-responsive no-padding">
                          <table class="table">
                            <tr>
                              <th>#</th>
                              <th>LRN</th>
                              <th>Full Name</th>
                              <th>Sex</th>
                              
                            </tr>
                            <tr>
                              <td>1.</td>
                              <td>00000000008</td>
                              <td>Escaro, Adrielle Kristine Nicolette</td>
                              <td>Female</td>
                              
                            </tr>
                            <tr>
                              <td>2.</td>
                              <td>00000000009</td>
                              <td>Polistico, Hakeem</td>
                              <td>Male</td>
                              
                            </tr>  
                            <tr>
                              <td>3.</td>
                              <td>00000000007</td>
                              <td>Salva, Jasver Anlouise</td>
                              <td>Female</td>
                              
                            </tr>                
                          </table>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Confirm</button>
                      </div>
                    </div>   
                  </div>
                </div>
                <!--end of modal-->
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="https://adminlte.io">Araullo School Management System</a>.</strong> All rights
    reserved.
  </footer>

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

<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.js"></script>

<script>
$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable()
    $('#gas_student_table').DataTable()
    $('#gas_section_table').DataTable()
    $('#humss_student_table').DataTable()
    $('#humss_section_table').DataTable()
    $('#abm_student_table').DataTable()
    $('#abm_section_table').DataTable()
    $('#tvlhe_student_table').DataTable()
    $('#tvlhe_section_table').DataTable()
    $('#tvlas_student_table').DataTable()
    $('#tvlas_section_table').DataTable()
  })
//selectAll
$("#checkAll").click(function () {
    $(".check").prop('checked', $(this).prop('checked'));
});
$('.check').change(function(){ //".checkbox" change 
    //uncheck "select all", if one of the listed checkbox item is unchecked
    if(this.checked == false){ //if this item is unchecked
        $("#checkAll")[0].checked = false; //change "select all" checked status to false
    }
        
});
$(document).ready(function(){
    $("#stem_list").click(function(){ 
      $("#lapa").hide();     
      $("#stem_box").show();
      $("#gas_box").hide();
      $("#humss_box").hide();
      $("#abm_box").hide();
      $("#tvlhe_box").hide();
      $("#tvlas_box").hide();
    });
    $("#gas_list").click(function(){
      $("#lapa").hide();
      $("#stem_box").hide();
      $("#humss_box").hide();
      $("#gas_box").show();
      $("#abm_box").hide();
      $("#tvlhe_box").hide();
      $("#tvlas_box").hide();
    });
    $("#humss_list").click(function(){
      $("#lapa").hide();
      $("#humss_box").show();
      $("#stem_box").hide();
      $("#gas_box").hide();      
      $("#abm_box").hide();
      $("#tvlhe_box").hide();
      $("#tvlas_box").hide();
    });
    $("#abm_list").click(function(){
      $("#lapa").hide();
      $("#abm_box").show();
      $("#gas_box").hide();
      $("#stem_box").hide();      
      $("#humss_box").hide();
      $("#tvlhe_box").hide();
      $("#tvlas_box").hide();      
    });
    $("#tvlhe_list").click(function(){
      $("#lapa").hide();
      $("#stem_box").hide();
      $("#gas_box").hide();
      $("#abm_box").hide();
      $("#humss_box").hide();
      $("#tvlas_box").hide();
      $("#tvlhe_box").show();
    });
    $("#tvlas_list").click(function(){
      $("#lapa").hide();
      $("#stem_box").hide();
      $("#gas_box").hide();
      $("#abm_box").hide();
      $("#humss_box").hide();
      $("#tvlhe_box").hide(); 
      $("#tvlas_box").show(); 
    });
});
/*//iCheck for checkbox
$('input.check').iCheck({
  checkboxClass: 'icheckbox_minimal-blue'
})*/

</script>
</body>
</html>
