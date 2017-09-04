<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Strand Selection</title>
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

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">
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
              <a href="<?php echo site_url('enrollment/view_data'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  View Data
              </a>
            </li>
            <li class="active">
              <a href="<?php echo site_url('enrollment/enroll_student'); ?>">
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
  <div class="content-wrapper" style="padding-bottom: 50px;">
    <div class="alert bg-maroon alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Choose Carefully!</h4>
        Once a strand has been picked, the student could no longer change his or her strand.
     </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Strand Selection
        <small>Grade Inputing</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li><a href="#">Enroll Students</a></li>
        <li class="active">Strand Selection</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
    <div class="col-md-4">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Please enter the ff. grades: </h3>
        </div>
        <div class="box-body">
        <form>
          <div class="form-group">
            <label>English</label>
            <input type="text" class="form-control" name="english" style="margin-bottom: -10px;">
          </div>
          <div class="form-group">
            <label>Mathematics</label>
            <input type="text" class="form-control" name="math"  style="margin-bottom: -10px;">
          </div>
          <div class="form-group">
            <label>Science</label>
            <input type="text" class="form-control" name="science"  style="margin-bottom: -10px;">
          </div>
          <div class="form-group">
            <label>Filipino</label>
            <input type="text" class="form-control" name="filipino"  style="margin-bottom: -10px;">
          </div>
          <div class="form-group">
            <label>Araling Panlipunan</label>
            <input type="text" class="form-control" name="ap" style="margin-bottom: -10px;">
          </div>
          <div class="form-group">
            <label>T.L.E.</label>
            <input type="text" class="form-control" name="tle" style="margin-bottom: -10px;">
          </div>
          <div class="form-group">
            <label>Computer Education</label>
            <input type="text" class="form-control" name="computer" style="margin-bottom: -10px;">
          </div>
          <div class="form-group">
            <label>MAPEH</label>
            <input type="text" class="form-control" name="mapeh" style="margin-bottom: -10px;">
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-primary btn-flat">Submit</button>
        </div>
        <!-- /.box-footer-->
      </form>
      </div>
      <!-- /.box -->
      </div>
      <!-- /.col-md-3 -->

      <div class="col-md-8">
        <div style="margin-bottom: 20px;">
        <h3>Available Strands:</h3>
        </div>

      <div class="row">

        <div class="col-md-6">
          <div class="small-box bg-green" data-toggle="modal" data-target="#stem" style="cursor: pointer;">
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

        <div class="col-md-6">
          <div class="small-box bg-maroon" data-toggle="modal" data-target="#gas" style="cursor: pointer;">
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

      </div>
      <!-- /.row -->

      <div class="row">

        <div class="col-md-6">
          <div class="small-box bg-yellow" data-toggle="modal" data-target="#humss" style="cursor: pointer;">
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

        <div class="col-md-6">
          <div class="small-box bg-purple" data-toggle="modal" data-target="#abm" style="cursor: pointer;">
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

      </div>
      <!-- /.row -->

      <div class="row">

        <div class="col-md-6">
          <div class="small-box bg-blue" data-toggle="modal" data-target="#tvlhe" style="cursor: pointer;">
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

        <div class="col-md-6">
          <div class="small-box bg-navy" data-toggle="modal" data-target="#tvla" style="cursor: pointer;">
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

      </div>
      <!-- /.row -->
      </div>
      <!-- /.col-md-8 -->
      </div>
      <!-- /.row -->

      <div class="modal fade" id="stem">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-green">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <p>This action cannot be changed once the profile is sent to the database of the selected strand (STEM).</p>
                <br>
                <center>
                  <a href="<?php echo site_url('enrollment/enroll_student/enrolled') ?>">
                  <button type="button" class="btn bg-green" data-toggle="modal" data-target="#stem" style="width: 60%; height: 50px;">Enroll to STEM</button>
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

      <div class="modal fade" id="gas">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-maroon">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <p>This action cannot be changed once the profile is sent to the database of the selected strand (GAS).</p>
                <br>
                <center>
                  <a href="<?php echo site_url('enrollment/enroll_student/enrolled') ?>">
                  <button type="button" class="btn bg-maroon" data-toggle="modal" data-target="#stem" style="width: 60%; height: 50px;">Enroll to GAS</button>
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

      <div class="modal fade" id="humss">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-yellow">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <p>This action cannot be changed once the profile is sent to the database of the selected strand (HUMSS).</p>
                <br>
                <center>
                  <a href="<?php echo site_url('enrollment/enroll_student/enrolled') ?>">
                  <button type="button" class="btn bg-yellow" data-toggle="modal" data-target="#stem" style="width: 60%; height: 50px;">Enroll to HUMSS</button>
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

      <div class="modal fade" id="abm">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-purple">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <p>This action cannot be changed once the profile is sent to the database of the selected strand (ABM).</p>
                <br>
                <center>
                  <a href="<?php echo site_url('enrollment/enroll_student/enrolled') ?>">
                  <button type="button" class="btn bg-purple" data-toggle="modal" data-target="#stem" style="width: 60%; height: 50px;">Enroll to ABM</button>
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

      <div class="modal fade" id="tvlhe">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-blue">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <p>This action cannot be changed once the profile is sent to the database of the selected strand (TVL-HE).</p>
                <br>
                <center>
                  <a href="<?php echo site_url('enrollment/enroll_student/enrolled') ?>">
                  <button type="button" class="btn bg-blue" data-toggle="modal" data-target="#stem" style="width: 60%; height: 50px;">Enroll to TVL-HE</button>
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

      <div class="modal fade" id="tvla">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-navy">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Are you sure?</h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <p>This action cannot be changed once the profile is sent to the database of the selected strand (TVL-Automative).</p>
                <br>
                <center>
                  <a href="<?php echo site_url('enrollment/enroll_student/enrolled') ?>">
                  <button type="button" class="btn bg-navy" data-toggle="modal" data-target="#stem" style="width: 60%; height: 50px;">Enroll to TVL-Automative</button>
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


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  {footer}
  <!-- /.Footer -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>
//Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
</script>

</body>
</html>
