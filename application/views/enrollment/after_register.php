<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Enroll Student</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style type="text/css">
  .error {
  color: red;
  font-size: 14px;
  }
</style>
  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/googlefont.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?=$template?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!--<div class="alert bg-navy alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Reminder!</h4>
        Make sure to receive the necessary requirements for enrollment, otherwise the student won't be enrolled!
     </div>-->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Register Student
        <small>Entering student info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li>Register Student</li>
        <li class="active">After Register</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="callout callout-success">
        <h4>Enrollment Complete!</h4>

        <p>You have successfully registered <bold class="name"></bold>.</p>
      </div>

      <div class="box box-default">
        <div class="box-body box-profile" style=" padding: 20px;">
          <div class="row">
            <div class="col-md-12"><center>
              <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="img-circle" alt="<?php echo base_url('images/alt_picture.jpg');?>" style="width: 15%; margin-bottom: 10px;"></center>
              <h3 class="profile-username text-center name" style="padding: 0 20px;"></h3>
              <center> 
              </center>
            </form>
            </div>
            <!-- /. col-->

            <div class="col-md-12">
              <table class="table table-striped table-bordered">
                <tr>
                  <td><b>LRN</b></td>
                  <td><a id="lrn">--</a></td>
                </tr>
                <tr>
                  <td><b>Contact No.</b></td>
                  <td><a id="contact">--</a></td>
                </tr>
                <tr>
                  <td><b>Birthdate</b></td>
                  <td><a id="birth_date">--</a></td>
                </tr>
                <tr>
                  <td><b>Birthplace</b></td>
                  <td><a id="birth_place">--</a></td>
                </tr>
                <tr>
                  <td><b>Age</b></td>
                  <td><a id="age">--</a></td>
                </tr>
                <tr>
                  <td><b>Mother Tongue</b></td>
                  <td><a id="mother_tongue">--</a></td>
                </tr>
                <tr>
                  <td><b>Religion</b></td>
                  <td><a id="religion">--</a></td>
                </tr>
                <tr>
                  <td><b>Address</b></td>
                  <td><a id="street">I</a><a id="barangay">--</a><a id="city">--</a><a id="province">--</a></td>
                </tr>
                <tr>
                  <td><b>Sex</b></td>
                  <td><a id="sex">--</a></td>
                </tr>
                <tr>
                  <td><b>Father's Name</b></td>
                  <td><a id="father_name">--</a></td>
                </tr>
                <tr>
                  <td><b>Father's Contact No</b></td>
                  <td><a id="father_contact">--
                <tr>
                  <td><b>Mother's Maiden Name</b></td>
                  <td><a id="mother_name">--</a></td>
                </tr>
                <tr>
                  <td><b>Mother's Contact No</b></td>
                  <td><a id="mother_contact">--</a></td>
                </tr>
                <tr>
                  <td><b>Guardian's Name</b></td>
                  <td><a id="guardian">--</a></td>
                </tr>
                <tr>
                  <td><b>Guardian's Relationship</b></td>
                  <td><a id="relationship">--</a></td>
                </tr>
                <tr>
                  <td><b>Guardian's Contact No</b></td>
                  <td><a id="guardian_contact">--</a></td>
                </tr>
                <tr>
                  <td><b>Guardian's Address</b></td>
                  <td><a id="guardian_address">--</a></td>
                </tr>
              </table>
                <form method="post" action="<?php echo base_url('enrollment/enroll_student/enroll/'); ?>">
                  <input type="hidden" name="lrn" class="lrn">
                <button type="submit" class="btn btn-success pull-right" style="width:20%; margin-bottom: 10px;"><i class="fa fa-fw fa-check"></i> Enroll this student</button>
                </form>
                <a href="<?php echo site_url('enrollment/register_student'); ?>" class="btn btn-primary" style="width:20%; margin-bottom: 10px;"><i class="fa fa-fw fa-arrow-left"></i> Register another student</a>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /. box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  {footer}
  <!-- /.Footer -->


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- js ni adrii -->
<script src="<?php echo base_url(); ?>js/forminput.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>
$(document).ready(function(){ 


  var lastLrn = <?php echo $lastLrn;?>;
  var ajaxUrl = "<?php echo base_url("enrollment/register_student/ajax"); ?>"

  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'value' : lastLrn, 'table': 'students_info', 'set': 'lrn'}, 
            success: function(result){

                $('.name').html(result.first_name +" "+ result.middle_name + " " + result.last_name);
                $('#lrn').html(result.lrn);
                $('.lrn').val(result.lrn);
                $('#contact').html(result.contact_number);
                $('#birth_date').html(result.birth_date);
                $('#birth_place').html(result.birth_place);
                $('#age').html(result.age);
                $('#mother_tongue').html(result.mother_tongue);
                $('#religion').html(result.religion);
                $('#sex').html(result.sex);   

                
              
              }
  });

  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'value' : lastLrn, 'table': 'addresses', 'set': 'students_info_lrn'}, 
            success: function(result){

                $('#street').html(result.street+", ");
                $('#barangay').html(result.barangay+", ");
                $('#city').html(result.city+", ");
                $('#province').html(result.province); 
              
              }
  });

  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'value' : lastLrn, 'table': 'guardians', 'set': 'students_info_lrn'}, 
            success: function(result){

                $('#guardian').html(result.name);
                $('#relationship').html(result.relationship);
                $('#guardian_contact').html(result.contact);
                $('#guardian_address').html(result.address);
              
              }
  });

  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'value' : lastLrn, 'table': 'parents', 'set': 'students_info_lrn'}, 
            success: function(result){

                $('#father_name').html(result.father_name);
                $('#father_contact').html(result.father_contact);
                $('#mother_name').html(result.mother_name);
                $('#mother_contact').html(result.mother_contact);
              
              }
  });
});
</script>
<script>

    $('.flat-red').on('ifChecked', function(event){
      var radioInput = $(this).val(); 
      

      if(radioInput == "Father"){
        alert(radioInput);
        $('#guardianInput').hide();
        $('#inputGUARDIAN').val($('#inputFATHER').val());
        $('#inputRELATIONSHIP').val(radioInput);
        $('#inputGUARDIANCONTACT').val($('#inputFATHERCONTACT').val());

      }else if(radioInput == "Mother"){
        alert(radioInput);
        $('#guardianInput').hide();
        $('#inputGUARDIAN').val($('#inputMOTHER').val());
        $('#inputRELATIONSHIP').val(radioInput);
        $('#inputGUARDIANCONTACT').val($('#inputMOTHERCONTACT').val());

      }else{
        $('#guardianInput').show();
        $('#inputGUARDIAN').val('');
        $('#inputRELATIONSHIP').val('');
        $('#inputGUARDIANCONTACT').val('');
      }

    });
</script>
<script>
//Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy/mm/dd'
    })

    //iCheck for checkbox and radio inputs
    $('input[type="radio"].minimal').iCheck({
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="radio"].minimal-red').iCheck({
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="radio"].flat-red').iCheck({
      radioClass   : 'iradio_flat-green'
    })
</script>
<script type="text/javascript">
  //Initialize Select2 Elements
    $('.select2').select2();
    
</script>


</body>
</html>
