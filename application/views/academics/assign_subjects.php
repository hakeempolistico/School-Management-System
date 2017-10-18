<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Assign Subjects</title>
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
  
  <?=$template?>

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
        Assign Subjects
        <small>temporary message here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Academics</a></li>
        <li class="active">Assign Subjects</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Select class</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">                  
                    <div class="form-group" style="margin-bottom: 5px">
                      <label>Strand</label>
                      <select id="select-strand" data-placeholder="Select Strand" class="form-control select2" style="width: 100%;">
                        <option id="option-strand"></option>
                      </select>
                    </div>                   
                    <div class="form-group" style="margin-bottom: 5px">
                      <label>Year</label>
                      <select id="select-year" data-placeholder="Select Year" class="form-control select2" style="width: 100%;">
                        <option id="option-year"></option>
                      </select>
                    </div>                   
                    <div class="form-group" style="margin-bottom: 7px">
                      <label>Section</label>
                      <select id="select-section" data-placeholder="Select Section" class="form-control select2" style="width: 100%;">
                        <option id="option-section"></option>
                      </select>
                    </div> 
                
                <button id="confirm-btn" type="button" style="width: 100px" class="btn btn-sm btn-primary pull-right">Confirm</button>
              </div>
          </div>
        </div>

        <div class="col-lg-8 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title" id="assign-subjects-title">Add Subjects</h3>
                <h3 class="box-title pull-right"><button id="add-btn" class="btn btn-default btn-xs"><span class="fa fa-fw fa-plus"></span></button></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="row">
                    <div class="col-xs-12 col-lg-6">
                      <div class="form-group" id="group-subject">
                        <label id="label-subject" for="subjectNameInput">Subject</label>
                        <select id="select-subject" data-placeholder="Select Subject" class="subject-input form-control select2" style="width: 100%;">
                          <option></option>
                        </select>
                      </div> 
                    </div>
                           
                    <div class="col-xs-12 col-lg-6">
                      <div class="form-group" id="group-teacher" >
                        <label id="label-teacher" for="subjectCodeInput">Teacher</label>
                        <select id="select-teacher" data-placeholder="Select Seacher" class="teacher-input form-control select2" style="width: 100%;">
                          <option></option>
                        </select>
                      </div> 
                    </div>
                  </div>     
                     

                <button id="save-btn" type="button" style="width: 100px" class="btn btn-block btn-primary pull-right">Save</button>  
            </div>


            
          </div>
        </div>
      </div>
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
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('dist/js/academics/assign_subjects.js'); ?>"></script>

<script>
var getStrands = '<?php echo base_url('academics/assign_subjects/getStrands'); ?>';
var getYears = '<?php echo base_url('academics/assign_subjects/getYears'); ?>';
var getSection = '<?php echo base_url('academics/assign_subjects/getSection'); ?>';
var getSubjects = '<?php echo base_url('academics/assign_subjects/getSubjects'); ?>';
var getTeachers = '<?php echo base_url('academics/assign_subjects/getTeachers'); ?>';
var addUrl = '<?php echo base_url('academics/assign_subjects/addClassSubjects'); ?>';
var getClassSubjects = '<?php echo base_url('academics/assign_subjects/getClassSubjects'); ?>';
var deleteUrl = '<?php echo base_url('academics/assign_subjects/deleteClassSubject'); ?>';
</script>
</body>
</html>
