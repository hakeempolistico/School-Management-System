<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | Class Subject</title>
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
        <small>View students grades per subject</small>
      </h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-file"></i> Grades Management</li>
        <li><a href="<?php echo base_url('grades/view');?>">View</a></li>
        <li class="active">Class Subject</li>
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
                <a href="<?php echo base_url('grades/view');?>"><h5>Choose another class </h5></a>
              </div>
              <div class="col-md-3 col-xs-12">
                <h5><b> Semester:</b></h5>
                <h5><?php echo $data['semester'];?></h5>
              </div>
              <div class="col-md-3 col-xs-12">
                <h5><b> Subject Code:</b></h5>
                <h5><?php echo $data['subject'];?></h5>
              </div>
              <div class="col-md-3 col-xs-12">
                <h5><b> Class:</b></h5>
                <h5><?php echo $data['section_info'];?></h5>
              </div>
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-line-chart"></i> Student Grades</h3>
            </div>
            <div class="panel-body">
              <table id = "table-sem" class="table table-bordered dataTables">
                <thead>
                  <tr>
                    <th rowspan="2">LRN</th>
                    <th rowspan="2">Full Name</th>
                    <th colspan="4" class="text-center"><?php echo $data['semester'];?></th>
                  </tr>
                  <tr>
                    <th>1st Quarter</th>
                    <th>2nd Quarter</th>
                    <th>Gen Ave</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($grades as $v) {?>
                  <tr>
                    <td><?php echo $v->students_info_lrn; ?></td>
                    <td><?php echo $v->full_name; ?></td>
                    <td><?php echo $v->grade1q; ?></td>
                    <td><?php echo $v->grade2q; ?></td>
                    <td><?php echo $v->ave; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-confirm">
        <div class="modal-dialog" style="max-width: 400px">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-check"></i> Confirmation Message!</h3>
            </div>
            <div class="panel-body">
              <p>Are you sure you want to input data? Once confirmed, data cannot be updated.</p>              
              <button data-dismiss="modal" type="button" id="btn-confirm" style="width: 100px" class="btn btn-sm btn-block btn-success pull-right"><i class="fa fa-check"></i> &nbsp; Confirm</button>
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
<!-- page script -->

<script>

  $(document).ajaxStart(function () {
    Pace.restart()
  })


  var addGradeUrl = '<?php echo base_url('grades/manage/addGrade'); ?>';
  $(function () {
    $('#studentList1').DataTable() 
    $('.select2').select2();
    var grade, lrn;
    var semester = '<?php echo $data['semester'];?>';
    var quarter = '<?php echo $data['quarter'];?>';
    var subject = '<?php echo $data['subject'];?>';
    $('#table-grades').on('click', ".btn-input", function(){
      grade = $(this).parents('tr').find('input').val();
      lrn = $(this).parents('tr').find('td:first').text();
      if(grade || grade != ''){
      $('#modal-confirm').modal('show');
      }
    })

    $('#btn-confirm').on('click',function(){
      $.ajax({
        url: addGradeUrl,
        type: 'post',
        dataType: 'json',  
        data: {'lrn' : lrn, 'semester' : semester, 'quarter' : quarter, 'subject_code' : subject, 'grade' :  grade},
        success: function(res){
          location.reload()
        }
      });
      
    })
  })
</script>
</body>
</html>
