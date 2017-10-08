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
    <nav class="navbar navbar-static-top" style="background-color: #6C1827" >
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
                  <a href="<?php echo site_url('profile')?>" class="btn btn-default btn-flat">Profile</a>
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
            <!-- <li>
              <a href="<?php echo site_url('enrollment/dashboard'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Dashboard
              </a>
            </li>  -->        
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

        <li class="treeview">
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
              <a href="<?php echo site_url('reports/student_reports'); ?>">
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
     <div id="alert-box" class="alert alert-danger alert-dismissible flat" hidden>
      <button type="button" class="close" aria-hidden="true">&times;</button>
      <h4 id="alert-title"><i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!</h4>
        <div id="alert-message">Subject code already used. Please use another one.</div>
     </div>
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My Profile
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">My Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('images/alt_picture.jpg'); ?>" alt="User profile picture">

              <h3 class="profile-username text-center">Adrielle Escaro</h3>

              <p class="text-muted text-center">Administrator</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>
                    <?php if($this->session->position == 'Administrator' || $this->session->position == 'Teacher') { echo 'Employee ID';} else { echo 'LRN';}?>
                  </b> <a class="pull-right"><?php echo $this->session->employee_id;?></a>
                </li>
                <li class="list-group-item">
                  <b>Position</b> <a class="pull-right"><?php echo $this->session->position;?></a>
                </li>
                <li class="list-group-item">
                  <b>Status</b> <a class="pull-right badge bg-blue">Active</a>
                </li>
              </ul>

              <!-- <a href="#" class="btn btn-primary btn-block"><b>Edit Profile</b></a> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li  class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
              <?php if($this->session->position == 'Student' || $this->session->position == 'Teacher') { ?><li><a href="#subjects" data-toggle="tab">Subjects</a></li>
              <?php } ?>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="profile">

                <?php if($this->session->position == 'Administrator' || $this->session->position == 'Teacher') { ?>
                  <div class="row" style="margin-top: 10px">
                    <div class="col-md-12">
                      <label>Personal Information</label>
                      <table class="table table-striped">
                        <thead>
                          <td></td>
                          <td></td>
                        </thead>   
                          <tr>
                            <td>Major</td>
                            <td><?php echo $this->session->major;?></td>                        
                          </tr>          
                          <tr>
                            <td>Sex</td>
                            <td><?php echo $this->session->sex;?></td>                        
                          </tr>
                          <tr>
                            <td>Birthdate</td>
                            <td><?php echo date("M j, Y", strtotime($this->session->birthdate));?></td>
                            </tr>
                          <tr>
                            <td>Contact Number</td>
                            <td><?php echo $this->session->contact_no;?></td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><?php echo $this->session->email;?></td>
                          </tr>
                      </table>
                    </div>
                  </div>
                <?php } ?>

                <!-- <div class="row">
                  <div class="col-md-12">
                    <label>Personal Information (student display)</label>
                    <table class="table table-striped">
                      <thead>
                        <td></td>
                        <td></td>
                      </thead>
                        <tr>
                          <td>Admission Date</td>
                          <td>June 15, 2016</td>
                        </tr>
                        <tr>
                          <td>LRN</td>
                          <td>000912332998</td>
                        </tr>                
                        <tr>
                          <td>Sex</td>
                          <td>Female</td>                        
                        </tr>
                        <tr>
                          <td>Birthdate</td>
                          <td>February 11, 1999</td>
                          </tr>
                        <tr>
                          <td>Mobile Number</td>
                          <td>09991232147</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>someone@example.com</td>
                        </tr>
                    </table>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                  <label>Parent/Guardian Information</label>
                    <table class="table table-striped">
                      <thead>
                        <td></td>
                        <td></td>
                      </thead>
                        <tr>
                          <td>Mother Name</td>
                          <td>Mother Teresa</td>
                        </tr>
                        <tr>
                          <td>Mother Phone</td>
                          <td>09991218658</td>
                        </tr>                
                        <tr>
                          <td>Father Name</td>
                          <td>Father Dad</td>                        
                        </tr>
                        <tr>
                          <td>Father Phone</td>
                          <td>09179925764</td>
                          </tr>
                        <tr>
                          <td>Guardian Name</td>
                          <td>Mother Teresa</td>
                        </tr>
                        <tr>
                          <td>Guardian Relationship</td>
                          <td>Mother</td>
                        </tr>
                        <tr>
                          <td>Guardian Address</td>
                          <td>069 Lost Village, NotFound St., Nowhere City</td>
                        </tr>
                    </table>
                  </div>
                </div> -->

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="subjects">
                <div class="row">
                  <div class="col-md-12">
                    <label>Subjects (student display)</label>
                    <table class="table table-striped">
                      <thead>
                        <th>Subjects</th>
                        <th>Teacher</th>
                      </thead>
                        <tr>
                          <td>General Mathemactics</td>
                          <td>James Kevin Movera Fernandez</td>
                        </tr>
                        <tr>
                          <td>World Literature</td>
                          <td>Robert Madrilejos</td>
                        </tr>                
                        <tr>
                          <td>Physics</td>
                          <td>Luxannas Demacia Crownguard</td>                        
                        </tr>
                        <tr>
                          <td>Oral Communication</td>
                          <td>Regina Araojo</td>
                        </tr>
                    </table>
                  </div>
                  <!-- /.col -->
                </div><hr>
                <!-- /.row-->
                <div class="row">
                  <div class="col-md-12">
                    <label>Subjects (teacher display)</label>
                    <table class="table table-striped">
                      <thead>
                        <th>Class</th>
                        <th>Subjects</th>
                      </thead>
                        <tr>
                          <td>STEM-1A</td>
                          <td>General Mathemactics</td>
                        </tr>
                        <tr>
                          <td>STEM-1B</td>
                          <td>General Mathematics</td>
                        </tr>                
                        <tr>
                          <td>GAS-1A</td>
                          <td>General Mathematics</td>                        
                        </tr>
                        <tr>
                          <td>ABM-1A</td>
                          <td>General Mathematics</td>
                          </tr>
                        <tr>
                          <td>HUMSS-1A</td>
                          <td>General Mathematics</td>
                        </tr>
                    </table>
                  </div>
                  <!-- /.col -->
                </div><hr>
                <!-- /.row-->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">
                <div class="row">
                  <div class="col-md-12">
                    <label>Account Information</label>
                    <table class="table table-striped">
                      <thead>
                        <td></td>
                        <td></td>
                      </thead>
                        <tr>
                          <td>Date Created</td>
                          <td><?php $dc = explode(" ",$this->session->date_created); echo date("M j, Y", strtotime($dc[0])); ?></td>
                        </tr>
                        <tr>
                          <td>Username</td>
                          <td><?php echo $this->session->username;?></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td><a href="#" id="link-change">Change Password</a></td>
                        </tr>                                        
                    </table>
                  </div>
                  <!-- /.col-->
                </div>

                <hr class="change-password" hidden>
                <div class="row change-password" hidden>
                  <div class="col-md-12">
                    <label>Change Password</label>
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputCurPass" class="col-sm-2 control-label">Current</label>

                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="input-current" placeholder="Current Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputNewPass" class="col-sm-2 control-label">New</label>

                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="input-new" placeholder="New Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputRetypeNew" class="col-sm-2 control-label">Re-type new</label>

                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="input-retype" placeholder="Re-type new password">
                        </div>
                      </div>
                      <input type="hidden" id="input-username" value="<?php echo $this->session->username;?>">
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button id="btn-save" type="submit" class="btn btn-sm pull-right btn-primary">Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            </div>
          </div>
        </div>        
      <!-- /.row -->
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
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>bower_components/Chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- page script -->
<script src="<?php echo base_url(); ?>dist/js/enrollment/dashboard.js"></script>

<script>
  $('#link-change').click(function(){
    $('.change-password').show();
  })
  var changeUrl = '<?php echo base_url('profile/change_password');?>';

  $('#btn-save').click(function(){

  var username = $('#input-username').val();
  var current = $('#input-current').val();
  var new_pass = $('#input-new').val();
  var retype = $('#input-retype').val();

  $('.loading').show();
    $.ajax({
      url: changeUrl,
      type: 'post',
      dataType: 'json', 
      data: {'username' : username, 'current' : current, 'new' : new_pass, 'retype' : retype  }, 
      success: function(result){
        console.log(result);
        if(result == true){
          $('#input-current').val('');
          $('#input-new').val('');
          $('#input-retype').val('');


          $('#alert-box').addClass('alert-success').removeClass('alert-danger');
          $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-check"></i> SUCCESS MESSAGE!');
          $('#alert-message').html('Password updated.');
          $('#alert-box').slideDown(1000);
          $('#alert-box').delay( 2000 ).slideUp(1000);
        }
        else if(result == false){
          $('#input-current').val('');
          $('#input-new').val('');
          $('#input-retype').val('');


          $('#alert-box').slideDown(1000);
          $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
          $('#alert-message').html('Incorrect input.');
          $('#alert-box').delay( 1500 ).slideUp(1000);
        }

        $('.loading').delay(500).hide();
      }
    });   
  })
</script>
</body>
</html>
