<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | View Grades</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Pace style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/pace/pace.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css"> 
  <!-- ANIMATE CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/animate.css/animate.css">
  <!-- Bootstrap Toggle -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-toggle/toggle.css"> 
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/  /3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/googlefont.css">
  <style type="text/css">
  </style>
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
    <section class="content-header" style="margin-bottom: -10px">
      <h1>
        Academic Year
        <small>Set school year for the system</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="settings/academic_year"><i class="fa fa-user"></i> Settings</a></li>
        <li class="active">Academic Year</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">

        <br>

        <div class="col-lg-12 col-sm-12 col-xs-12">
          <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-warning"></i> Alert!</h4>
            You will need to log out to apply changes.
          </div>
        </div>
        <div class="col-lg-4 col-sm-12 col-xs-12">
          <h1 style="font-size: 23px">
            <small><b>Academic Year</b></small>
          </h1>
          <select id="s-year" data-placeholder="Select Year" class="form-control select2" style="width: 100%;">
            <option></option>
            <?php foreach ($a_years as $v) { ?>
            <option value="<?php echo $v->id; ?>" <?php if($v->status == 'active') echo 'selected' ?> ><?php echo $v->year_start.'-'.$v->year_end; ?></option>
            <?php } ?>
          </select>
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
<!-- BOOTSTRAP NOTIF -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-notify-3.1.3/dist/bootstrap-notify.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>bower_components/Chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- Bootstrap Toggle -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-toggle/toggle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>

<script>

  $('.select2').select2();
  $(document).ajaxStart(function () {
    Pace.restart()
  })

  var updateUrl = '<?php echo base_url('settings/academic_year/update') ?>';

  $('#s-year').on('change', function(){
    var id = $(this).val();
    $.ajax({
      url: updateUrl,
      type: 'post',
      dataType: 'json', 
      data: {'id' : id}, 
      success: function(res){

        $.notify({
          title: '<strong><i class="icon fa fa-check"></i>SUCCESS!</strong><br> ',
          message: "Changed school year."
        },{
          type: 'success',
          animate: {
            enter: 'animated fadeInUp',
            exit: 'animated fadeOutRight'
          },
          placement: {
            from: "top",
            align: "right"
          },
          offset: 20,
          delay: 2000,
          spacing: 10,
          z_index: 1031,
        });
      }
    })
  })

</script>

<!-- page script -->

</body>
</html>
