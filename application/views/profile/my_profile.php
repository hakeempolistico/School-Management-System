<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
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
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Loading -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<div hidden class="loading">Loading&#8230;</div>
  <?=$template?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">    
     <div id="alert-box" class="alert alert-danger alert-dismissible flat" hidden>
      <button type="button" class="close" aria-hidden="true">&times;</button>
      <h4 id="alert-title"><i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!</h4>
        <div id="alert-message">Subject code already used. Please use another one.</div>
     </div>
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My Profile
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">My Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('images/alt_picture.jpg'); ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $this->session->first_name.' '.$this->session->middle_name.' '.$this->session->last_name ;?></h3>

              <p class="text-muted text-center"><?php echo $this->session->position;?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>
                    <?php if($this->session->position == 'Administrator' || $this->session->position == 'Teacher') { echo 'Employee ID';} else { echo 'LRN';}?>
                  </b> <a class="pull-right"><?php echo $this->session->employee_id;?></a>
                </li>
                <li class="list-group-item">
                  <b>Position</b> <a class="pull-right"><?php echo $this->session->position;?></a>
                </li>
                <li class="list-group-item">
                  <b>Status</b> <a class="pull-right badge bg-blue">Active</a>
                </li>
              </ul>

              <!-- <a href="#" class="btn btn-primary btn-block"><b>Edit Profile</b></a> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li  class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
              <?php if($this->session->position == 'Student' || $this->session->position == 'Teacher') { ?><li><a href="#subjects" data-toggle="tab">Subjects</a></li>
              <?php } ?>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="profile">

                <?php if($this->session->position == 'Administrator' || $this->session->position == 'Teacher') { ?>
                  <div class="row" style="margin-top: 10px">
                    <div class="col-md-12">
                      <label>Personal Information</label>
                      <table class="table table-striped">
                        <thead>
                          <td></td>
                          <td></td>
                        </thead>   
                          <tr>
                            <td>Major</td>
                            <td><?php echo $this->session->major;?></td>                        
                          </tr>          
                          <tr>
                            <td>Sex</td>
                            <td><?php echo $this->session->sex;?></td>                        
                          </tr>
                          <tr>
                            <td>Birthdate</td>
                            <td><?php echo date("M j, Y", strtotime($this->session->birthdate));?></td>
                            </tr>
                          <tr>
                            <td>Contact Number</td>
                            <td><?php echo $this->session->contact_no;?></td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><?php echo $this->session->email;?></td>
                          </tr>
                      </table>
                    </div>
                  </div>
                <?php } ?>

                <!-- <div class="row">
                  <div class="col-md-12">
                    <label>Personal Information (student display)</label>
                    <table class="table table-striped">
                      <thead>
                        <td></td>
                        <td></td>
                      </thead>
                        <tr>
                          <td>Admission Date</td>
                          <td>June 15, 2016</td>
                        </tr>
                        <tr>
                          <td>LRN</td>
                          <td>000912332998</td>
                        </tr>                
                        <tr>
                          <td>Sex</td>
                          <td>Female</td>                        
                        </tr>
                        <tr>
                          <td>Birthdate</td>
                          <td>February 11, 1999</td>
                          </tr>
                        <tr>
                          <td>Mobile Number</td>
                          <td>09991232147</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>someone@example.com</td>
                        </tr>
                    </table>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                  <label>Parent/Guardian Information</label>
                    <table class="table table-striped">
                      <thead>
                        <td></td>
                        <td></td>
                      </thead>
                        <tr>
                          <td>Mother Name</td>
                          <td>Mother Teresa</td>
                        </tr>
                        <tr>
                          <td>Mother Phone</td>
                          <td>09991218658</td>
                        </tr>                
                        <tr>
                          <td>Father Name</td>
                          <td>Father Dad</td>                        
                        </tr>
                        <tr>
                          <td>Father Phone</td>
                          <td>09179925764</td>
                          </tr>
                        <tr>
                          <td>Guardian Name</td>
                          <td>Mother Teresa</td>
                        </tr>
                        <tr>
                          <td>Guardian Relationship</td>
                          <td>Mother</td>
                        </tr>
                        <tr>
                          <td>Guardian Address</td>
                          <td>069 Lost Village, NotFound St., Nowhere City</td>
                        </tr>
                    </table>
                  </div>
                </div> -->

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="subjects">
                <!-- <div class="row">
                  <div class="col-md-12">
                    <label>Subjects (student display)</label>
                    <table class="table table-striped">
                      <thead>
                        <th>Subjects</th>
                        <th>Teacher</th>
                      </thead>
                        <tr>
                          <td>General Mathemactics</td>
                          <td>James Kevin Movera Fernandez</td>
                        </tr>
                        <tr>
                          <td>World Literature</td>
                          <td>Robert Madrilejos</td>
                        </tr>                
                        <tr>
                          <td>Physics</td>
                          <td>Luxannas Demacia Crownguard</td>                        
                        </tr>
                        <tr>
                          <td>Oral Communication</td>
                          <td>Regina Araojo</td>
                        </tr>
                    </table>
                  </div>
                </div><hr>-->
                <div class="row" style="margin-top: 10px">
                  <div class="col-md-12">
                    <label>Class Subjects</label>
                    <table class="table table-striped"  style="margin-top: 15px">
                      <?php if($subjects) { foreach ($subjects as $key => $val) { ?>
                        <tr>
                          <td><?php echo $val['class']; ?></td>
                          <td><?php echo $val['subject']; ?></td>
                        </tr>
                      <?php }; } else{ ?>
                        <tr>
                          <td>NO SUBJECTS ASSIGNED</td>
                        </tr>
                      <?php } ?>
                    </table>
                  </div>
                </div>
              </div>

              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">
                <div class="row">
                  <div class="col-md-12">
                    <label>Account Information</label>
                    <table class="table table-striped">
                      <thead>
                        <td></td>
                        <td></td>
                      </thead>
                        <tr>
                          <td>Date Created</td>
                          <td><?php $dc = explode(" ",$this->session->date_created); echo date("M j, Y", strtotime($dc[0])); ?></td>
                        </tr>
                        <tr>
                          <td>Username</td>
                          <td><?php echo $this->session->username;?></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td><a href="#" id="link-change">Change Password</a></td>
                        </tr>                                        
                    </table>
                  </div>
                  <!-- /.col-->
                </div>

                <hr class="change-password" hidden>
                <div class="row change-password" hidden>
                  <div class="col-md-12">
                    <label>Change Password</label>
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputCurPass" class="col-sm-2 control-label">Current</label>

                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="input-current" placeholder="Current Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputNewPass" class="col-sm-2 control-label">New</label>

                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="input-new" placeholder="New Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputRetypeNew" class="col-sm-2 control-label">Re-type new</label>

                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="input-retype" placeholder="Re-type new password">
                        </div>
                      </div>
                      <input type="hidden" id="input-username" value="<?php echo $this->session->username;?>">
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button id="btn-save" type="submit" class="btn btn-sm pull-right btn-primary">Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
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
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>bower_components/Chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- page script -->
<script src="<?php echo base_url(); ?>dist/js/enrollment/dashboard.js"></script>

<script>
  $('#link-change').click(function(){
    $('.change-password').show();
  })
  var changeUrl = '<?php echo base_url('profile/change_password');?>';

  $('#btn-save').click(function(){

  var username = $('#input-username').val();
  var current = $('#input-current').val();
  var new_pass = $('#input-new').val();
  var retype = $('#input-retype').val();

  $('.loading').show();
    $.ajax({
      url: changeUrl,
      type: 'post',
      dataType: 'json', 
      data: {'username' : username, 'current' : current, 'new' : new_pass, 'retype' : retype  }, 
      success: function(result){
        console.log(result);
        if(result == true){
          $('#input-current').val('');
          $('#input-new').val('');
          $('#input-retype').val('');


          $('#alert-box').addClass('alert-success').removeClass('alert-danger');
          $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-check"></i> SUCCESS MESSAGE!');
          $('#alert-message').html('Password updated.');
          $('#alert-box').slideDown(1000);
          $('#alert-box').delay( 2000 ).slideUp(1000);
        }
        else if(result == false){
          $('#input-current').val('');
          $('#input-new').val('');
          $('#input-retype').val('');


          $('#alert-box').slideDown(1000);
          $('#alert-title').html('<i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!');
          $('#alert-message').html('Incorrect input.');
          $('#alert-box').delay( 1500 ).slideUp(1000);
        }

        $('.loading').delay(500).hide();
      }
    });   
  })
</script>
</body>
</html>
