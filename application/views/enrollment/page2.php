<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Search for Online Applications</title>
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
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

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
      {logo}
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
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
              <a href="<?php echo site_url('enrollment/register_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Register Student
              </a>
            </li>
            <li class="active">
              <a href="<?php echo site_url('enrollment/enroll_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Enroll Student
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
              <a href="<?php echo site_url('academics/strands'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Strands
              </a>
            </li>
            <li>
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
      
        <li class="header">LABELS</li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!--<div class="alert bg-navy alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Reminder!</h4>
        Make sure to receive the necessary requirements for enrollment, otherwise the student won't be enrolled!
     </div>-->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Enroll Student
        <small>lrn: <?php echo $id ?> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li class="active">Enroll Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <h4 style="margin-left: 20px;" id="choose">Choose Grade:</h4>
      <div class="row" id="yearLevel">


        <div class="col-md-4">
          <button id="grade11" class="btn btn-flat btn-lg" style="background-color: #603838; height: 270px; width: 100%; color: white;">Grade 11</button>
          <button id="grade12" class="btn btn-flat btn-lg" style="background-color: #82595D; height: 270px; width: 100%; color: white;">Grade 12</button>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row" id="req" style="display: none;">
      <div class="col-md-4">
          <div class="box" style="width: 100%;">
            <div class="box-header with-border">
            <button class="btn btn-flat btn-primary btn-lg" id="grade" style="height: 60px; width: 100%;"></button>
          </div>
          <div class="box-body">
            <label>Requirements:</label>
                <!-- checkbox -->
                <div class="form-group" style="padding: 3px 20px;">
                  <label>
                    <input type="checkbox" class="minimal-red checkAll11">
                    Check All
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" class="minimal-red check11">
                    NSO Birth Certificate
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" class="minimal-red check11">
                    Form 137
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" class="minimal-red check11">
                    Form 138
                  </label>

                </div>
                <label>Note:</label>
                <!-- /.form-group -->
                <div class="form-group" style="padding: 0 20px;">
                  <textarea id="note" style="width: 100%;"></textarea>
                </div>
                <!-- /.form-group -->

              </div>


              <div class="box-footer with-border text-muted" id="grades11">
                <label>Grades:</label>
                <div class="inner" style="padding: 10px 20px;">

                  <div class="row">

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>ENG</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="eng11" style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>MATH</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="math11"  style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>SCI</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="sci11"  style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>FIL</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="fil11"  style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                  </div>
                  <!-- /.row -->


                  <div class="row">

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>AP</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="ap11" style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>TLE</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="tle11" style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>COMP</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="comp11" style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>MAPEH</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="mapeh11" style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                  </div>
                  <!-- /.row -->
                  <button class="btn btn-primary btn-flat pull-right subject" id="ave11" style="margin-top: 15px; width: 20%;">Go</button>
                  <div id="error"></div>
                  <div id="avera"></div>
                </div>
                <!-- /.inner -->
              </div>
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-8" id= "aStrands" style="display: none;">
        <div>
        <h4>Available Strands:</h4>
        </div>

      <div class="row">

        <div class="col-md-6" id="tvlasdiv">
          <div class="small-box bg-yellow-active" data-toggle="modal" data-target="#strand_selection" style="cursor: pointer;">
            <div class="inner">
              <h3>TVL-AS</h3>

              <p>Technogy-Vocational<br>Livelihood: Automotive Services</p>
            </div>
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-md-6" id="gasdiv">
          <div class="small-box bg-maroon" data-toggle="modal" data-target="#strand_selection" style="cursor: pointer;">
            <div class="inner">
              <h3>GAS</h3>

              <p>General<br>Academic Strand</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-md-6" id="tvlhediv">
          <div class="small-box bg-blue" data-toggle="modal" data-target="#strand_selection" style="cursor: pointer;">
            <div class="inner">
              <h3>TVL-HE</h3>

              <p>Technology-Vocational<br>Livelihood: Home Economics</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-md-6" id="humssdiv">
          <div class="small-box bg-gray humssbox" data-toggle="modal" data-target="#humss" style="pointer-events: none;">
            <div class="inner">
              <h3>HUMSS</h3>

              <p>Humanities<br>and Social Sciences</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-md-6" id="abmdiv">
          <div class="small-box bg-gray abmbox" data-toggle="modal" data-target="#abm" style="pointer-events: none;">
            <div class="inner">
              <h3>ABM</h3>

              <p>Accountancy<br>and Business Management</p>
            </div>
            <div class="icon">
              <i class="fa fa-briefcase"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-md-6" id="stemdiv">
          <div class="small-box bg-gray stembox" data-toggle="modal" data-target="#stem" style="pointer-events: none;">
            <div class="inner">
              <h3>STEM</h3>

              <p>Science, Technology,<br> Engineering, and Mathematics</p>
            </div>
            <div class="icon">
              <i class="fa fa-flask"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->        

      </div>
      <!-- /.row -->
      </div>
      <!-- /.col-md-8 -->

      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

    <!-- MODALS -->

      <div class="modal fade" id="strand_selection">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-green">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Select Section for <span id="chosenStrand"></span></h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <table id="sectionsTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Section</th>
                  <th>Capacity</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Section</th>
                  <th>Capacity</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>
              <br>
                  <a href="<?php echo site_url('enrollment/enroll_student/enrolled') ?>">
                  <button type="button" id="enroll" class="btn bg-green" style="width: 100%; height: 50px;">Enroll to STEM</button>
                  </a>
                </center>
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

      




      <!-- ######################## HIDDEN INPUTS ########################### -->
      <form>
        <input type="hidden" id="r_s_id" name="registered_student_id">
        <input type="hidden" id="noteHidden" name="note">
        <input type="hidden" id="section_id" name="section_id">
      </form>

  </div>
  <!-- /.content-wrapper -->

  {footer}

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script>

  // var ajaxUrl = "<?php echo base_url("enrollment/enroll_student/getSectionTable"); ?>"

  // $.ajax({
  //           url: ajaxUrl,
  //           type: 'post',
  //           dataType: 'json', 
  //           data: {'value' : lastLrn, 'table': 'registered_students', 'set': 'lrn'}, 
  //           success: function(result){

  //               $('#name').html(result.first_name +" "+ result.middle_name + " " + result.last_name);
  //               $('#lrn').html(result.lrn);
  //               $('#contact').html(result.contact_number);
  //               $('#birth_date').html(result.birth_date);
  //               $('#birth_place').html(result.birth_place);
  //               $('#age').html(result.age);
  //               $('#mother_tongue').html(result.mother_tongue);
  //               $('#religion').html(result.religion);
  //               $('#sex').html(result.sex);   

                
              
  //             }
  // });


  $('#grade11').on('click',function()
  {
    $('#yearLevel').remove();
    $('#choose').remove();
    $('#grade').html('Grade 11');
    $('#grade').css('background-color','#603838');
    $('#req').css('display', 'block');
  });

  $('#grade12').on('click',function()
  {
    $('#yearLevel').remove();
    $('#choose').remove();
    $('#grade').html('Grade 12');
    $('#grade').css('background-color','#82595D');
    $('#req').css('display', 'block');
  });

  //Red color scheme for iCheck
  $('input[type="checkbox"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red'
  })


  $('.checkAll11').on('ifChecked', function (event) {
      $('.check11').iCheck('check');
      $('.subject11').prop('disabled', false);
      $('#grades11').removeClass('text-muted');
      $('#aStrands').css('display', 'block');
      triggeredByChild = false;
  });

  $('.checkAll11').on('ifUnchecked', function (event) {
      if (!triggeredByChild) {
          $('.check11').iCheck('uncheck');
      }
      $('.subject11').prop('disabled', true);
      $('#grades11').addClass('text-muted');
      $('#aStrands').css('display', 'none');
      triggeredByChild = false;
  });

  $('.check11').on('ifUnchecked', function (event) {
      triggeredByChild = true;
      $('.checkAll11').iCheck('uncheck');
  });

  $('.check11').on('ifChecked', function(event){
      if ($('.check11').filter(':checked').length == $('.check11').length) {
        $('.checkAll11').iCheck('check');

      }
  });

  

  $("#ave11").click(function(){
  var input1 = parseInt($('#eng11').val(),10);
  console.log(input1);
  var input2 = parseInt($('#math11').val(),10);
  var input3 = parseInt($('#sci11').val(),10);
  var input4 = parseInt($('#fil11').val(),10);
  var input5 = parseInt($('#ap11').val(),10);
  var input6 = parseInt($('#tle11').val(),10);
  var input7 = parseInt($('#comp11').val(),10);
  var input8 = parseInt($('#mapeh11').val(),10);

  if (isNaN(input1) || isNaN(input2) || isNaN(input3) || isNaN(input4) || isNaN(input5) || isNaN(input6) || isNaN(input7) || isNaN(input8)) {
    $('#error').text('Inputs must be numbers');
  } else {
    $('#error').remove();

      ave = (input1 + input2 + input3 + input4 + input5 + input6 + input7 +input8) / 8;
      $('#avera').text(ave);

      if (ave > 85){
        $('.stembox').hide();
        $('.abmbox').hide();
        $('.humssbox').hide();

        $('#humssdiv').append('<div class="small-box bg-red-active color-palette humssbox" data-toggle="modal" data-target="#strand_selection" style="curor: pointer;"><div class="inner"><h3>HUMSS</h3><p>Humanities and<br> Social Sciences</p></div><div class="icon"><i class="fa fa-users"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');

        $('#abmdiv').append('<div class="small-box bg-green-active color-palette abmbox" data-toggle="modal" data-target="#strand_selection" style="cursor: pointer;"><div class="inner"><h3>ABM</h3><p>Accountancy and Business<br> Management</p></div><div class="icon"><i class="fa fa-briefcase"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');

        $('#stemdiv').append('<div class="small-box bg-purple-active color-palette stembox" data-toggle="modal" data-target="#strand_selection" style="cursor: pointer;"><div class="inner"><h3>STEM</h3><p>Science, Technology,<br> Engineering, and Mathematics</p></div><div class="icon"><i class="fa fa-flask"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');
      } else{
        $('.stembox').hide();
        $('.abmbox').hide();
        $('.humssbox').hide();

        $('#humssdiv').append('<div class="small-box bg-gray color-palette humssbox" data-toggle="modal" data-target="#humss" style="curor: pointer;"><div class="inner"><h3>HUMSS</h3><p>Humanities and<br> Social Sciences</p></div><div class="icon"><i class="fa fa-users"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');

        $('#abmdiv').append('<div class="small-box bg-gray color-palette abmbox" data-toggle="modal" data-target="#abm" style="cursor: pointer;"><div class="inner"><h3>ABM</h3><p>Accountancy and Business<br> Management</p></div><div class="icon"><i class="fa fa-briefcase"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');

        $('#stemdiv').append('<div class="small-box bg-gray color-palette stembox" data-toggle="modal" data-target="#stem" style="cursor: pointer;"><div class="inner"><h3>STEM</h3><p>Science, Technology,<br> Engineering, and Mathematics</p></div><div class="icon"><i class="fa fa-flask"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');
      }
    }
  });


  $('#tvlasdiv').click(function()
  {
    $('.modal-header').removeClass('bg-green');
    $('.modal-header').addClass('bg-yellow-active');
    $('#chosenStrand').html('TVL-AS');
    $('#enroll').removeClass('bg-green');
    $('#enroll').addClass('bg-yellow-active');
  });

  $('#gasdiv').click(function()
  {
    $('.modal-header').removeClass('bg-green');
    $('.modal-header').addClass('bg-maroon');
    $('#chosenStrand').html('GAS');
    $('#enroll').removeClass('bg-green');
    $('#enroll').addClass('bg-maroon');
  });

  // $('#tvlhediv').on('click',function()
  // {
  //   $('.modal-header').removeClass('bg-green');
  //   $('.modal-header').addClass('bg-blue');
  //   $('#chosenStrand').html('TVL-HE');
  //   $('#enroll').removeClass('bg-green');
  //   $('#enroll').addClass('bg-blue');
  // });

  // $('#humssdiv').on('click',function()
  // {
  //   $('.modal-header').removeClass('bg-green');
  //   $('.modal-header').addClass('bg-red-active');
  //   $('#chosenStrand').html('HUMSS');
  //   $('#enroll').removeClass('bg-green');
  //   $('#enroll').addClass('bg-red-active');
  // });

  // $('#abmdiv').on('click',function()
  // {
  //   $('#chosenStrand').html('ABM');
  // });

  // $('#stemdiv').on('click',function()
  // {
  //   $('.modal-header').removeClass('bg-green');
  //   $('.modal-header').addClass('bg-purple-active');
  //   $('#chosenStrand').html('STEM');
  //   $('#enroll').removeClass('bg-green');
  //   $('#enroll').addClass('bg-purple-active');
  // });


 

  
</script>


</body>
</html>
