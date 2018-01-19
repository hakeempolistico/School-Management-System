<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Assign Advisory Class</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">
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
        Assign Advisory Class
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
        <div class="col-lg-4 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title text-primary" style="font-size: 17px;"><i class="fa fa-plus"></i> Select class</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">                  
                    <div class="form-group" style="margin-bottom: 5px">
                      <label>Semester</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option>1st Semester</option>
                        <option>2nd Semester</option>
                      </select>
                    </div>                   
                    <div class="form-group" style="margin-bottom: 5px">
                      <label>Grade</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option>Grade 11</option>
                        <option>Grade 12</option>
                      </select>
                    </div>                   
                    <div class="form-group" style="margin-bottom: 7px">
                      <label>Section</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option>STEM-11A</option>
                        <option>STEM-11B</option>
                        <option>STEM-11C</option>
                      </select>
                    </div> 
                
                <button type="button" style="width: 100px" class="btn btn-sm btn-primary pull-right">Confirm</button>
              </div>
          </div>
        </div>

        <div class="col-lg-8 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title text-primary" style="font-size: 17px;"><i class="fa fa-plus"></i> Select Teacher</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id = "example" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th></th>
                    <th>Full Name</th>
                    <th>Major</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="checkbox" class="minimal" name=""></td>
                    <td>Adrielle Kristine Nicolette M. Escaro</td>
                    <td>ENGLISH</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" class="minimal" name=""></td>
                    <td>Hakeem Polistico</td>
                    <td>MATH</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" class="minimal" name=""></td>
                    <td>Jasver Anlouise Salva</td>
                    <td>Laziness</td>
                  </tr>               
                </tbody>
                <tfoot>
                  
                </tfoot>
              </table>
              <br>

              <button type="button" style="width: 100px" class="btn btn-sm btn-primary pull-right">Assign</button>
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
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>s
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- page script -->
<script src="<?php echo base_url(); ?>dist/js/enrollment/dashboard.js"></script>

<script>
  $(function (){

    $('#example').DataTable( {
             
    } );

    $('input[type="checkbox"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue'
    })
  })
</script>

</body>
</html>
