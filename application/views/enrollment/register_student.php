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
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">
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
<style type="text/css">
  .error {
  color: red;
  font-size: 14px;
  }
</style>
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
            <li class="active">
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
    <div class="alert bg-navy alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Reminder!</h4>
        Make sure to receive the necessary requirements for enrollment, otherwise the student won't be enrolled!
     </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Register Student
        <small>Entering student info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li class="active">Register Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <div class="col-md-12">
          <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Student Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body" style="padding-bottom: 20px;">
              <form method="POST" action="<?php echo base_url('enrollment/register_student/register/'); ?>">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>LRN<span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="lrn" id="inputLRN" value="<?php echo set_value('lrn'); ?>" placeholder="Learner Reference Number">
                        <?php echo form_error('lrn'); ?>
                    </div>
                  </div>
                </div>
                <!-- /.row -->

                <div class="form-group">
                  <label>Name<span class="text-red">*</span></label>
                    <div class="row">
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="first_name" id="inputFNAME" value="<?php echo set_value('first_name'); ?>" placeholder="First Name">
                        <?php echo form_error('first_name'); ?>
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="middle_name" id="inputMNAME" value="<?php echo set_value('middle_name'); ?>" placeholder="Middle Name">
                        <?php echo form_error('middle_name'); ?>
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="last_name" id="inputLNAME" value="<?php echo set_value('last_name'); ?>" placeholder="Last Name">
                        <?php echo form_error('last_name'); ?>
                      </div>
                    </div>
                </div>
                <!-- /.form-group -->

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Sex<span class="text-red">*</span></label>
                      <select class="form-control" id="inputSEX" name="sex" value="<?php echo set_select('sex'); ?>" placeholder="Sex">
                        <option value="" disabled selected>Sex</option>
                        <option value="Female" <?php echo  set_select('sex', 'Female'); ?> >Female</option>
                        <option value="Male" <?php echo  set_select('sex', 'Male'); ?> >Male</option>
                      </select>
                      <?php echo form_error('sex'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Contact Number<span class="text-red">*</span></label>
                      <input type="text" class="form-control" name="contact_number" id="inputCONTACT" value="<?php echo set_value('contact_number'); ?>" placeholder="Contact Number">
                      <?php echo form_error('contact_number'); ?>
                    </div>
                  </div>
                </div>
                <!-- /.row -->
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Birth Date<span class="text-red">*</span></label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control" id="datepicker" name="birth_date" value="<?php echo set_value('birth_date'); ?>" placeholder="yyyy/mm/dd">
                      </div>
                      <?php echo form_error('birth_date'); ?>
                    </div>
                  </div>
                  <!-- /.col -->

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Birth Place<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputBIRTHPLACE" name="birth_place" value="<?php echo set_value('birth_place'); ?>" placeholder="Birth Place">
                      <?php echo form_error('birth_place'); ?>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="form-group">
                  <label>Address<span class="text-red">*</span></label>
                  <div class="row">
                    <div class="col-md-3">
                      <input type="text" class="form-control address" id="inputSTREET" value="<?php echo set_value('street'); ?>" placeholder="House #, Street" name="street">
                        <?php echo form_error('street'); ?>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control address" id="inputBARANGAY" value="<?php echo set_value('barangay'); ?>" placeholder="Barangay" name="barangay">
                        <?php echo form_error('barangay'); ?>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control address" id="inputCITY" value="<?php echo set_value('city'); ?>" placeholder="City" name="city">
                        <?php echo form_error('city'); ?>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control address" id="inputPROVINCE" value="<?php echo set_value('province'); ?>" placeholder="Province" name="province">
                        <?php echo form_error('province'); ?>
                    </div>
                  </div>
                </div>
                <!-- /.form-group -->

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Mother Tongue<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputMOTHERTONGUE" value="<?php echo set_value('mother_tongue'); ?>" placeholder="Mother Tongue" name="mother_tongue">
                      <?php echo form_error('mother_tongue'); ?>
                    </div>
                  </div>
                  <!-- /.col -->

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Religion<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputRELIGION" value="<?php echo set_value('religion'); ?>" placeholder="Religion" name="religion">
                      <?php echo form_error('religion'); ?>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Father's Name<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputFATHER" value="<?php echo set_value('father_name'); ?>" placeholder="Father's Name" name="father_name">
                      <?php echo form_error('father_name'); ?>
                    </div>
                  </div>
                  <!-- /.col -->

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Mother's Maiden Name<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputMOTHER" value="<?php echo set_value('mother_name'); ?>" placeholder="Mother's Maiden Name" name="mother_name">
                      <?php echo form_error('mother_name'); ?>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Father's Contact No.<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputFATHERCONTACT" value="<?php echo set_value('father_contact'); ?>" placeholder="Father's Contact No." name="father_contact">
                      <?php echo form_error('father_contact'); ?>
                    </div>
                  </div>
                  <!-- /.col -->

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Mother's Contact No.<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputMOTHERCONTACT" value="<?php echo set_value('mother_contact'); ?>" placeholder="Mother's Contact No." name="mother_contact">
                      <?php echo form_error('mother_contact'); ?>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <hr>
                <div class="row" style="margin-bottom: -10px;">
                  <div class="col-md-3">
                    <label>If Guardian is<span class="text-red">*</span></label>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="radio" name="r3" class="flat-red parent" value="Father" <?php echo  set_radio('r3', 'Father'); ?> >   Father
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="radio" name="r3" class="flat-red parent" value="Mother" <?php echo  set_radio('r3', 'Mother'); ?> >   Mother
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="radio" name="r3" class="flat-red other" value="Other" <?php echo  set_radio('r3', 'Other'); ?> >   Other
                    </div>
                  </div>
                </div>
                <!-- /.row -->

                <div hidden id="guardianInput" class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Name<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputGUARDIAN" value="<?php echo set_value('guardian'); ?>" placeholder="Guardian's Name" name="guardian">
                      <?php echo form_error('guardian'); ?>
                    </div>
                  </div>
                  <!-- /.col -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Relationship<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputRELATIONSHIP" value="<?php echo set_value('relationship'); ?>" placeholder="Relationship with Guardian" name="relationship">
                      <?php echo form_error('relationship'); ?>
                    </div>
                  </div>
                  <!-- /.col --> 

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Contact No.<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputGUARDIANCONTACT" value="<?php echo set_value('guardian_contact'); ?>" placeholder="Guradian's Contact No." name="guardian_contact">
                      <?php echo form_error('guardian_contact'); ?>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <hr>
                

                <button type="submit" class="btn btn-primary pull-right">Submit</button>

              </form>
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
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
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
  var dateString = $('#guardianInput').hide();
  var today = new Date();
  var birthDate = new Date(dateString);
  var age = today.getFullYear() - birthDate.getFullYear();
  var m = today.getMonth() - birthDate.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
    age--;
  }
</script>

<script>

    $('.flat-red').on('ifChecked', function(event){
      var radioInput = $(this).val(); 
      

      if(radioInput == "Father"){
        $('#guardianInput').hide();
        $('#inputGUARDIAN').val($('#inputFATHER').val());
        $('#inputRELATIONSHIP').val(radioInput);
        $('#inputGUARDIANCONTACT').val($('#inputFATHERCONTACT').val());

      }else if(radioInput == "Mother"){
        $('#guardianInput').hide();
        $('#inputGUARDIAN').val($('#inputMOTHER').val());
        $('#inputRELATIONSHIP').val(radioInput);
        $('#inputGUARDIANCONTACT').val($('#inputMOTHERCONTACT').val());

      }else{
        $('#guardianInput').show();
        $('#inputGUARDIAN').val('');
        $('#inputRELATIONSHIP').val('');
        $('#inputGUARDIANCONTACT').val('');
      }

    });
</script>
<script>
//Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd'
    })

    //iCheck for checkbox and radio inputs
    $('input[type="radio"].minimal').iCheck({
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="radio"].minimal-red').iCheck({
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="radio"].flat-red').iCheck({
      radioClass   : 'iradio_flat-green'
    })
</script>
<script type="text/javascript">
  //Initialize Select2 Elements
    $('.select2').select2();
    
</script>


</body>
</html>
