<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Form</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/googlefont.css">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i>Araullo High School
          <small class="pull-right">Student Information Form</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->

    <div class="row">
      <div class="col-xs-12">
        <div class="form-group">
            <label>LRN<span class="text-red">*</span></label>
            <input type="text" class="form-control">
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-xs-4 invoice-col">
        <div class="form-group">
            <label>First Name<span class="text-red">*</span></label>
            <input type="text" class="form-control">
        </div>
      </div>
      <!-- /.col -->

      <div class="col-xs-4 invoice-col">
        <div class="form-group">
            <label>Middle Name</label>
            <input type="text" class="form-control">
        </div>
      </div>
      <!-- /.col -->

      <div class="col-xs-4 invoice-col">
        <div class="form-group">
            <label>Last Name<span class="text-red">*</span></label>
            <input type="text" class="form-control">
        </div>
      </div>
      <!-- /.col -->

    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-xs-6">
        <div class="form-group">
          <label>Sex<span class="text-red">*</span></label>
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="col-xs-6">
        <div class="form-group">
          <label>Contact Number<span class="text-red">*</span></label>
          <input type="text" class="form-control">
        </div>
      </div>
    </div>
    <!-- /.row -->

    <hr>
      <div class="row">
        <div class="col-xs-6">
          <div class="form-group">
            <label>Birth Date<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col -->

        <div class="col-xs-6">
          <div class="form-group">
            <label>Birth Place<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="form-group">
        <div class="row">
          <div class="col-xs-3">
            <label>House #, Street<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
          <div class="col-xs-3">
            <label>Barangay<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
          <div class="col-xs-3">
            <label>City<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
          <div class="col-xs-3">
            <label>Province<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <!-- /.form-group -->

      <div class="row">
        <div class="col-xs-6">
          <div class="form-group">
            <label>Mother Tongue<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col -->

        <div class="col-xs-6">
          <div class="form-group">
            <label>Religion<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <hr>

      <div class="row">
        <div class="col-xs-6">
          <div class="form-group">
            <label>Father's Name<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col -->

        <div class="col-xs-6">
          <div class="form-group">
            <label>Mother's Maiden Name<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-xs-6">
          <div class="form-group">
            <label>Father's Contact No.<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col -->

        <div class="col-xs-6">
          <div class="form-group">
            <label>Mother's Contact No.<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <hr>

      <div class="row">
        <div class="col-xs-4 invoice-col">
          <div class="form-group">
            <label> Guardian Name<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col -->

        <div class="col-xs-4 invoice-col">
          <div class="form-group">
            <label>Relationship w/ Guardian<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col --> 

        <div class="col-xs-4 invoice-col">
          <div class="form-group">
            <label>Guardian Contact No.<span class="text-red">*</span></label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
