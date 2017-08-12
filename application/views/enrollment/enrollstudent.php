<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Enroll Student</title>
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
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>School</b>Management</span>
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
            <li class="active">
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
    <div class="alert bg-navy alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Reminder!</h4>
        Make sure to receive the necessary requirements for enrollment, otherwise the student won't be enrolled!
     </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Enroll Student
        <small>(IDK what to put here)</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li class="active">Enroll Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <!-- general form elements -->
      <div class="row">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Senior High School Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form name= "studentprofile" id="studentprofile" role="form">
              <div class="box-body" style="padding-bottom: 20px;">
                <div class="form-group">
                  <label>LRN</label>
                  <input type="text" class="form-control" id="inputLRN" placeholder="Learner Reference Number">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                    <div class="row">
                      <div class="col-md-4">
                        <input type="text" class="form-control" id="inputFNAME" placeholder="First Name">
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="form-control" id="inputMNAME" placeholder="Middle Name">
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="form-control" id="inputLNAME" placeholder="Last Name">
                      </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label>Sex</label>
                  <select class="form-control" id="inputSEX">
                    <option>Female</option>
                    <option>Male</option>
                  </select>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label>Contact Number</label>
                  <input type="text" class="form-control" id="inputCONTACT" placeholder="Contact Number">
                </div>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label>Birth Date</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" id="datepicker" placeholder="mm/dd/yyyy">
                  </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label>Birth Place</label>
                  <input type="text" class="form-control" id="inputBIRTHPLACE" placeholder="Birth Place">
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label>Age <small>(as of last birthday)</small></label>
                  <input type="text" class="form-control" id="inputAGE" placeholder="Age">
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Mother Tongue</label>
                  <input type="text" class="form-control" id="inputMOTHERTONGUE" placeholder="Mother Tongue">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Religion</label>
                  <input type="text" class="form-control" id="inputRELIGION" placeholder="Religion">
                </div>
                </div>
                </div>
                <hr>
                <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                  <div class="row">
                      <div class="col-md-3">
                        <input type="text" class="form-control" id="inputSTREET" placeholder="House #, Street" sty>
                      </div>
                      <div class="col-md-3">
                        <input type="text" class="form-control" id="inputBARANGAY" placeholder="Barangay">
                      </div>
                      <div class="col-md-3">
                        <input type="text" class="form-control" id="inputCITY" placeholder="City">
                      </div>
                      <div class="col-md-3">
                        <input type="text" class="form-control" id="inputPROVINCE" placeholder="Province">
                      </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Father's Name</label>
                  <input type="text" class="form-control" id="inputFATHER" placeholder="Father's Name">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Mother's Maiden Name</label>
                  <input type="text" class="form-control" id="inputMOTHER" placeholder="Mother's Maiden Name">
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Father's Contact No.</label>
                  <input type="text" class="form-control" id="inputFATHERCONTACT" placeholder="Father's Contact No.">
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Mother's Contact No.</label>
                  <input type="text" class="form-control" id="inputMOTHERCONTACT" placeholder="Mother's Contact No.">
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Guardian's Name</label>
                  <input type="text" class="form-control" id="inputGUARDIAN" placeholder="Guardian's Name">
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Relationship</label>
                  <input type="text" class="form-control" id="inputRELATIONSHIP" placeholder="Relationship with Guardian">
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputEmail1">Guardian's Contact No.</label>
                  <input type="text" class="form-control" id="inputGUARDIANCONTACT" placeholder="Guradian's Contact No.">
                </div>
                </div>
                </div>
                <hr>
                <div class="form-group">
                <label>Requirements</label>
                <select class="form-control select2" multiple="multiple" id="inputREQUIREMENTS" data-placeholder="Select Requirement"
                        style="width: 100%;">
                  <option id="f137">Form 137</option>
                  <option id="f138">Form 138</option>
                  <option id="nso">NSO Birth Certificate</option>
                </select>
              </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
        </div>

        <div class="col-md-6">  
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Senior High School Profile</h3>
              <div class="box-body">
                <div class="form-group">
                  <label>LRN</label>
                  <div id="textLRN"><i class="text-red">Please input</i></div>
                </div>
                <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                        <label>First Name</label>
                        <div id="textFNAME"><i class="text-red">Please input</i></div>
                      </div>
                      <div class="col-md-4">
                        <label>Middle Name</label>
                        <div id="textMNAME""><i class="text-red">Please input</i></div>
                      </div>
                      <div class="col-md-4">
                        <label>Last Name</label>
                        <div id="textLNAME""><i class="text-red">Please input</i></div>
                      </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label>Sex</label>
                  <div id="textSEX"><i class="text-red">Please input</i></div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label>Contact Number</label>
                  <div id="textCONTACT"><i class="text-red">Please input</i></div>
                </div>
                </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label>Birth Date</label>
                  <div id="textDATEPICKER"><i class="text-red">Please input</i></div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label>Birth Place</label>
                  <div id="textBIRTHPLACE"><i class="text-red">Please input</i></div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label>Age <small>(as of last birthday)</small></label>
                  <div id="textAGE"><i class="text-red">Please input</i></div>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label>Mother Tongue</label>
                  <div id="textMOTHERTONGUE"><i class="text-red">Please input</i></div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label>Religion</label>
                  <div id="textRELIGION"><i class="text-red">Please input</i></div>
                </div>
                </div>
                </div>
                <hr>
                <div class="form-group">
                  <label>Address</label>
                    <div id="textADDRESS"><i class="text-red">Please input</i></div>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label>Father's Name</label>
                  <div id="textFATHER"><i class="text-red">Please input</i></div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label>Mother's Maiden Name</label>
                  <div id="textMOTHER"><i class="text-red">Please input</i></div>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label>Father's Contact No.</label>
                  <div id="textFATHERCONTACT"><i class="text-red">Please input</i></div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label>Mother's Contact No.</label>
                  <div id="textMOTHERCONTACT"><i class="text-red">Please input</i></div>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                  <label>Guardian's Name</label>
                  <div id="textGUARDIAN"><i class="text-red">Please input</i></div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label>Relationship</label>
                  <div id="textRELATIONSHIP"><i class="text-red">Please input</i></div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                  <label>Guardian's Contact No.</label>
                  <div id="textGUARDIANCONTACT"><i class="text-red">Please input</i></div>
                </div>
                </div>
                </div>
                <hr>
                <div class="form-group">
                  <label>Requirements</label>
                  <div id="textREQUIREMENTS"><i class="text-red">Please pass</i></div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?php echo site_url('enrollment/enrollstudent/strands') ?>">
                <button type="button" class="btn btn-primary pull-right">Submit</button>
                </a>
              </div>
            </div>
            <!-- /.box-header -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-md-6 --> 
      </div>
      <!-- /.row -->
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

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- js ni adrii -->
<script src="<?php echo base_url(); ?>js/forminput.js"></script>
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
<script type="text/javascript">
  //Initialize Select2 Elements
    $('.select2').select2()
</script>

</body>
</html>
