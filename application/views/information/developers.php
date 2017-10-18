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
        Developers
        <small>Meet the team</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Developers</a></li>
        <!-- <li class="active">Dashboard</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="col-md-4 col-xs-12">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-red">
            <div class="widget-user-image">
              <img class="img-circle" src="http://localhost/sms/images/alt_picture.jpg" alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username">Hakeem Polistico</h3>
            <h5 class="widget-user-desc">Lead Developer
            </h5>
          </div>
          <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
              <li><a href="#">Course <span class="pull-right text-red">BS in Information System</span></a></li>
              <li><a href="#">School <span class="pull-right text-red">Technological University of the Philippines</span></a></li>
              <li>
                <a href="#">Accounts 
                  <span class="pull-right text-red">
                    <i class="fa fa-twitter" style="margin-right: 5px"></i>
                    <i class="fa fa-facebook" style="margin-right: 5px"></i>
                    <i class="fa fa-instagram" style="margin-right: 5px"></i>
                    <i class="fa fa-github" style="margin-right: 5px"></i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
      
      <div class="col-md-4 col-xs-12">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-purple">
            <div class="widget-user-image">
              <img class="img-circle" src="http://localhost/sms/images/alt_picture.jpg" alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username">Adrielle Nicolette Escaro</h3>
            <h5 class="widget-user-desc">Lead Developer</h5>
          </div>
          <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
              <li><a href="#">Course <span class="pull-right text-purple">BS in Information System</span></a></li>
              <li><a href="#">School <span class="pull-right text-purple">Technological University of the Philippines</span></a></li>
              <li>
                <a href="#">Accounts 
                  <span class="pull-right text-purple">
                    <i class="fa fa-twitter" style="margin-right: 5px"></i>
                    <i class="fa fa-facebook" style="margin-right: 5px"></i>
                    <i class="fa fa-instagram" style="margin-right: 5px"></i>
                    <i class="fa fa-github" style="margin-right: 5px"></i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.widget-user -->
      </div>

      <div class="col-md-4 col-xs-12">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-blue">
            <div class="widget-user-image">
              <img class="img-circle" src="http://localhost/sms/images/alt_picture.jpg" alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username">Jasver Anlouise Salva</h3>
            <h5 class="widget-user-desc">Lead Developer</h5>
          </div>
          <div class="box-footer no-padding">
            <ul class="nav nav-stacked">
              <li><a href="#">Course <span class="pull-right text-blue">BS in Information System</span></a></li>
              <li><a href="#">School <span class="pull-right text-blue">Technological University of the Philippines</span></a></li>
              <li>
                <a href="#">Accounts 
                  <span class="pull-right text-blue">
                    <i class="fa fa-twitter" style="margin-right: 5px"></i>
                    <i class="fa fa-facebook" style="margin-right: 5px"></i>
                    <i class="fa fa-instagram" style="margin-right: 5px"></i>
                    <i class="fa fa-github" style="margin-right: 5px"></i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.widget-user -->
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
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- page script -->
<script src="<?php echo base_url(); ?>dist/js/enrollment/dashboard.js"></script>
</body>
</html>
