<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | Student Details</title>
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
        Student Information
        <small>Student Details</small>
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
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-graduation-cap"></i> Students</h3>
            </div>
            <div class="panel-body">
              <table id = "studentList" class="table table-bordered table-striped" >
                <thead>
                  <tr>
                    <th>LRN</th>
                    <th>Full Name</th>
                    <th>Strand</th>
                    <th>Grade</th>
                    <th>Section</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($student_details as $val) {?>
                    <tr>
                      <td><?php echo $val->students_info_lrn; ?></td>
                      <td><?php echo $val->full_name; ?></td>
                      <td><?php echo $val->strand; ?></td>
                      <td><?php echo $val->grade; ?></td>
                      <td><?php echo $val->section; ?></td>
                      <td>
                        <center>
                          <button class='btn btn-default btn-xs btn-sched' data-toggle='modal' data-target='#modal-sched'><span class='fa fa-fw fa-clock-o'></span></button>
                          <button class='btn btn-default btn-xs btn-view' data-toggle='modal' data-target='#modal-view'><span class='fa fa-fw fa-search text-info'></span></button>
                        </center>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- modal-->
      <div class="modal" id="modal-view">
        <div class="modal-dialog" style="width: 400px;">


            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-searchs"></i> View Student</h3>
              </div>
              <div class="panel-body">
                <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('images/alt_picture.jpg');?>" alt="<?php echo base_url('images/alt_picture.jpg');?>"> 
                <center><h4 id="full-name">--</h4></center>
                
                <table class="table table-striped table-bordered">
                  <tr>
                    <td style="width: 50%">Admission Date</td>
                    <td id="admission-date">--</td>
                  </tr>
                  <tr>
                    <td>LRN</td>
                    <td id="lrn">--</td>
                  </tr>                
                  <tr>
                    <td>Sex</td>
                    <td id="sex">--</td>                        
                  </tr>
                  <tr>
                    <td>Birthdate</td>
                    <td id="birthdate">--</td>
                    </tr>
                  <tr>
                    <td>Contact Number</td>
                    <td id="contact-no">--</td>
                  </tr>
                  <tr>
                    <td>Guardian</td>
                    <td id="guardian">--</td>
                  </tr>
                  <tr>
                    <td>Guardian's Contact</td>
                    <td id="guardian-contact">--</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <!-- /.modal-dialog -->
      </div>
      <!-- modal-->
      <div class="modal" id="modal-sched">
        <div class="modal-dialog" style="width: 1000px;">
              <div class="box box-primary">
                <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-clock-o text-info"></i>

                <h3 class="box-title text-info">Shedule</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
            <div class="box-body box-profile flat">              
              <table id="table-sched" class="table table-striped">
                <thead class="bg-primary">
                  <td><b>Subject Code</b></td>
                  <td><b>Subject Name</b></td>
                  <td><b>Time</b></td>
                  <td><b>Day</b></td>
                  <td><b>Room</b></td>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.modal-dialog -->
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
<script src="<?php echo base_url(); ?>dist/js/student_information/student_details.js"></script>

<script>

  var getStudentInfoUrl = '<?php echo base_url('student_info/student_details/getStudentInfo'); ?>';
  var getGuardianInfoUrl = '<?php echo base_url('student_info/student_details/getGuardianInfo'); ?>';
  var getSchedUrl = '<?php echo base_url('student_info/student_details/getSched'); ?>';

  $(function () {
    $('#studentList').DataTable()
    
  })
</script>
</body>
</html>
