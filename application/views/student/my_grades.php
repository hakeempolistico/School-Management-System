<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | My Grades</title>
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
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My Grades
        <!-- <small></small> -->
      </h1>
      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-user"></i> My Grades</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
            <!-- <div class="box-header">
              <h3 class="box-title text-primary">Select Criteria</h3>
            </div> -->
            <div class="box-body">
              <!-- <div class="col-xs-12 col-lg-3">
                  <div class="form-group">
                    <label>School Year</label>
                      <select class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Semester">
                        <option></option>
                        <option>2017-2018</option>
                        <option>2018-2019</option>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-12 col-lg-3">
                  <div class="form-group">
                    <label>Semester</label>
                      <select class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Semester">
                        <option></option>
                        <option>1st Semester</option>
                        <option>2nd Semester</option>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-12 col-lg-3">
                  <div class="form-group">
                    <label>Quarter</label>
                      <select class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Semester">
                        <option></option>
                        <option>1st Quarter</option>
                        <option>2nd Quarter</option>
                      </select>
                  </div> 
              </div> -->
              <!-- <b>My Recent Report of Grades</b>
              <ul>
                <li><a href="#"><u>1st Quarter, 1st Semestem, SY 2017-2018</u></a></li>
              </ul> -->
              <table class="table">
                <thead>
                  <th class="text-primary">School Year</th>
                  <th class="text-primary">Semester</th>
                  <th class="text-primary text-center" style="width: 10%">Action</th>
                </thead>
                <tbody>
                  <tr>
                    <td>2017-2018</td>
                    <td>1st Semester</td>
                    <td class="text-center">
                      <button class="btn btn-xs"><i class="fa fa-print"></i></button>
                      <button class="btn btn-xs"><i class="fa fa-search"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>2017-2018</td>
                    <td>1st Semester</td>
                    <td class="text-center">
                      <button class="btn btn-xs"><i class="fa fa-print"></i></button>
                      <button class="btn btn-xs"><i class="fa fa-search"></i></button></td>
                  </tr>
                </tbody>
                <!-- <tfoot>
                  <th>School Year</th>
                  <th>Semester</th>
                  <th class="text-center">Action</th>
                </tfoot> -->
              </table>
            </div>            
          </div>
        </div>
      </div> 
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
              <!-- <div class="box-header with-border">
                <h3 class="box-title text-primary">Grades</h3>
              </div> -->
              <div class="box-body">
<!--                 <a href="" class=""><i class="fa fa-print"></i> Print Grade</a><hr style="margin-top: 5px">
                <div> -->
                  <table class="table">
                    <thead>
                      <tr role="row">
                        <th colspan="5" class="text-center text-primary">SY 2017-2018</th>
                      </tr>
                      <tr role="row">
                        <th colspan="5" class="text-center text-primary">FIRST SEMESTER</th>
                      </tr>
                      <tr role="row">
                      <th>Subject Code</th>
                      <th>Subject Description</th>
                      <th class="text-center">1st Quarter</th>
                      <th class="text-center">2nd Quarter</th>
                      <th class="text-center">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>SS-GAS-1</td>
                        <td>Organization and Management</td>
                        <td class="text-center"><span class="badge bg-green active">90</span></td>
                        <td class="text-center"><span class="badge active">-</span></td>
                        <td class="text-center"><span class="badge bg-green active">passed</span></td>
                      </tr>
                      <tr>
                        <td>CS-1</td>
                        <td>Oral Communication</td>
                        <td class="text-center"><span class="badge bg-green active">94</span></td>
                        <td class="text-center"><span class="badge active">-</span></td>
                        <td class="text-center"><span class="badge bg-green active">passed</span></td>
                      </tr>
                      <tr>
                        <td>SS-HE-1</td>
                        <td>Food and Beverages Services 1 and 2</td>
                        <td class="text-center"><span class="badge active">-</span></td>
                        <td class="text-center"><span class="badge active">-</span></td>
                        <td class="text-center"><span class="badge active">-</span></td>
                      </tr>
                      <tr>
                        <td>CS-3</td>
                        <td>Introduction to Philosophy of the Human Person</td>
                        <td class="text-center"><span class="badge bg-red active">70</span></td>
                        <td class="text-center"><span class="badge active">-</span></td>
                        <td class="text-center"><span class="badge bg-red active">failed</span></td>
                      </tr>
                    </tbody>
                  </table>
                  
                <!-- </div> -->
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
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>bower_components/Chart.js/Chart.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- page script -->

</body>
</html>
