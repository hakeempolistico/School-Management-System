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
        <li><a href="enrollment/dashboard"><i class="fa fa-user"></i> Student Details</a></li>
        <li class="active">Student Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-primary"></i> View Options</h3>
            </div>
            <!-- /.box-header -->
            <div id="box-view" class="box-body">
              <div class="col-xs-12 col-lg-3">
                  <div class="form-group">
                    <label>View</label>
                      <select id="select-view" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select View">
                        <option></option>
                        <option value="1">Quarter</option>
                        <option value="2">Semester</option>
                        <option value="3">School Year</option>
                      </select>
                  </div> 
              </div>
              <div id="col-sem" class="col-xs-12 col-lg-3">
                <div class="form-group">
                  <label>Semester</label>
                    <select id="select-semester" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Semester">
                      <option></option>
                      <option value="First Semester">First Semester</option>
                      <option value="Second Semester">Second Semester</option>
                    </select>
                </div> 
              </div>
              <div id="col-quarter" class="col-xs-12 col-lg-3">
                <div class="form-group">
                  <label>Quarter</label>
                    <select id="select-quarter" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Quarter">
                      <option></option>
                      <option value="First Quarter">First Quarter</option>
                      <option value="Second Quarter">Second Quarter</option>
                    </select>
                </div> 
              </div>
            </div>
          </div>

          <div id="box-select" class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-primary"> Select Options</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-xs-6 col-lg-6">
                  <div class="form-group">
                    <label>Subject</label>
                      <select id="select-subject" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Subject">
                        <option></option>
                        <?php foreach ($subjects as $val) { ?>
                        <option value="<?php echo $val->code?>"><?php echo $val->name?></option>
                        <?php } ?>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-6 col-lg-6">
                  <div class="form-group">
                    <label>Class</label>
                      <select id="select-class" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Class">
                        <option></option>
                        <option>STEM-1A</option>
                        <option>STEM-2A</option>
                      </select>
                  </div> 
              </div> 
            </div>
          </div>

          <div id="box-quarter" class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-primary"></i> First Quarter Grades</h3>
            </div>
            <div class="box-body">
              <table id = "studentList1" class="table table-bordered dataTables">
                <thead>
                  <tr>
                    <th>LRN</th>
                    <th>Full Name</th>
                    <th style="width: 25%">Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>123112312</td>
                    <td>Escaro, Adrielle Kristine Nicolette M.</td>
                    <td>90</td>
                  </tr>
                  <tr>
                    <td>144231231</td>
                    <td>Polistico, Hakeem A.</td>
                    <td>85</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div id="box-semester" class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-primary"></i> First Semester Grades</h3>
            </div>
            <div class="box-body">
              <table id = "studentList1" class="table table-bordered dataTables">
                <thead>
                  <tr>
                    <th rowspan="2">LRN</th>
                    <th rowspan="2">Full Name</th>
                    <th colspan="2" class="text-center">1st Semester Grades</th>
                  </tr>
                  <tr>
                    <th>1st Quarter</th>
                    <th>2nd Quarter</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>123112312</td>
                    <td>Escaro, Adrielle Kristine Nicolette M.</td>
                    <td>90</td>
                    <td>90</td>
                  </tr>
                  <tr>
                    <td>144231231</td>
                    <td>Polistico, Hakeem A.</td>
                    <td>85</td>
                    <td>86</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div id="box-sy" class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-primary"></i> School Year Grades</h3>
            </div>
            <div class="box-body">
              <table id = "studentList1" class="table table-bordered dataTables">
                <thead>
                  <tr>
                    <th rowspan="2">LRN</th>
                    <th rowspan="2">Full Name</th>
                    <th colspan="2" class="text-center">1st Semester Grades</th>
                    <th colspan="2" class="text-center">2nd Semester Grades</th>
                  </tr>
                  <tr>
                    <th>1st Quarter</th>
                    <th>2nd Quarter</th>
                    <th>3rd Quarter</th>
                    <th>4th Quarter</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>123112312</td>
                    <td>Escaro, Adrielle Kristine Nicolette M.</td>
                    <td>90</td>
                    <td>90</td>
                    <td>90</td>
                    <td>90</td>
                  </tr>
                  <tr>
                    <td>144231231</td>
                    <td>Polistico, Hakeem A.</td>
                    <td>85</td>
                    <td>86</td>
                    <td>85</td>
                    <td>86</td>
                  </tr>
                </tbody>
              </table>
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
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>

<script>
  var getClassUrl = '<?php echo base_url('grades/view/getClass'); ?>';
  $(function () {
    $('.dataTables').DataTable() 
    $('.select2').select2();
  })
</script>

<!-- page script -->
<script src="<?php echo base_url(); ?>dist/js/grades/view.js"></script>
</body>
</html>
