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
<style type="text/css">
.login-header {
    position:relative;
    background-color:#e15915;
    height:320px !important;
    width:100% !important;
}

.login-header:after {
    content:'';
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -15px;
    width: 0;
    height: 0;
    border-top: solid 15px #6C1827;
    border-left: solid 15px transparent;
    border-right: solid 15px transparent;
}
</style>
<body>
  <div class="row" style="background: #6C1827;">
    <div class="col-md-4">    
    </div>
    <div class="col-md-4 text-center">
      <div class="login-header" style="height: 40%; background: #6C1827; padding-top: 80px">        
          <a href="<?php echo site_url('welcome/index2') ?>">
            <img src="<?php echo base_url(); ?>images/araullo3.png" height="110" width="110">
          </a>        
          <h2 style="font-weight: 100; color: white;">
            Araullo High School
          </h2>        
      </div>
    </div>
    <div class="col-md-4">      
    </div>
  </div>
  <!-- /.row -->
  <div class="row" style="background: #9E373B; height: 54.4%;">    
    <div class="login-box" style="margin-top: 0px; padding-top: 5%; width: 360px; ">        
      <?php echo form_open('login/'); ?>
      <div class="row">
      <div class="col-md-12">
        <div class="form-group has-feedback">
          <input id="input_username" name="username" type="text" class="form-control" placeholder="Username" style="border-color: #6c1827; border-radius: 4px; height: 40px;">
          <div class="text-danger" style="margin-top: -5px; margin-left: 5px;"><h6 id ="validation"><?php echo form_error('username'); ?></h6></div> 
          <div class="text-danger" style="margin-top: -5px; margin-left: 5px;"><h6 id ="validation"><?php if(isset($userError)) echo $userError; ?></h6></div> 
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group has-feedback">
            <input id="input_password" name="password" type="password" class="form-control" placeholder="Password" style="border-color: #6c1827; border-radius: 4px; height: 40px; margin-bottom: 20px;">
            <div class="text-danger" style="margin-top: -5px; margin-left: 5px;"><h6 id ="validation"><?php echo form_error('password'); ?></h6></div> 
            <div class="text-danger" style="margin-top: -5px; margin-left: 5px;"><h6 id ="validation"><?php if(isset($passError)) echo $passError; ?></h6></div>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
        </div>
      </div>
      <div class="row">
          <!-- /.col -->
        <div class="col-md-12">
          <button type="submit" class="btn btn-block " style="background: #6C1827; border-color: #6C1827; height: 40px;color: white;">Sign In
          </button>
        </div>
          <!-- /.col -->
       </div>
      </form>
      <br>
      <a href="#" style="color: white;">I forgot my password</a><br>  
    </div>
  </div>
  <!-- /.login-box-body -->

<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>

</body>
</html>
