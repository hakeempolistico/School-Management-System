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
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
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
    <section class="content-header">
      <h1>
        View Grades
        <small>View students grades</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-user"></i> Grades Management</li>
        <li class="active">View</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <?php if($this->session->username=='admin'){ ?>

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><span class='fa fa-fw fa-search'></span> (Admin) Select Options</h3>
            </div>
            <div class="panel-body">
              <div class="col-xs-6 col-lg-4">
                  <div class="form-group">
                    <label>Semester</label>
                      <select id="select-semester" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Semester">
                        <option></option>
                        <option value="First Semester">First Semester</option>
                        <option value="Second Semester">Second Semester</option>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-6 col-lg-4">
                  <div class="form-group">
                    <label>Subject</label>
                      <select id="select-subject" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Subject">
                        <option></option>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-6 col-lg-4">
                  <div class="form-group">
                    <label>Class</label>
                      <select id="select-class" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Class">
                        <option></option>
                      </select>
                  </div> 
              </div> 
              <div class="col-md-12">
                <form method="post" action="<?php echo base_url('grades/view/class_subject')?>">
                  <input id="i-semester" type="hidden" name="semester" value="">
                  <input id="i-subject" type="hidden" name="subject" value="">
                  <input id="i-class" type="hidden" name="class" value="">
                  <button type="submit" class="btn btn-block btn-info btn-sm pull-right" style="width: 50px">Go</button>
                </form>
              </div>
            </div>
          </div>
          <?php } else{ ?>


          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><span class='fa fa-fw fa-search'></span> (Teachers) Select Options</h3>
            </div>
            <div class="panel-body">
              <div class="col-xs-6 col-lg-4">
                  <div class="form-group">
                    <label>Semester</label>
                      <select id="t-select-semester" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Semester">
                        <option></option>
                        <option value="First Semester">First Semester</option>
                        <option value="Second Semester">Second Semester</option>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-6 col-lg-4">
                  <div class="form-group">
                    <label>Subject</label>
                      <select id="t-select-subject" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Subject">
                        <option></option>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-6 col-lg-4">
                  <div class="form-group">
                    <label>Class</label>
                      <select id="t-select-class" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Class">
                        <option></option>
                      </select>
                  </div> 
              </div> 

              <div class="col-xs-12 col-md-12">
                <form method="post" action="<?php echo base_url('grades/view/class_subject')?>">
                  <input id="h-semester" type="hidden" name="semester" value="">
                  <input id="h-subject" type="hidden" name="subject" value="">
                  <input id="h-class" type="hidden" name="class" value="">
                  <button type="submit" class="btn btn-block btn-info btn-sm pull-right" style="width: 50px">Go</button>
                </form>
              </div>
            </div>
          </div>
          <?php } ?>
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
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>

<script>

  $(document).ajaxStart(function () {
    Pace.restart()
  })
  

  var e_id = '<?php echo $this->session->employee_id; ?>';
  var aYear = '<?php echo $this->session->academic_year; ?>';
  var getClassUrl = '<?php echo base_url('grades/view/getClass'); ?>';
  var getSubjectsUrl = '<?php echo base_url('grades/manage/getSubjects'); ?>';
  var getClassUrl = '<?php echo base_url('grades/manage/getClass'); ?>';
  var getClassStudentsUrl = '<?php echo base_url('grades/view/getClassStudents'); ?>';
  $(function () {
    $('.dataTables').DataTable() 
    $('.select2').select2();
  })
</script>

<!-- page script -->
<script src="<?php echo base_url(); ?>dist/js/grades/view.js"></script>
</body>
</html>
