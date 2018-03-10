<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form 137</title>
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
  <?=$template?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- <div class="alert alert-success alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Day 1 of Enrollment is successful!</h4>
        Congratulations! Job well done! Please do the same on Day 2 of Enrollment!
     </div> -->
     <!-- <div id="alert-box" class="alert alert-danger alert-dismissible flat" hidden>
      <button type="button" class="close" aria-hidden="true">&times;</button>
      <h4 id="alert-title"><i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!</h4>
        <div id="alert-message">Subject code already used. Please use another one.</div>
     </div> -->
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form 137
        <small>print form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Reports</a></li>
        <li class="active">Form 137</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">      
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Form 137</h3>
            </div>
            <div class="panel-body">
              <table class="table table-bordered">
                <thead style="background-color:#d2d6de">
                  <!-- <tr>
                    <th colspan="6" class="text-center"><b>SCHOLASTIC RECORD</b></th>
                  </tr> -->
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                  </tr>
                  <tr>
                    <th colspan="6" class="text-center"><b>SCHOLASTIC RECORD</b></th>
                  </tr>
                  <tr>
                    <!-- <td style="width: 10%"><b>SCHOOL:</b></td>
                    <td style="width: 15%">MANUEL ARAULLO HIGH SCHOOL</td>
                    <td style="width: 10%" align="right">SCHOOL ID:</td>
                    <td style="width: 15%">305309</td>
                    <td style="width: 15%"><b>GRADE LEVEL</b></td>
                    <td style="width: 10%">11</td>
                    <td style="width: 5%" align="right"><b>SY:</b></td>
                    <td style="width: 10%">2016-2017</td>
                    <td style="width: 5%"><b>SEM:</b></td>
                    <td style="width: 5%">1ST</td> -->
                  </tr>
                  <tr>
                    <td></td>
                  </tr>
                  <tr>
                    <td style="width: 15%"><b>TRACK/STRAND:</b></td>
                    <td style="width: 45%">HUMANITIES AND SOCIAL SCIENCES</td>
                    <td style="width: 5%" align="right"><b>SECTION:</b></td>
                    <td style="width: 35%">HUMANITIES AND SOCIAL SCIENCES</td>
                  </tr>
                </tbody>
              </table>
              <table class="table table-bordered text-center">
                <thead style="background-color: #d2d6de">
                  <tr>
                    <th rowspan="2">TYPE</th>
                    <th rowspan="2">SUBJECTS</th>
                    <th colspan="2">Quarter</th>
                    <th rowspan="2" style="width: 10%">SEM FINAL GRADE</th>
                    <th rowspan="2" style="width: 15%">ACTION TAKEN</th>
                  </tr>
                  <tr>
                    <th style="width: 10%">1st Quarter</th>
                    <th style="width: 10%">2nd Quarter</th>
                  </tr>
                </thead>
              </table>
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

</body>
</html>
