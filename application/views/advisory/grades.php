<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Advisory Class</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css">
  <!-- Pace style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/pace/pace.min.css">
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
        Advisory Class
        <!-- <small>Student Grades</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-user"></i> Advisory</a></li>
        <li class="active">Advisory Class</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

          
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-line-chart"></i> Class Subjects Info</h3>
            </div>
            <div class="panel-body">
              <div class="col-md-12" style="margin: -5px 0px -5px 0px;">
                <a href="<?php echo base_url('advisory/advisory_class');?>"><h5>Choose another semester </h5></a>
              </div>
              <div class="col-md-3 col-xs-12">
                <h5><b> Class:</b></h5>
                <h5><?php echo $class;?></h5>
              </div>
              <div class="col-md-3 col-xs-12">
                <h5><b> Semester:</b></h5>
                <h5><?php echo $semester;?></h5>
              </div>
              <div class="col-md-3 col-xs-12">
                <h5><b> Quarter:</b></h5>
                <h5><?php echo $quarter;?></h5>
              </div>
            </div>
          </div>

          <div class="panel panel-primary">
            <div class="panel-heading">
              <button data-toggle="modal" data-target="#modal-add" class="pull-right btn btn-link btn-xs"><span class="fa fa-fw fa-plus" ></span></button>
              <h3 class="panel-title"><i class="fa fa-tag"></i>  Grade Sheet</h3>
            </div>
            <div class="panel-body">
              <table id = "t-grades" class="table table-bordered " style="font-size: 13px">
                <thead>
                  <tr>
                    <th style="width: 15%">Full Name</th>
                    <?php foreach ($subjects as $v) {?>
                    <th><?php echo $v; ?></th>
                    <?php } ?>
                  </tr>
                </thead>
                  <?php foreach ($grades as $key => $v) { ?>
                  <tr>
                    <td><?php echo $key; ?></td>
                    <?php foreach ($v as $key => $val) { ?>
                    <td><?php echo $val; ?></td>
                    <?php } ?>                 
                  </tr>
                  <?php } ?>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>


        </div>
        <!--/. col-md-12 -->

        <div class="modal fade" id="modal-view">  
          <div class="modal-dialog" style="width: 400px;">
            <div class="box box-primary">
              <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-search text-info"></i>

                <h3 class="box-title text-info">View Student</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body box-profile flat">
                <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('images/alt_picture.jpg');?>" alt="<?php echo base_url('images/alt_picture.jpg');?>">
                <center><h4 id="full-name">-</h4></center>
                
                <table class="table table-striped table-bordered">
                  <tr>
                    <td style="width: 50%">Admission Date</td>
                    <td id="admission-date">-</td>
                  </tr>
                  <tr>
                    <td>LRN</td>
                    <td id="lrn">-</td>
                  </tr>                
                  <tr>
                    <td>Sex</td>
                    <td id="sex">-</td>                        
                  </tr>
                  <tr>
                    <td>Birthdate</td>
                    <td id="birthdate">-</td>
                    </tr>
                  <tr>
                    <td>Contact Number</td>
                    <td id="contact-no">-</td>
                  </tr>
                  <tr>
                    <td>Guardian</td>
                    <td id="guardian">-</td>
                  </tr>
                  <tr>
                    <td>Guardian's Contact</td>
                    <td id="guardian-contact">-</td>
                  </tr>
                </table>
              </div>
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
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>

<script type="">
    
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  $('.select2').select2()
</script>
</body>
</html>