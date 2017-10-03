<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BABAGUHIN</title>
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
    <a href="<?php echo site_url('/') ?>" class="logo" style="background: rgb(97, 22, 35)">
      {logo}
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #6C1827">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
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
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="<?php echo site_url('enrollment/register_student/form'); ?>">
                    <i class="fa fa-circle-o"></i>
                    Register Form
                  </a>
                </li>
              </ul>
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
              <a href="#">
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
        
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding-bottom: 385px;">
    <div class="alert bg-blue alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Reminder!</h4>
        Always ask for a clear copy of the student's signature!
     </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Enroll Student
        <small>Choose one</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li class="active"><a href="#">Enroll Student</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row" style="margin-top: 20px;">
            <div class="col-md-4">
              <div class="alert alert-warning" style="height: 382px; padding: 25px 50px 20px 30px;">
                <h4><i class="icon fa fa-check"></i> Remember!</h4>
                <ul style="font-size: 16px;">
                  <li>Don't be distracted by your surroundings</li>
                  <li>Make sure you input the correct data!</li>
                  <li>Explain thoroughly the process of enrollment to the applicant</li>
                  <li>Answer any question being asked</li>
                  <li>Be approachable!</li>
                  <li>Smile!</li>
                </ul>
              </div>
            </div>

            <div class="col-md-8">
              <div class="row">
              <div class="col-md-6">
              <div class="small-box bg-purple" id="show">
                <div class="inner">
                  <h3>Apply</h3>

                  <p>For Enrollment</p>
                </div>
                <div class="icon">
                  <i class="fa  fa-files-o"></i>
                </div>
                <a href="#" class="small-box-footer" style="height: 26px;">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

              
            </div>

            <div class="col-md-6">
              <div class="small-box bg-maroon" id="change">
                <div class="inner">
                  <h3>Search</h3>

                  <p>Online Applications</p>
                </div>
                <div class="icon">
                  <i class="fa fa-search"></i>
                </div>
                <a href="#" class="small-box-footer" style="height: 26px;">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>

          <div id="lapa">
            <div class="alert bg-gray" style="height: 234px;">
                <div>
                <center>
                <i class="icon fa fa-exclamation-triangle fa-4x" style="margin-top: 25px;"></i>
                <h3>No button selected!</h3>
                <h4> Please choose from the two buttons above</h4>
                </center>
                </div>
            </div>
          </div>

          <div hidden id="apply">
            <div class="alert bg-purple" style="padding-bottom: 45px;">
                <div>
                <h4><i class="icon fa fa-check"></i> Apply for enrollment!</h4>
                <ol type= "1" style="font-size: 16px;">
                  <li>Fill up a personal information form</li>
                  <li>Submit necessary requirements</li>
                  <li>Input grades to determine available strands</li>
                  <li>Select desired strand</li>
                  <li>Sumbit requirements</li>
                  <li>Finish Enrollment</li>
                  <a href="<?php echo site_url('enrollment/enroll_student/enroll')?>">
                  <button type="button" class="btn pull-right" style="background-color: rgba(0,0,0,0.25); color: white; margin-top: 10px;">Proceed</button>
                  </a>
                </ol>
                </div>
            </div>
          </div>
          <div hidden id="search">
            <div class="alert bg-maroon" style="padding-bottom: 45px;">
                <div>
                <h4><i class="icon fa fa-check"></i> Search for Applications Online!</h4>
                <ol type= "1" style="font-size: 16px;">
                  <li>Search for applications filed by the students from the Araullo website</li>
                  <li>Submit necessary requirements</li>
                  <li>Input grades to determine available strands</li>
                  <li>Select desired strand</li>
                  <li>Sumbit requirements</li>
                  <li>Finish Enrollment</li>
                  <a href="<?php echo site_url('enrollment/enroll_student/search') ?>">
                  <button type="button" class="btn pull-right" style="background-color: rgba(0,0,0,0.25); color: white; margin-top: 10px;">Proceed</button>
                  </a>
                </ol>
                </div>
            </div>
          </div>
          </div>
          <!-- /.row-->
    </div>

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
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>
$(document).ready(function(){
    $("#show").click(function(){ 
      $("#lapa").hide();     
      $("#apply").show();
      $("#search").hide();
    });
    $("#change").click(function(){
      $("#lapa").hide();
      $("#apply").hide();
      $("#search").show();
    });
});

</script>

</body>
</html>
