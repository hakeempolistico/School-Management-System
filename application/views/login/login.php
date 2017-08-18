<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Loading -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div hidden class="loading">Loading&#8230;</div>
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo site_url('welcome/index2') ?>"><b>Araullo</b>High School</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"><img src="<?php echo base_url(); ?>images/logo.png" height="75" width="75"> </p>

      <?php echo form_open('login/'); ?>
      <div class="form-group has-feedback">
        <input id="input_username" name="username" type="text" class="form-control" placeholder="Username">
        <div class="text-danger" style="margin-top: -5px; margin-left: 5px;"><h6 id ="validation"><?php echo form_error('username'); ?></h6></div> 
        <div class="text-danger" style="margin-top: -5px; margin-left: 5px;"><h6 id ="validation"><?php if(isset($userError)) echo $userError; ?></h6></div> 
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="input_password" name="password" type="password" class="form-control" placeholder="Password"  >
        <div class="text-danger" style="margin-top: -5px; margin-left: 5px;"><h6 id ="validation"><?php echo form_error('password'); ?></h6></div> 
        <div class="text-danger" style="margin-top: -5px; margin-left: 5px;"><h6 id ="validation"><?php if(isset($passError)) echo $passError; ?></h6>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat bg-maroon">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
      </form>

    <a href="#">I forgot my password</a><br>  

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>

</body>
</html>
