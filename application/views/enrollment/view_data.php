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
  <!-- Loading -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">
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
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Subjects (admin)
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Manage Class (admin)
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('enrollment/manage_schedule'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Manage Schedule (admin)
              </a>
            </li>
            <li class="active">
              <a href="<?php echo site_url('enrollment/view_data'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  View Data
              </a>
            </li>
            <li>
              <a href="#">
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
      
        
        <li class="header">LABELS</li>
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
              <h3><?php echo $studentsCount ?></h3>

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
              <h3><?php echo $teachersCount ?></h3>

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
              <h3><?php echo $roomsCount ?></h3>

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
          <div class="small-box bg-red" id="viewClasses" style="cursor: pointer;">
            <div class="inner">
              <h3><?php echo $classesCount ?></h3>

              <p>Class</p>
            </div>
            <div class="icon">
              <i class="fa fa-star"></i>
            </div>
            <a href="#" class="small-box-footer">View table <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green" id="viewClasses" style="cursor: pointer;">
            <div class="inner">
              <h3><?php echo $classesCount ?></h3>

              <p>Online Applicants</p>
            </div>
            <div class="icon">
              <i class="fa fa-paperclip"></i>
            </div>
            <a href="#" class="small-box-footer">View table <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple" id="viewClasses" style="cursor: pointer;">
            <div class="inner">
              <h3><?php echo $classesCount ?></h3>

              <p>Enrolled Students</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">View table <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-fuchsia" id="viewClasses" style="cursor: pointer;">
            <div class="inner">
              <h3><?php echo $classesCount ?></h3>

              <p>Strands</p>
            </div>
            <div class="icon">
              <i class="fa fa-folder-open"></i>
            </div>
            <a href="#" class="small-box-footer">View table <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal" id="viewClasses" style="cursor: pointer;">
            <div class="inner">
              <h3><?php echo $classesCount ?></h3>

              <p>Subjects</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
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
                <tr class = "record">
                  <td>14-038-014</td>
                  <td>Hakeem Polistico
                  </td>
                  <td>12</td>
                </tr>
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
  
  <!-- Footer -->
  {footer}
  <!-- /.Footer -->

</div>
<!-- ./wrapper -->


<!--Modal-->
<div class="modal fade" id="modal-default">

          <div class="modal-dialog" style="align-self: center; max-width: 500px">
          <!-- Profile Image -->
          <div class="box box-primary" >
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('images/alt_picture.jpg'); ?>" alt="User profile picture">

              <h3 id="name" class="profile-username text-center" ></h3>

              <p class="text-muted text-center" id="position"></p>
		<div class="row">
        <div class="col-md-6">
              <ul class="list-group list-group-unbordered" style= "text-align: center">
                <li class="list-group-item">
                  <b>LRN</b><br> <a id="lrn"></a>
                </li>
                <li class="list-group-item">
                  <b>Contact No.</b><br> <a id="contact"></a>
                </li>
                <li class="list-group-item">
                  <b>Birthdate</b><br> <a id="birth_date" ></a>
                </li>
                <li class="list-group-item">
                  <b>Birthplace</b> <br><a id="birth_place"></a>
                </li>
                <li class="list-group-item">
                  <b>Age</b><br> <a id="age"></a>
                </li>
                <li class="list-group-item">
                  <b>Mother Tongue</b><br> <a id="mother_tongue"></a>
                </li>
                <li class="list-group-item">
                  <b>Religion</b> <br><a id="religion">c</a>
                </li>
                <li class="list-group-item">
                  <b>Address</b> <br><a id="street"></a><br><a id="barangay"></a><a id="city"></a><br><a id="province"></a><br>
                </li>
				</ul>
			</div>
			<div class="col-md-6">
			<ul class="list-group list-group-unbordered" style= "text-align: center">
                <li class="list-group-item">
                  <b>Sex</b> <br><a id="sex"></a>
                </li>
				<li class="list-group-item">
                  <b>Father's Name</b> <br><a id="father_name">asd</a>
                </li>
				<li class="list-group-item">
                  <b>Father's Contact No</b> <br><a id="father_contact">asd</a>
                </li>
				<li class="list-group-item">
                  <b>Mother's Maiden Name</b> <br><a id="mother_name">asd</a>
                </li>
				<li class="list-group-item">
                  <b>Mother's Contact No</b> <br><a id="mother_contact">asd</a>
                </li>
				<li class="list-group-item">
                  <b>Guardian's Name</b><br> <a id="guardian">asd</a>
                </li>
				<li class="list-group-item">
                  <b>Guardian's Relationship</b> <br><a id="relationship">asd</a>
                </li>
				<li class="list-group-item">
                  <b>Guardian's Contact No</b> <br><a id="guardian_contact">asd</a>
                </li>
				</ul>
			</div>
			</div>
				<ul class="list-group list-group-unbordered">
  				<li class="list-group-item">
  					<strong><i class="fa fa-book margin-r-5"></i> Note</strong>
  					 <p class="text-muted" id="modal-note"></p>
  				</li>

			<form action="/enrollment/view_data/updateRequirements" method="post">
  				<li class="list-group-item requirements-section">
  					<strong><i class="fa fa-book margin-r-5"></i>Requirements</strong>
  	
  					  <select class="form-control select2" multiple="multiple" name="requirement[]" id="modal-requirements" data-placeholder="Select Requirement" style="width: 100%;">
                <option id="f137">Form 137</option>
                <option id="f138">Form 138</option>
                <option id="nso">NSO Birth Certificate</option>
              </select>
              <input id="input-lrn" name="lrn" type="hidden" />

  				</li>
              </ul>
              <a href="#" class="btn btn-primary btn-block pull-left" data-dismiss="modal" style="max-width: 100px"><b>Close</b></a>
              <input id="input-submit" type="submit" href="#" class="btn btn-primary btn-block pull-right" style="max-width: 100px" />
      </form>
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
  var arrofobject = <?php echo $studentRecords;?>;
  var arrofobject2 = <?php echo $teacherRecords;?>;
  var arrofobject3 = <?php echo $roomRecords;?>;
  var arrofobject4 = <?php echo $classRecords;?>;
  var ajaxUrl = "<?php echo base_url("enrollment/view_data/ajax"); ?>"
  var ajaxReqUrl = "<?php echo base_url("enrollment/view_data/ajaxReq"); ?>"
</script> 

<script src="<?php echo base_url(); ?>dist/js/enrollment/view_data.js"></script>
<script type="text/javascript">
  //Initialize Select2 Elements
    $('.select2').select2()
</script>

</body>
</html>
