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
  <!-- Loading -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">
  <!-- manage_student.css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>dist/css/enrollment/manage_student.css">

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
    <a href="<?php echo site_url('/') ?>" class="logo">
      {logo}
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
              <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="user-image" alt="<?php echo base_url('images/alt_picture.jpg');?>">
              <span class="hidden-xs"><?php echo $this->session->first_name." ".$this->session->last_name ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="img-circle" alt="<?php echo base_url('images/alt_picture.jpg');?>">

                <p>
                 <?php echo $this->session->first_name." ".$this->session->last_name." - ".$this->session->position ?>
                  <small>Member since <?php echo $this->session->date_created ?></small>
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
              <a href="<?php echo site_url('enrollment/enroll_student'); ?>">
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

        <li class="treeview">
          <a href="#">
            <i class="fa fa-mortar-board"></i>
            <span>Academics</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Schedule
              </a>
            </li>          
            <li>
              <a href="<?php echo site_url('academics/subjects'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Subjects
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Assign Subjects
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('academics/teachers'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Teachers
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Year Level
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Sections
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Strands
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
        <small>Add students to a section and a room</small>
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
            <div class="col-lg-4 col-xs-12">
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
            <div class="col-lg-4 col-xs-12">
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
            <div class="col-lg-4 col-xs-12">
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
            <div class="col-lg-4 col-xs-12">
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

            <div class="col-lg-4 col-xs-12">
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

            <div class="col-lg-4 col-xs-12">
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

          <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

          <div class="box" id="all_box">
            <div class="box-header">
              <h3 class="box-title">STUDENTS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!--<div class="nav-tabs-custom">-->
              <div class="wizard">

                <ul class="nav nav-wizard">
                    <li class="active">
                        <a href="#all_step1" data-toggle="tab"> Students</a>
                    </li>
                    <li class="disabled">
                        <a href="#all_step2" data-toggle="tab">Sections</a>
                    </li>
                    <li class="disabled">
                        <a href="#all_step3" data-toggle="tab">Rooms</a>
                    </li>
                    <li class="disabled">
                        <a href="#all_step4" data-toggle="tab">Summary</a>
                    </li>                  
                </ul>

                <br>
                <div class="tab-content">

                  <div class="tab-pane active" id="all_step1"> 
                  <h4>Select Students</h4><hr>
                    <table id="tbl_allStudents" class="table table-bordered table-striped">
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
                      <tbody id="tbodyAll">
                        <tr id="recordAll">
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>STEM-2</td>
                        </tr>                        
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">
                      
                      <ul class="list-inline pull-right">                        
                        <li><button type="button" class="btn btn-primary btnNext">Transfer</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Add</button></li>
                      </ul>                      
                  </div>
                  <!-- /.end student tab-->

                  <div class="tab-pane" id="all_step2">
                  <h4>Select a Section</h4>
                  <hr>
                    <table id="tbl_allSections" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Section Name</th>
                          <th>Count</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody id="tbodyAll2">
                        <tr id="recordAll2">
                          <td>1.</td>
                          <td>STEM-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                                           
                  </div>
                  <!--end section_tab-->
                  <div class="tab-pane" id="all_step3">
                  <h4>Select a Room</h4>
                  <hr>
                    <table id="tbl_allRooms" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Room No.</th>
                          <th>Room Name</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody id="tbodyAll3">
                        <tr id="recordAll3">
                          <td>1.</td>
                          <td>329</td>
                          <td></td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                                           
                  </div>
                  <!--end section_tab-->
                  <div class="tab-pane" id="all_step4">
                  <h4>Confirm Operation:</h4>
                    <hr>
                     <h3>ADD TO <b> STEM-1</b> in <b>RM. 325</b></h3>
                        <table class="table table-responsive table-bordered">
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
                        </table><hr>
                  
                    <ul class="list-inline pull-right">
                      <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                      <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_success" >Save</button></li>
                    </ul>
                  </div>
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.WIZARD-->
            </div>
            <!-- /.box-body -->
          </div>

          <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

          <!-- BOX OF STEM-->
          <div class="box" hidden id="stem_box">
            <div class="box-header">
              <h3 class="box-title">STEM</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!--<div class="nav-tabs-custom">-->
              <div class="wizard">

                <ul class="nav nav-wizard">
                    <li class="active">
                        <a href="#stem_step1" data-toggle="tab"> Students</a>
                    </li>
                    <li class="disabled">
                        <a href="#stem_step2" data-toggle="tab">Sections</a>
                    </li>
                    <li class="disabled">
                        <a href="#stem_step3" data-toggle="tab">Rooms</a>
                    </li>
                    <li class="disabled">
                        <a href="#stem_step4" data-toggle="tab">Summary</a>
                    </li>                  
                </ul>

                <br>
                <div class="tab-content">

                  <div class="tab-pane active" id="stem_step1"> 
                  <h4>Select Students</h4><hr>
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
                      <tbody id="tbody1">
                        <tr id="record">
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>STEM-2</td>
                        </tr>                        
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">
                      
                      <ul class="list-inline pull-right">                        
                        <li><button type="button" class="btn btn-primary btnNext">Transfer</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Add</button></li>
                      </ul>                      
                  </div>
                  <!-- /.end student tab-->

                  <div class="tab-pane" id="stem_step2">
                  <h4>Select a Section</h4>
                  <hr>
                    <table id="example2" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Section Name</th>
                          <th>Count</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody id="tbody2">
                        <tr id="record2">
                          <td>1.</td>
                          <td>STEM-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                                           
                  </div>
                  <!--end section_tab-->
                  <div class="tab-pane" id="stem_step3">
                  <h4>Select a Room</h4>
                  <hr>
                    <table id="example3" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Room No.</th>
                          <th>Room Name</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody id="tbody3">
                        <tr id="record3">
                          <td>1.</td>
                          <td>329</td>
                          <td></td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                                           
                  </div>
                  <!--end section_tab-->
                  <div class="tab-pane" id="stem_step4">
                  <h4>Confirm Operation:</h4>
                    <hr>
                     <h3>ADD TO <b> STEM-1</b> in <b>RM. 325</b></h3>
                        <table class="table table-responsive table-bordered">
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
                        </table><hr>
                  
                    <ul class="list-inline pull-right">
                      <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                      <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_success" >Save</button></li>
                    </ul>
                  </div>
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.WIZARD-->
            </div>
            <!-- /.box-body -->
          </div>
          <!--/.box (box ng STEM)-->

      <div class="modal fade" id="modal_success">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-green">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">System Message</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <p>Operation Successful!</p>
                <br>                
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.modal-body -->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

          <!-- BOX OF GAS START-->
          <div class="box" hidden id="gas_box">
            <div class="box-header">
              <h3 class="box-title">GAS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="wizard">

                <ul class="nav nav-wizard">
                    <li class="active">
                        <a href="#gas_student_tab" data-toggle="tab"> Students</a>
                    </li>
                    <li class="disabled">
                        <a href="#gas_section_tab" data-toggle="tab">Sections</a>
                    </li>
                    <li class="disabled">
                        <a href="#gas_room_tab" data-toggle="tab">Rooms</a>
                    </li>
                    <li class="disabled">
                        <a href="#step4" data-toggle="tab">Summary</a>
                    </li>                  
                </ul>

                <br>
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
                      <tbody id="tbody4">
                        <tr id="record4">
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>GAS-2</td>
                        </tr>                        
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">                      
                      <ul class="list-inline pull-right">                        
                        <li><button type="button" class="btn btn-primary btnNext">Transfer</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Add</button></li>
                      </ul>
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
                      <tbody id="tbody5">
                        <tr id="record5">
                          <td>1.</td>
                          <td>GAS-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                      
                  </div>
                  <!--end section_tab-->
                  <div class="tab-pane" id="gas_room_tab">
                  <h4>Select a Room</h4>
                  <hr>
                    <table id="gas_room_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Room No.</th>
                          <th>Room Name</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody id="tbody6">
                        <tr id="record6">
                          <td>1.</td>
                          <td>329</td>
                          <td></td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                                           
                  </div>
                  <!--/. end room_tab-->
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.nav-tabs-custom-->
            </div>
            <!-- /.box-body -->
          </div>
          <!--/.box (box ng GAS)-->

          <!-- BOX OF HUMSS START-->
          <div class="box" hidden id="humss_box">
            <div class="box-header">
              <h3 class="box-title">HUMSS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="wizard">

                <ul class="nav nav-wizard">
                    <li class="active">
                        <a href="#humss_student_tab" data-toggle="tab">Students</a>
                    </li>
                    <li class="disabled">
                        <a href="#humss_section_tab" data-toggle="tab">Sections</a>
                    </li>
                    <li class="disabled">
                        <a href="#humss_room_tab" data-toggle="tab">Rooms</a>
                    </li>
                    <li class="disabled">
                        <a href="#step4" data-toggle="tab">Summary</a>
                    </li>                  
                </ul>

                <br>
                <div class="tab-content">
                  <div class="tab-pane active" id="humss_student_tab">  
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
                      <tbody id="tbody7">
                        <tr id="record7">
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>HUMSS-2</td>
                        </tr>                        
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">                      
                      <ul class="list-inline pull-right">                        
                        <li><button type="button" class="btn btn-primary btnNext">Transfer</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Add</button></li>
                      </ul>
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
                      <tbody id="tbody8">
                        <tr id="record8">
                          <td>1.</td>
                          <td>HUMSS-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                      
                  </div>
                  <!--end section_tab-->
                  <div class="tab-pane" id="humss_room_tab">
                  <h4>Select a Room</h4>
                  <hr>
                    <table id="humss_room_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Room No.</th>
                          <th>Room Name</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody id="tbody9">
                        <tr id="record9">
                          <td>1.</td>
                          <td>329</td>
                          <td></td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                                           
                  </div>
                  <!--/. end room_tab-->
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.nav-tabs-custom-->
            </div>
            <!-- /.box-body -->
          </div>
          <!--/.box (box ng GAS)-->

          <!-- BOX OF ABM start-->
          <div class="box" hidden id="abm_box">
            <div class="box-header">
              <h3 class="box-title">ABM</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="wizard">

                <ul class="nav nav-wizard">
                    <li class="active">
                        <a href="#abm_student_tab" data-toggle="tab">Students</a>
                    </li>
                    <li class="disabled">
                        <a href="#abm_section_tab" data-toggle="tab">Sections</a>
                    </li>
                    <li class="disabled">
                        <a href="#abm_room_tab" data-toggle="tab">Rooms</a>
                    </li>
                    <li class="disabled">
                        <a href="#step4" data-toggle="tab">Summary</a>
                    </li>                  
                </ul>
                <br>
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
                      <tbody id="tbody10">
                        <tr id="record10">
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>ABM-2</td>
                        </tr>                                                
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">                        
                        <li><button type="button" class="btn btn-primary btnNext">Transfer</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Add</button></li>
                      </ul>
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
                      <tbody id="tbody11">
                        <tr id="record11">
                          <td>1.</td>
                          <td>ABM-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                      
                  </div>
                  <!--end section_tab-->
                  <div class="tab-pane" id="abm_room_tab">
                  <h4>Select a Room</h4>
                  <hr>
                    <table id="abm_room_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Room No.</th>
                          <th>Room Name</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody id="tbody12">
                        <tr id="record12">
                          <td>1.</td>
                          <td>329</td>
                          <td></td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                                           
                  </div>
                  <!--/. end room_tab-->
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.nav-tabs-custom-->
            </div>
            <!-- /.box-body -->
          </div>
          <!--/.box (box ng ABM)-->

          <!-- BOX OF TVL-HE start-->
          <div class="box" hidden id="tvlhe_box">
            <div class="box-header">
              <h3 class="box-title">TVL-HE</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="wizard">

                <ul class="nav nav-wizard">
                    <li class="active">
                        <a href="#tvlhe_student_tab" data-toggle="tab">Students</a>
                    </li>
                    <li class="disabled">
                        <a href="#tvlhe_section_tab" data-toggle="tab">Sections</a>
                    </li>
                    <li class="disabled">
                        <a href="#tvlhe_room_tab" data-toggle="tab">Rooms</a>
                    </li>
                    <li class="disabled">
                        <a href="#step4" data-toggle="tab">Summary</a>
                    </li>                  
                </ul>

                <br>
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
                      <tbody id="tbody13">
                        <tr id="record13">
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>TVL-HE-2</td>
                        </tr>                                             
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">                        
                        <li><button type="button" class="btn btn-primary btnNext">Transfer</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Add</button></li>
                      </ul>
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
                      <tbody id="tbody14">
                        <tr id="record14">
                          <td>1.</td>
                          <td>TVL-HE-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                      
                  </div>
                  <!--end section_tab-->
                  <div class="tab-pane" id="tvlhe_room_tab">
                  <h4>Select a Room</h4>
                  <hr>
                    <table id="tvlhe_room_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Room No.</th>
                          <th>Room Name</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody id="tbody15">
                        <tr id="record15">
                          <td>1.</td>
                          <td>329</td>
                          <td></td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                                           
                  </div>
                  <!--/. end room_tab-->
                </div>
                <!-- /. end tab contents-->
              </div>
              <!-- /.nav-tabs-custom-->
            </div>
            <!-- /.box-body -->
          </div>
          <!--/.box (box ng TVL-HE end)--> 

          <!-- BOX OF TVL-AS start-->
          <div class="box" hidden id="tvlas_box">
            <div class="box-header">
              <h3 class="box-title">TVL-AS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="wizard">

                <ul class="nav nav-wizard">
                    <li class="active">
                        <a href="#tvlas_student_tab" data-toggle="tab">Students</a>
                    </li>
                    <li class="disabled">
                        <a href="#tvlas_section_tab" data-toggle="tab">Sections</a>
                    </li>
                    <li class="disabled">
                        <a href="#tvlas_room_tab" data-toggle="tab">Rooms</a>
                    </li>
                    <li class="disabled">
                        <a href="#step4" data-toggle="tab">Summary</a>
                    </li>                  
                </ul>

                <br>
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
                      <tbody id="tbody16">
                        <tr id="record16">
                          <td><input type="checkbox" class="check"></td>
                          <td>1.</td>
                          <td>000000000008</td>
                          <td>Escaro, Adrielle Kristine Nicolette</td>
                          <td>Female</td>
                          <td>TVL-HE-2</td>
                        </tr>                                              
                      </tbody>
                    </table>
                    <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">                        
                        <li><button type="button" class="btn btn-primary btnNext">Transfer</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Add</button></li>
                      </ul>
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
                      <tbody id="tbody17">
                        <tr id="record17">
                          <td>1.</td>
                          <td>TVL-AS-1</td>
                          <td>31/40</td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                      
                  </div>
                  <!--end section_tab-->
                  <div class="tab-pane" id="tvlas_room_tab">
                  <h4>Select a Room</h4>
                  <hr>
                    <table id="tvlas_room_table" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Room No.</th>
                          <th>Room Name</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody id="tbody18">
                        <tr id="record18">
                          <td>1.</td>
                          <td>329</td>
                          <td></td>
                          <td><span class="label label-success">Open</span></td>
                        </tr>                        
                      </tbody>                      
                    </table>
                      <hr style="margin-bottom: 10px;">
                      <ul class="list-inline pull-right">
                        <li><button type="button" class="btn btn-primary btnBack">Back</button></li>
                        <li><button type="button" class="btn btn-primary btnNext">Next</button></li>
                      </ul>                                           
                  </div>
                  <!--/. end room_tab-->
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
                    <h4 class="modal-title">SUMMARY</b></h4>
                </div>
                <div class="modal-body">
                   <div class="box-body table-responsive no-padding">
                     <h3>ADD TO <b> STEM-1</b></h3>
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
                  <button 
                  type="button" 
                  class="btn btn-default pull-left" 
                  data-dismiss="modal" 
                  data-toggle="modal" 
                  data-target="#section_modal">
                  Back
                  </button>
                  <button 
                  type="button" 
                  class="btn btn-success">
                  Confirm
                  </button>
                </div>
              </div>   
            </div>
          </div>
          <!--end of SUMMARY modal-->            
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  {footer}
  <!-- /.Footer -->

</div>
<!-- ./wrapper -->

<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- Step Wizard js -->
<script src="<?php echo base_url(); ?>dist/js/enrollment/manage_student.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.js"></script>

<script>

//=============================== A L L ========================================================================================================//
$('tbl_allStudents').DataTable();
$('tbl_allSections').DataTable();
$('tbl_allRooms').DataTable();


  var arrofobjectAllStudents = <?php echo $allStudents ?>;
  var arrofobjectAllSections = <?php echo $allClasses ?>;
  var arrofobjectAllRooms = <?php echo $rooms ?>;

  $('#recordAll').hide();
  $('#recordAll2').hide();
  $('#recordAll3').hide();

  $.each(arrofobjectAllStudents, function(index, val) {
    $('#tbodyAll').append('<tr id="recordAll"> <td><input type="checkbox" class="check"></td> <td>'+val.id+'</td> <td>'+val.lrn+'</td> <td>'+val.first_name+' '+val.middle_name+' '+val.last_name+'</td> <td>'+val.sex+'</td> <td>'+val.strand+'</td> </tr>');
  });
  $.each(arrofobjectAllSections, function(index, val) {
    $('#tbodyAll2').append('<tr id="recordAll2"><td>'+val.id+'</td> <td>'+val.class_name+'</td> <td>'+val.occupants+'/'+val.capacity+'</td> <td><span class="label label-success">Open</span></td></tr>');
  });
   $.each(arrofobjectAllRooms, function(index, val) {
    $('#tbodyAll3').append('<tr id="recordAll3"><td>'+val.id+'</td> <td>'+val.room_id+'</td> <td>'+val.room_name+'</td> <td><span class="label label-success">Available</span></td></tr>');
  });

//===============================S T E M========================================================================================================//
$('example1').DataTable();
$('example2').DataTable();
$('example3').DataTable();


  var arrofobject = <?php echo $stemStudents ?>;
  var arrofobject2 = <?php echo $stemClasses ?>;
  var arrofobject3 = <?php echo $rooms ?>;

  $('#record').hide();
  $('#record2').hide();
  $('#record3').hide();

  $.each(arrofobject, function(index, val) {
    $('#tbody1').append('<tr id="record"> <td><input type="checkbox" class="check"></td> <td>'+val.id+'</td> <td>'+val.lrn+'</td> <td>'+val.first_name+' '+val.middle_name+' '+val.last_name+'</td> <td>'+val.sex+'</td> <td>'+val.strand+'</td> </tr>');
  });
  $.each(arrofobject2, function(index, val) {
    $('#tbody2').append('<tr id="record2"><td>'+val.id+'</td> <td>'+val.class_name+'</td> <td>'+val.occupants+'/'+val.capacity+'</td> <td><span class="label label-success">Open</span></td></tr>');
  });
   $.each(arrofobject3, function(index, val) {
    $('#tbody3').append('<tr id="record3"><td>'+val.id+'</td> <td>'+val.room_id+'</td> <td>'+val.room_name+'</td> <td><span class="label label-success">Available</span></td></tr>');
  });
 
//===============================G A S===========================================================================================================//
$('gas_student_table').DataTable();
$('gas_section_table').DataTable();
$('gas_room_table').DataTable();


  var arrofobject4 = <?php echo $gasStudents ?>;
  var arrofobject5 = <?php echo $gasClasses ?>;
  var arrofobject6 = <?php echo $rooms ?>;

  $('#record4').hide();
  $('#record5').hide();
  $('#record6').hide();

  $.each(arrofobject4, function(index, val) {
    $('#tbody4').append('<tr id="record4"> <td><input type="checkbox" class="check"></td> <td>'+val.id+'</td> <td>'+val.lrn+'</td> <td>'+val.first_name+' '+val.middle_name+' '+val.last_name+'</td> <td>'+val.sex+'</td> <td>'+val.strand+'</td> </tr>');
  });
  $.each(arrofobject5, function(index, val) {
    $('#tbody5').append('<tr id="record5"><td>'+val.id+'</td> <td>'+val.class_name+'</td> <td>'+val.occupants+'/'+val.capacity+'</td> <td><span class="label label-success">Open</span></td></tr>');
  });
   $.each(arrofobject6, function(index, val) {
    $('#tbody6').append('<tr id="record6"><td>'+val.id+'</td> <td>'+val.room_id+'</td> <td>'+val.room_name+'</td> <td><span class="label label-success">Available</span></td></tr>');
  });

//===============================H U M S S ===========================================================================================================//
$('humss_student_table').DataTable();
$('humss_section_table').DataTable();
$('humss_room_table').DataTable();


  var arrofobject7 = <?php echo $humssStudents ?>;
  var arrofobject8 = <?php echo $humssClasses ?>;
  var arrofobject9 = <?php echo $rooms ?>;

  $('#record7').hide();
  $('#record8').hide();
  $('#record9').hide();

  $.each(arrofobject7, function(index, val) {
    $('#tbody7').append('<tr id="record7"> <td><input type="checkbox" class="check"></td> <td>'+val.id+'</td> <td>'+val.lrn+'</td> <td>'+val.first_name+' '+val.middle_name+' '+val.last_name+'</td> <td>'+val.sex+'</td> <td>'+val.strand+'</td> </tr>');
  });
  $.each(arrofobject8, function(index, val) {
    $('#tbody8').append('<tr id="record8"><td>'+val.id+'</td> <td>'+val.class_name+'</td> <td>'+val.occupants+'/'+val.capacity+'</td> <td><span class="label label-success">Open</span></td></tr>');
  });
   $.each(arrofobject9, function(index, val) {
    $('#tbody9').append('<tr id="record9"><td>'+val.id+'</td> <td>'+val.room_id+'</td> <td>'+val.room_name+'</td> <td><span class="label label-success">Available</span></td></tr>');
  });

  //===============================A B M =================================================================================================================//
$('abm_student_table').DataTable();
$('abm_section_table').DataTable();
$('abm_room_table').DataTable();


  var arrofobject10 = <?php echo $abmStudents ?>;
  var arrofobject11 = <?php echo $abmClasses ?>;
  var arrofobject12 = <?php echo $rooms ?>;

  $('#record10').hide();
  $('#record11').hide();
  $('#record12').hide();

  $.each(arrofobject10, function(index, val) {
    $('#tbody10').append('<tr id="record10"> <td><input type="checkbox" class="check"></td> <td>'+val.id+'</td> <td>'+val.lrn+'</td> <td>'+val.first_name+' '+val.middle_name+' '+val.last_name+'</td> <td>'+val.sex+'</td> <td>'+val.strand+'</td> </tr>');
  });
  $.each(arrofobject11, function(index, val) {
    $('#tbody11').append('<tr id="record11"><td>'+val.id+'</td> <td>'+val.class_name+'</td> <td>'+val.occupants+'/'+val.capacity+'</td> <td><span class="label label-success">Open</span></td></tr>');
  });
   $.each(arrofobject12, function(index, val) {
    $('#tbody12').append('<tr id="record12"><td>'+val.id+'</td> <td>'+val.room_id+'</td> <td>'+val.room_name+'</td> <td><span class="label label-success">Available</span></td></tr>');
  }); 
 //===============================T V L H E =================================================================================================================//
$('tvlhe_student_table').DataTable();
$('tvlhe_section_table').DataTable();
$('tvlhe_room_table').DataTable();


  var arrofobject13 = <?php echo $tvlheStudents ?>;
  var arrofobject14 = <?php echo $tvlheClasses ?>;
  var arrofobject15 = <?php echo $rooms ?>;

  $('#record13').hide();
  $('#record14').hide();
  $('#record15').hide();

  $.each(arrofobject13, function(index, val) {
    $('#tbody13').append('<tr id="record13"> <td><input type="checkbox" class="check"></td> <td>'+val.id+'</td> <td>'+val.lrn+'</td> <td>'+val.first_name+' '+val.middle_name+' '+val.last_name+'</td> <td>'+val.sex+'</td> <td>'+val.strand+'</td> </tr>');
  });
  $.each(arrofobject14, function(index, val) {
    $('#tbody14').append('<tr id="record14"><td>'+val.id+'</td> <td>'+val.class_name+'</td> <td>'+val.occupants+'/'+val.capacity+'</td> <td><span class="label label-success">Open</span></td></tr>');
  });
   $.each(arrofobject15, function(index, val) {
    $('#tbody15').append('<tr id="record15"><td>'+val.id+'</td> <td>'+val.room_id+'</td> <td>'+val.room_name+'</td> <td><span class="label label-success">Available</span></td></tr>');
  });

//===============================T V L A S =================================================================================================================//
$('tvlas_student_table').DataTable();
$('tvlas_section_table').DataTable();
$('tvlas_room_table').DataTable();


  var arrofobject16 = <?php echo $tvlasStudents ?>;
  var arrofobject17 = <?php echo $tvlasClasses ?>;
  var arrofobject18 = <?php echo $rooms ?>;

  $('#record16').hide();
  $('#record17').hide();
  $('#record18').hide();

  $.each(arrofobject16, function(index, val) {
    $('#tbody16').append('<tr id="record16"> <td><input type="checkbox" class="check"></td> <td>'+val.id+'</td> <td>'+val.lrn+'</td> <td>'+val.first_name+' '+val.middle_name+' '+val.last_name+'</td> <td>'+val.sex+'</td> <td>'+val.strand+'</td> </tr>');
  });
  $.each(arrofobject17, function(index, val) {
    $('#tbody17').append('<tr id="record17"><td>'+val.id+'</td> <td>'+val.class_name+'</td> <td>'+val.occupants+'/'+val.capacity+'</td> <td><span class="label label-success">Open</span></td></tr>');
  });
   $.each(arrofobject18, function(index, val) {
    $('#tbody18').append('<tr id="record18"><td>'+val.id+'</td> <td>'+val.room_id+'</td> <td>'+val.room_name+'</td> <td><span class="label label-success">Available</span></td></tr>');
  });     

$(function () {

    $('#tbl_allStudents').DataTable()
    $('#tbl_allSections').DataTable()
    $('#tbl_allRooms').DataTable()

    $('#example1').DataTable()
    $('#example2').DataTable()
    $('#example3').DataTable()

    $('#gas_student_table').DataTable()
    $('#gas_section_table').DataTable()
    $('#gas_room_table').DataTable();

    $('#humss_student_table').DataTable()
    $('#humss_section_table').DataTable()
    $('#humss_room_table').DataTable()

    $('#abm_student_table').DataTable()
    $('#abm_section_table').DataTable()
    $('#abm_room_table').DataTable()

    $('#tvlhe_student_table').DataTable()
    $('#tvlhe_section_table').DataTable()
    $('#tvlhe_room_table').DataTable()

    $('#tvlas_student_table').DataTable()
    $('#tvlas_section_table').DataTable()
    $('#tvlas_room_table').DataTable()
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
      $("#all_box").hide();     
      $("#stem_box").show();
      $("#gas_box").hide();
      $("#humss_box").hide();
      $("#abm_box").hide();
      $("#tvlhe_box").hide();
      $("#tvlas_box").hide();
    });
    $("#gas_list").click(function(){
      $("#all_box").hide();
      $("#stem_box").hide();
      $("#humss_box").hide();
      $("#gas_box").show();
      $("#abm_box").hide();
      $("#tvlhe_box").hide();
      $("#tvlas_box").hide();
    });
    $("#humss_list").click(function(){
      $("#all_box").hide();
      $("#humss_box").show();
      $("#stem_box").hide();
      $("#gas_box").hide();      
      $("#abm_box").hide();
      $("#tvlhe_box").hide();
      $("#tvlas_box").hide();
    });
    $("#abm_list").click(function(){
      $("#all_box").hide();
      $("#abm_box").show();
      $("#gas_box").hide();
      $("#stem_box").hide();      
      $("#humss_box").hide();
      $("#tvlhe_box").hide();
      $("#tvlas_box").hide();      
    });
    $("#tvlhe_list").click(function(){
      $("#all_box").hide();
      $("#stem_box").hide();
      $("#gas_box").hide();
      $("#abm_box").hide();
      $("#humss_box").hide();
      $("#tvlas_box").hide();
      $("#tvlhe_box").show();
    });
    $("#tvlas_list").click(function(){
      $("#all_box").hide();
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
