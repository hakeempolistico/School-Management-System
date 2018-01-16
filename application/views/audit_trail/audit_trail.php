<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | Audit Trail</title>
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
        Audit Trail
        <small>Activity logs </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-history"></i> Audit Trail</a></li>
        <!-- <li class="active">Dashboard</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-files-o bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> Jan 16, 2018 - 12:05pm</span>

                <h3 class="timeline-header"><a href="#">Hakeem Polistico</a> registered student LRN: 14038014</h3>

                <div class="timeline-body">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                  weebly ning heekya handango imeem plugg dopplr jibjab, movity
                  jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                  quora plaxo ideeli hulu weebly balihoo...
                </div>
                <div class="timeline-footer">
                  <a class="btn btn-primary btn-xs">Read more</a>
                  <a class="btn btn-danger btn-xs">Delete</a>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-files-o bg-blue"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i>  Jan 16, 2018 - 1:00pm</span>

                <h3 class="timeline-header no-border"><a href="#">Hakeem Polistico</a> Enrolled student LRN: 14038014</h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-graduation-cap bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> Jan 16, 2018 - 1:00pm</span>

                <h3 class="timeline-header"><a href="#">Adrielle Escaro</a> knows de waeeeeeee!</h3>

                <div class="timeline-body">
                  Take me to your queen!
                  I will spit on feyk queen! 
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-file bg-purple"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> Jan 16, 2018 - 1:00pm</span>

                <h3 class="timeline-header"><a href="#">Jasver Salva</a> updated STEM-11-A grades</h3>

                <div class="timeline-body">
                  First Semester, First Quarter grades updated for class STEM Grade 11 A.
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
        </div>
        <!-- /.col -->
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
</body>
</html>
