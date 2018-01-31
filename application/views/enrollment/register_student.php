<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register Student</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Pace style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/pace/pace.min.css">
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
  #inputGUARDIANADDRESS {
    width: 200px;
    -webkit-transition: width .35s ease-in-out;
    transition: width .35s ease-in-out;
    border: none;
    border-bottom: 1.9px solid #bdbdbd;
  }
  #inputGUARDIANADDRESS:focus {
    width: 90%;
  }

  /* Latest compiled and minified CSS included as External Resource*/

/* Optional theme */

/*@import url('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css');*/

.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Register Student
        <small>Entering student info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li class="active">Register Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- <div class="box box-info">

            <div class="box-header with-border">
              <h3 class="box-title">Student Information</h3>
            </div>
            <div class="box-body" style="padding-bottom: 20px;">
              <form method="POST" action="<?php echo base_url('enrollment/register_student/register/'); ?>">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>LRN<span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="lrn" id="inputLRN" value="<?php echo set_value('lrn'); ?>" placeholder="Learner Reference Number">
                        <?php echo form_error('lrn'); ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Name<span class="text-red">*</span></label>
                    <div class="row">
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="first_name" id="inputFNAME" value="<?php echo set_value('first_name'); ?>" placeholder="First Name">
                        <?php echo form_error('first_name'); ?>
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="middle_name" id="inputMNAME" value="<?php echo set_value('middle_name'); ?>" placeholder="Middle Name">
                        <?php echo form_error('middle_name'); ?>
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="last_name" id="inputLNAME" value="<?php echo set_value('last_name'); ?>" placeholder="Last Name">
                        <?php echo form_error('last_name'); ?>
                      </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Sex<span class="text-red">*</span></label>
                      <select class="form-control" id="inputSEX" name="sex" value="<?php echo set_select('sex'); ?>" placeholder="Sex">
                        <option value="" disabled selected>Sex</option>
                        <option value="Female" <?php echo  set_select('sex', 'Female'); ?> >Female</option>
                        <option value="Male" <?php echo  set_select('sex', 'Male'); ?> >Male</option>
                      </select>
                      <?php echo form_error('sex'); ?>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Contact Number<span class="text-red">*</span></label>
                      <input type="text" class="form-control" name="contact_number" id="inputCONTACT" value="<?php echo set_value('contact_number'); ?>" placeholder="Contact Number">
                      <?php echo form_error('contact_number'); ?>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Birth Date<span class="text-red">*</span></label>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control" id="datepicker" name="birth_date" value="<?php echo set_value('birth_date'); ?>" placeholder="yyyy/mm/dd">
                      </div>
                      <?php echo form_error('birth_date'); ?>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Birth Place<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputBIRTHPLACE" name="birth_place" value="<?php echo set_value('birth_place'); ?>" placeholder="Birth Place">
                      <?php echo form_error('birth_place'); ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Address<span class="text-red">*</span></label>
                  <div class="row">
                    <div class="col-md-3">
                      <input type="text" class="form-control address" id="inputSTREET" value="<?php echo set_value('street'); ?>" placeholder="House #, Street" name="street">
                        <?php echo form_error('street'); ?>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control address" id="inputBARANGAY" value="<?php echo set_value('barangay'); ?>" placeholder="Barangay" name="barangay">
                        <?php echo form_error('barangay'); ?>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control address" id="inputCITY" value="<?php echo set_value('city'); ?>" placeholder="City" name="city">
                        <?php echo form_error('city'); ?>
                    </div>
                    <div class="col-md-3">
                      <input type="text" class="form-control address" id="inputPROVINCE" value="<?php echo set_value('province'); ?>" placeholder="Province" name="province">
                        <?php echo form_error('province'); ?>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Mother Tongue<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputMOTHERTONGUE" value="<?php echo set_value('mother_tongue'); ?>" placeholder="Mother Tongue" name="mother_tongue">
                      <?php echo form_error('mother_tongue'); ?>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Religion<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputRELIGION" value="<?php echo set_value('religion'); ?>" placeholder="Religion" name="religion">
                      <?php echo form_error('religion'); ?>
                    </div>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Father's Name<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputFATHER" value="<?php echo set_value('father_name'); ?>" placeholder="Father's Name" name="father_name">
                      <?php echo form_error('father_name'); ?>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Mother's Maiden Name<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputMOTHER" value="<?php echo set_value('mother_name'); ?>" placeholder="Mother's Maiden Name" name="mother_name">
                      <?php echo form_error('mother_name'); ?>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Father's Contact No.<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputFATHERCONTACT" value="<?php echo set_value('father_contact'); ?>" placeholder="Father's Contact No." name="father_contact">
                      <?php echo form_error('father_contact'); ?>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Mother's Contact No.<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputMOTHERCONTACT" value="<?php echo set_value('mother_contact'); ?>" placeholder="Mother's Contact No." name="mother_contact">
                      <?php echo form_error('mother_contact'); ?>
                    </div>
                  </div>
                </div>

                <hr>
                <div class="row" style="margin-bottom: -10px;">
                  <div class="col-md-3">
                    <label>If Guardian is<span class="text-red">*</span></label>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="radio" name="r3" class="flat-red pipol parent" value="Father" <?php echo  set_radio('r3', 'Father'); ?> >   Father
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="radio" name="r3" class="flat-red pipol parent" value="Mother" <?php echo  set_radio('r3', 'Mother'); ?> >   Mother
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="radio" name="r3" class="flat-red pipol other" value="Other" <?php echo  set_radio('r3', 'Other'); ?> >   Other
                    </div>
                  </div>
                </div>

                <div hidden id="guardianInput" class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Name<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputGUARDIAN" value="<?php echo set_value('guardian'); ?>" placeholder="Guardian's Name" name="guardian">
                      <?php echo form_error('guardian'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Relationship<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputRELATIONSHIP" value="<?php echo set_value('relationship'); ?>" placeholder="Relationship with Guardian" name="relationship">
                      <?php echo form_error('relationship'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Contact No.<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputGUARDIANCONTACT" value="<?php echo set_value('guardian_contact'); ?>" placeholder="Guradian's Contact No." name="guardian_contact">
                      <?php echo form_error('guardian_contact'); ?>
                    </div>
                  </div>
                </div>

                <div class="row" style="margin-bottom: -10px;">
                  <div class="col-md-3">
                    <label>Guardian Address<span class="text-red">*</span></label>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="radio" name="r4" class="flat-red stuadd" value="StudentAddress" <?php echo  set_radio('r4', 'StudentAddress'); ?> >   Student address
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="radio" name="r4" class="flat-red stuadd" value="Other2" <?php echo  set_radio('r4', 'Other2'); ?> >
                        <input type="text" id="inputGUARDIANADDRESS" value="<?php echo set_value('guardian_address'); ?>" placeholder="Other" name="guardian_address" >
                        <?php echo form_error('guardian_address'); ?>
                    </div>
                  </div>                  
                </div>

                <hr>
                
                <button type="submit" class="btn btn-primary pull-right">Submit</button>

              </form>
            </div>
          </div>
 -->
          <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-3"> 
                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                    <p><small>Student Name</small></p>
                </div>
                <div class="stepwizard-step col-xs-3"> 
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p><small>Student Info</small></p>
                </div>
                <div class="stepwizard-step col-xs-3"> 
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p><small>Address</small></p>
                </div>
                <div class="stepwizard-step col-xs-3"> 
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    <p><small>Guardian</small></p>
                </div>
            </div>
          </div>
          
          <form role="form">
            <div class="panel panel-primary setup-content" id="step-1">
                <div class="panel-heading">
                     <h3 class="panel-title">Student Name</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">LRN</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Learner Reference Number" />
                      </div>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">First Name</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name" />
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Middle Name</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Middle Name" />
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Last Name</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                      </div>
                    </div>
                  </div>
                    <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
            </div>
            
            <div class="panel panel-primary setup-content" id="step-2">
                <div class="panel-heading">
                     <h3 class="panel-title">Student Info</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Sex</label>
                <select class="form-control select2" style="width: 100%; border-color: red; border-width: 1px; border-style: solid;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Contact No</label>
                          <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Contact Number" />
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Birth Date</label>
                          <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Birth Date" />
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Birth Place</label>
                          <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Birth Place" />
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Mother Tongue</label>
                          <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Mother Tongue" />
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Religion</label>
                          <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Religion" />
                      </div>
                    </div>
                  </div>
                    <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
            </div>
            
            <div class="panel panel-primary setup-content" id="step-3">
                <div class="panel-heading">
                     <h3 class="panel-title">Address</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Street No.</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Street Number" />
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Barangay</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Barangay" />
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">City</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter City" />
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Province</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Province" />
                      </div>
                    </div>
                  </div>
                    <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
            </div>
            
            <div class="panel panel-primary setup-content" id="step-4">
                <div class="panel-heading">
                     <h3 class="panel-title">Guardian</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Father's Name</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Father's Name" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Father's Contact</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Father's Contact" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Mother's Maiden Name</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Mother's Maiden Name" />
                      </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <div class="form-group">
                          <label class="control-label">Mother's Contact</label>
                          <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Mother's Contact" />
                      </div>
                    </div>
                  </div>
                  <hr>


                <div class="row" style="margin-bottom: -10px;">
                  <div class="col-md-3">
                    <label>If Guardian is<span class="text-red">*</span></label>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="radio" name="r3" class="flat-red pipol parent" value="Father" <?php echo  set_radio('r3', 'Father'); ?> >   Father
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="radio" name="r3" class="flat-red pipol parent" value="Mother" <?php echo  set_radio('r3', 'Mother'); ?> >   Mother
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="radio" name="r3" class="flat-red pipol other" value="Other" <?php echo  set_radio('r3', 'Other'); ?> >   Other
                    </div>
                  </div>
                </div>
                <!-- /.row -->

                <div hidden id="guardianInput" class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Name<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputGUARDIAN" value="<?php echo set_value('guardian'); ?>" placeholder="Guardian's Name" name="guardian">
                      <?php echo form_error('guardian'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Relationship<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputRELATIONSHIP" value="<?php echo set_value('relationship'); ?>" placeholder="Relationship with Guardian" name="relationship">
                      <?php echo form_error('relationship'); ?>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Contact No.<span class="text-red">*</span></label>
                      <input type="text" class="form-control" id="inputGUARDIANCONTACT" value="<?php echo set_value('guardian_contact'); ?>" placeholder="Guradian's Contact No." name="guardian_contact">
                      <?php echo form_error('guardian_contact'); ?>
                    </div>
                  </div>
                </div>
                <!-- /.row -->

                <div class="row" style="margin-bottom: -10px;">
                  <div class="col-md-3">
                    <label>Guardian Address<span class="text-red">*</span></label>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                        <input type="radio" name="r4" class="flat-red stuadd" value="StudentAddress" <?php echo  set_radio('r4', 'StudentAddress'); ?> >   Student address
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <input type="radio" name="r4" class="flat-red stuadd" value="Other2" <?php echo  set_radio('r4', 'Other2'); ?> >
                        <input type="text" id="inputGUARDIANADDRESS" value="<?php echo set_value('guardian_address'); ?>" placeholder="Other" name="guardian_address" >
                        <?php echo form_error('guardian_address'); ?>
                    </div>
                  </div>                  
                </div>
                    <button class="btn btn-success pull-right" type="submit">Finish!</button>
                </div>
            </div>
          </form>

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script>
  $(document).ajaxStart(function () {
    Pace.restart()
  })
</script>
<script>
  var dateString = $('#guardianInput').hide();
  var today = new Date();
  var birthDate = new Date(dateString);
  var age = today.getFullYear() - birthDate.getFullYear();
  var m = today.getMonth() - birthDate.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
    age--;
  }
</script>

<script>

    $('.pipol').on('ifChecked', function(event){
      var radioInput = $(this).val(); 
      

      if(radioInput == "Father"){
        $('#guardianInput').hide();
        $('#inputGUARDIAN').val($('#inputFATHER').val());
        $('#inputRELATIONSHIP').val(radioInput);
        $('#inputGUARDIANCONTACT').val($('#inputFATHERCONTACT').val());

      }else if(radioInput == "Mother"){
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



    $('.stuadd').on('ifChecked', function(event){
      var radioInput2 = $(this).val(); 

      if(radioInput2 == "StudentAddress"){
        $('#guardianAddressInput').hide();
        $('#other').blur();
        $('#inputGUARDIANADDRESS').val('');
        $('#inputGUARDIANADDRESS').val($('#inputSTREET').val()+', '+$('#inputBARANGAY').val()+', '+$('#inputCITY').val()+', '+$('#inputPROVINCE').val());
        // console.log($('#inputGUARDIANADDRESS').val());

      }else{
        $('#inputGUARDIANADDRESS').focus();
        $('#inputGUARDIANADDRESS').val();
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

  //FORM WIZARD
    $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
</script>


</body>
</html>
