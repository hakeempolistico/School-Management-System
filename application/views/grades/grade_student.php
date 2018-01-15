<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | Dashboard</title>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Loading -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/  /3.7.3/html5shiv.min.js"></script>
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
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Grades
        <small>Student Grades</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-user"></i> Student Details</a></li>
        <li class="active">Student Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-tile">Select shit</h4>
              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
              </div> -->
            </div>
            <div class="box-body">
              <div class="col-xs-12 col-lg-3">
                  <div class="form-group">
                    <label>Semester</label>
                      <select class="subject-input form-control select2" style="width: 100%;">
                        <option>1st Semester</option>
                        <option>2nd Semester</option>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-12 col-lg-3">
                  <div class="form-group">
                    <label>Quarter</label>
                      <select class="subject-input form-control select2" style="width: 100%;">
                        <option>1st Quarter</option>
                        <option>2nd Quarter</option>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-12 col-lg-3">
                  <div class="form-group">
                    <label>Subject</label>
                      <select class="subject-input form-control select2" style="width: 100%;">
                        <option>Math 1</option>
                        <option>Math 2</option>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-12 col-lg-3">
                  <div class="form-group">
                    <label>Section</label>
                      <select class="subject-input form-control select2" style="width: 100%;">
                        <option>STEM-1A</option>
                        <option>STEM-2A</option>
                      </select>
                  </div> 
              </div>
            </div>
          </div>
          <!-- /.box -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-tile">Enter Grade for: <b>1st QUARTER </b>| <b>MATH1 </b> | <b>STEM-1A</b></h4>
              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
              </div> -->
            </div>
            <div class="box-body">
              <br>
              <table id = "studentList1" class="table table-bordered">
                <thead>
                  <tr>
                    <th>LRN</th>
                    <th>Full Name</th>
                    <th style="width: 25%">Grade</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>123112312</td>
                    <td>Escaro, Adrielle Kristine Nicolette M.</td>
                    <td><input type="" name=""></td>
                    <td>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-check text-success'></span></button>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-edit text-info'></span></button>
                    </td>
                  </tr>
                  <tr>
                    <td>144231231</td>
                    <td>Polistico, Hakeem A.</td>
                    <td><input type="" name=""></td>
                    <td>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-check text-success'></span></button>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-edit text-info'></span></button>
                    </td>
                  </tr>
                  <tr>
                    <td>144231231</td>
                    <td>Polistico, Hakeem A.</td>
                    <td><input type="" name=""></td>
                    <td>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-check text-success'></span></button>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-edit text-info'></span></button>
                    </td>
                  </tr>
                  <tr>
                    <td>144231231</td>
                    <td>Polistico, Hakeem A.</td>
                    <td><input type="" name=""></td>
                    <td>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-check text-success'></span></button>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-edit text-info'></span></button>
                    </td>
                  </tr>
                  <tr>
                    <td>144231231</td>
                    <td>Polistico, Hakeem A.</td>
                    <td><input type="" name=""></td>
                    <td>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-check text-success'></span></button>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-edit text-info'></span></button>
                    </td>
                  </tr>
                  <tr>
                    <td>144231231</td>
                    <td>Polistico, Hakeem A.</td>
                    <td><input type="" name=""></td>
                    <td>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-check text-success'></span></button>
                      <button class='btn btn-default btn-xs'><span class='fa fa-fw fa-edit text-info'></span></button>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  
                </tfoot>
              </table><hr>
              
              <button class='btn btn-success pull-right'>Submit<!-- <span class='fa fa-fw fa-check'></span> --></button>
            </div>
          </div>
          <!-- /.box -->
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
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
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
  $(function () {
    $('#studentList1').DataTable()
    {
      'paging' : false
    }
    
  })
</script>
</body>
</html>
