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
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- Loading -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/googlefont.css">
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
    <nav class="navbar navbar-static-top" style="background-color: #6C1827">
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
            <li class="active">
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

        <li class="treeview active">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <span class="label label-warning pull-right">soon</span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="active">
              <a href="<?php echo site_url('enrollment/dashboard'); ?>">
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
    <!-- <div class="alert alert-success alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Day 1 of Enrollment is successful!</h4>
        Congratulations! Job well done! Please do the same on Day 2 of Enrollment!
     </div> -->
     <div id="alert-box" class="alert alert-danger alert-dismissible flat" hidden>
      <button type="button" class="close" aria-hidden="true">&times;</button>
      <h4 id="alert-title"><i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!</h4>
        <div id="alert-message">Subject code already used. Please use another one.</div>
     </div>
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Reports
        <small>Print reports regarding student information</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Academics</a></li>
        <li class="active">Strands</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Filter</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-12 col-xs-12">
                    <div class="form-group" style="margin-bottom: 5px">
                      <label>Filter Type</label>
                      <select id="select-filter" name="strand_code" class="form-control select2" style="width: 100%;" data-placeholder="Select Filter Type">
                        <option selected="selected"></option>
                        <option value="1">All Search</option>
                        <option value="2">Standard Search</option>
                        <option value="3">Advanced Search</option>
                      </select>
                    </div>
                  </div>
                </div>
                <hr class="filter-standard" style="margin-bottom: 10px" hidden>
                <div class="row filter-standard" hidden>
                  <div class="col-lg-12 col-xs-12">
                    <h5><b> Class </b></h5>
                    <div class="checkbox">
                      <label style="margin-right: 15px;">
                        <input id="cb-strand" class="standar" type="checkbox">
                        Strand
                      </label>
                      <label style="margin-right: 15px;">
                        <input id="cb-year" class="standar" type="checkbox">
                        Year
                      </label>
                      <label style="margin-right: 15px;">
                        <input id="cb-section" class="standar" type="checkbox">
                        Section
                      </label>
                    </div>
                  </div>
                </div>
                <hr class="filter-advanced" style="margin: 10px" hidden>
                <div class="row filter-advanced" hidden>
                  <div class="col-lg-12 col-xs-12">
                    <h5><b> Student Information </b></h5>
                    <div class="checkbox">
                      <label style="margin-right: 15px;">
                        <input id="cb-lrn" class="advanced" type="checkbox">
                        LRN
                      </label>
                      <label style="margin-right: 15px;">
                        <input id="cb-date" class="advanced" type="checkbox">
                        Date Enrolled
                      </label>
                      <label style="margin-right: 15px;">
                        <input id="cb-age" class="advanced" type="checkbox">
                        Age
                      </label>
                      <label style="margin-right: 15px;">
                        <input id="cb-name" class="advanced" type="checkbox">
                        Name
                      </label>
                      <label style="margin-right: 15px;">
                        <input id="cb-address" class="advanced" type="checkbox">
                        Address
                      </label>
                      <label style="margin-right: 15px;">
                        <input id="cb-religion" class="advanced" type="checkbox">
                        Religion
                      </label>                      
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Filter Criteria</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <form method="post" action="<?php echo base_url('reports/student_reports/search');?>">
                  <div id="row-class" hidden>
                  <div class="row">
                    <div id="group-strand" class="col-lg-4 col-xs-12" hidden>
                      <div class="form-group" style="margin-bottom: 5px">
                        <label>Strand</label>
                        <select id="select-strand" name="strand_code" class="form-control select2" style="width: 100%;" data-placeholder="Select Strand">
                          <option selected="selected"></option>
                          <?php foreach ($strands as $key => $val) { ?>
                            <option value="<?php echo $val->code ?>"><?php echo $val->name ?></option>
                          <?php } ?>
                        </select>
                      </div> 
                    </div>
                    <div id="group-year" class="col-lg-4 col-xs-12" hidden>
                      <div class="form-group" style="margin-bottom: 5px">
                        <label>Year</label>
                        <select id="select-year" name="year_level_id" class="form-control select2" style="width: 100%;" data-placeholder="Select Year">
                          <option selected="selected"></option>
                          <?php foreach ($years as $key => $val) { ?>
                            <option value="<?php echo $val->id ?>"><?php echo $val->name ?></option>
                          <?php } ?>
                        </select>
                      </div>  
                    </div>
                    <div id="group-section" class="col-lg-4 col-xs-12" hidden>
                      <div class="form-group" style="margin-bottom: 5px">
                        <label>Section</label>
                        <select id="select-section" name="section_id" class="form-control select2" style="width: 100%;" data-placeholder="Select Section">
                          <option selected="selected"></option>
                        </select>
                      </div>  
                    </div>
                  </div>
                  <hr>
                </div>                  

                <div id="row-lrn" hidden>
                  <div class="row">
                  <div id="group-lrn" class="col-lg-4 col-xs-12" hidden>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="srtandCodeInput">LRN</label>
                      <input type="text" name="lrn" class="form-control" id="input-lrn" placeholder="Student LRN">
                    </div>       
                  </div> 
                  <div id="group-date" class="col-lg-4 col-xs-12" hidden>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="srtandCodeInput">Date Enrolled</label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="date_enrolled" class="form-control pull-right" id="datepicker">
                      </div>
                    </div>       
                  </div> 
                  <div id="group-age" class="col-lg-4 col-xs-12" hidden>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="srtandCodeInput">Age</label>
                      <input type="text" name="age" class="form-control" id="input-age" placeholder="Student Age">
                    </div>       
                  </div> 
                </div>
                <hr>
              </div>

                <div id="row-name" hidden>
                <div class="row">
                  <div class="col-lg-4 col-xs-12">
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="srtandCodeInput">First Name</label>
                      <input type="text" name="first_name" class="form-control" id="input-firstname" placeholder="Student First Name">
                    </div>       
                  </div> 
                  <div class="col-lg-4 col-xs-12">
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="srtandCodeInput">Middle Name</label>
                      <input type="text" name="middle_name" class="form-control" id="input-middlename" placeholder="Student Middle Name">
                    </div>       
                  </div> 
                  <div class="col-lg-4 col-xs-12">
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="srtandCodeInput">Last Name</label>
                      <input type="text" name="last_name" class="form-control" id="input-lastname" placeholder="Student Last Name">
                    </div>       
                  </div> 
                </div>
                <hr>
                </div>
                

                <div id="row-address" hidden >
                <div class="row">
                  <div class="col-lg-3 col-xs-12">
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="srtandCodeInput">Street</label>
                      <input type="text" name="street" class="form-control" id="input-street" placeholder="Street">
                    </div>       
                  </div> 
                  <div class="col-lg-3 col-xs-12">
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="srtandCodeInput">Barangay</label>
                      <input type="text" name="barangay" class="form-control" id="input-baranggay" placeholder="Barangay">
                    </div>       
                  </div> 
                  <div class="col-lg-3 col-xs-12">
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="srtandCodeInput">City</label>
                      <input type="text" name="city" class="form-control" id="input-city" placeholder="City">
                    </div>       
                  </div> 
                  <div class="col-lg-3 col-xs-12">
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="srtandCodeInput">Province</label>
                      <input type="text" name="province" class="form-control" id="input-province" placeholder="Province">
                    </div>       
                  </div> 
                </div>
                <hr>
                </div>
                
                <div id="row-religion" hidden>
                  <div class="row">
                    <div class="col-lg-4 col-xs-12">
                      <div class="form-group" style="margin-bottom: 5px">
                        <label for="srtandCodeInput">Religion</label>
                        <input type="text" name = "religion" class="form-control" id="input-religion" placeholder="Religion">
                      </div>       
                    </div> 
                  </div>
                <hr>
                </div>
                
                      
                <button type="submit" id="add-btn" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right">Search</button>
                </form>
                
              </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  {footer}
</div>
<!-- ./wrapper -->

<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<script>
//Date picker
  $('#datepicker').datepicker({
    autoclose: true
  })
  $('.select2').select2();
  var getSection = '<?php echo base_url('academics/assign_subjects/getSection'); ?>';

  $('#select-filter').on('change',function(){
    if($(this).val() == 1){
      $('.filter-standard').hide();
      $('.filter-advanced').hide();
      $(':checkbox').prop('checked', false); 

      $('#row-class').hide();
      $('#row-lrn').hide();
      $('#row-lrn').hide();
      $('#row-name').hide();
      $('#row-address').hide();
      $('#row-religion').hide();
      $('#group-strand').hide();
      $('#group-section').hide();
      $('#group-year').hide();
      $('#group-lrn').hide();
      $('#group-date').hide();
      $('#group-age').hide();
    }
    else if($(this).val() == 2){
      $('.filter-standard').show();
      $('.filter-advanced').hide();
      $('.advanced:checkbox').prop('checked', false); 

      $('#row-lrn').hide();
      $('#row-lrn').hide();
      $('#row-name').hide();
      $('#row-address').hide();
      $('#row-religion').hide();
      $('#group-lrn').hide();
      $('#group-date').hide();
      $('#group-age').hide();
    }
    else if($(this).val() == 3){
      $('.filter-standard').show();
      $('.filter-advanced').show();
    }
  });

  $('#select-year').on('change',function(){
   year_id = $('#select-year').val();
   strand_code = $('#select-strand').val();

   $('#select-section').find('option').remove();

   $.ajax({
      url: getSection,
      type: 'post',
      dataType: 'json',  
      data: {'strand_code': strand_code, 'year_level_id': year_id},
      success: function(result){
        //console.log(result);
          $('#select-section').append($('<option>', { 
              value: null,
              text : null
          })).select2();

        $.each(result, function( index, value ) {
          $('#select-section').append($('<option>', { 
              value: value.id,
              text : value.name
          })).select2();
        });
      }
    });
  }); 

  $("#cb-strand").change(function() {
    if(this.checked) {
      $('#group-strand').show();
      $('#row-class').show();
    }
    else{
      if(this.checked == false && $('#cb-section').is(':checked') == false && $('#cb-year').is(':checked') == false) {
        $('#row-class').hide();
      }
      $('#select-strand').val('').trigger('change');
      $('#group-strand').hide();
    }
  });

  $("#cb-section").change(function() {
    if(this.checked) {
      $('#group-section').show();
      $('#row-class').show();
    }
    else{
      if(this.checked == false && $('#cb-strand').is(':checked') == false && $('#cb-year').is(':checked') == false) {
        $('#row-class').hide();
      }
      $('#select-section').val('').trigger('change');
      $('#group-section').hide();
    }
  });

  $("#cb-year").change(function() {
    if(this.checked) {
      $('#group-year').show();
      $('#row-class').show();
    }
    else{
      if(this.checked == false && $('#cb-section').is(':checked') == false && $('#cb-strand').is(':checked') == false) {
        $('#row-class').hide();
      }
      $('#select-year').val('').trigger('change');
      $('#group-year').hide();
    }
  });

  $("#cb-lrn").change(function() {
    if(this.checked) {
      $('#group-lrn').show();
      $('#row-lrn').show();
    }
    else{
      if(this.checked == false && $('#cb-date').is(':checked') == false && $('#cb-age').is(':checked') == false) {
        $('#row-lrn').hide();
      }
      $('#input-lrn').val('');
      $('#group-lrn').hide();
    }
  });

  $("#cb-date").change(function() {
    if(this.checked) {
      $('#group-date').show();
      $('#row-lrn').show();
    }
    else{
      if(this.checked == false && $('#cb-lrn').is(':checked') == false && $('#cb-age').is(':checked') == false) {
        $('#row-lrn').hide();
      }
      $('#datepicker').val('');
      $('#group-date').hide();
    }
  });

  $("#cb-age").change(function() {
    if(this.checked) {
      $('#group-age').show();
      $('#row-lrn').show();
    }
    else{
      if(this.checked == false && $('#cb-lrn').is(':checked') == false && $('#cb-date').is(':checked') == false) {
        $('#row-lrn').hide();
      }
      $('#input-age').val('');
      $('#group-age').hide();
    }
  });

  $("#cb-name").change(function() {
    if(this.checked) {
      $('#row-name').show();
    }
    else{
      $('#input-firstname').val('');
      $('#input-middlename').val('');
      $('#input-lastname').val('');
      $('#row-name').hide();
    }
  });

  $("#cb-address").change(function() {
    if(this.checked) {
      $('#row-address').show();
    }
    else{
      $('#input-street').val('');
      $('#input-baranggay').val('');
      $('#input-city').val('');
      $('#input-province').val('');
      $('#row-address').hide();
    }
  });

  $("#cb-religion").change(function() {
    if(this.checked) {
      $('#row-religion').show();
    }
    else{
      $('#input-religion').val('');
      $('#row-religion').hide();
    }
  });
  
</script>
</body>
</html>
