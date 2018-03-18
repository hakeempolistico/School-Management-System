<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form 137</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- Loading -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
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
     <!-- <div id="alert-box" class="alert alert-danger alert-dismissible flat" hidden>
      <button type="button" class="close" aria-hidden="true">&times;</button>
      <h4 id="alert-title"><i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!</h4>
        <div id="alert-message">Subject code already used. Please use another one.</div>
     </div> -->
      
    <!-- Content Header (Page header) -->
    <section class="content-header hidden-print">
      <h1>
        Form 137
        <small>print form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Reports</a></li>
        <li class="active">Form 137</li>
      </ol>
    </section>

    <style>
      .pad{
        border: none;padding: 3px 10px;
      }
    </style>
    <!-- Main content -->
    <section class="content">      
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary" style="border: none;">
            <div class="panel-body no-padding">

              <table class="table table-bordered " style="font-size: 10px">
                <thead style="background-color:#d2d6de">
                  <tr>
                    <th colspan="13" class="text-center" style="padding: 3px"><b>LEARNER'S INFORMATION</b></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="1" style="padding: 3px 10px"><b>Last Name</b> :  <?php echo $last_name;?></td>
                    <td colspan="2" style="padding: 3px 10px"><b>First Name</b> : <?php echo $first_name;?></td>
                    <td colspan="1" style="padding: 3px 10px"><b>Middle Name</b> : <?php echo $middle_name;?></td>
                  </tr>
                  <tr>
                    <td colspan="1" style="padding: 3px 10px"><b>LRN</b> : <?php echo $lrn;?></td>
                    <td colspan="1" style="padding: 3px 10px"><b>Date of Birth</b> : <?php echo $birth_date;?></td>
                    <td colspan="1" style="padding: 3px 10px"><b>Sex</b> : <?php echo $sex;?></td>
                    <td colspan="2" style="padding: 3px 10px"><b>Date of Admission</b> : <?php echo $admission;?></td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-bordered " style="font-size: 10px">
                <thead style="background-color:#d2d6de">
                  <tr>
                    <th colspan="13" class="text-center" style="border: none;padding: 3px 10px"><b>ELIGIBILITY FOR SHS ENROLMENT</b></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2" style="padding: 3px 10px">High School Completer*</td>
                    <td colspan="1" style="padding: 3px 10px">Gen. Ave: _________</td>
                    <td colspan="2" style="padding: 3px 10px">Junior High School Completer</td>
                    <td colspan="1" style="padding: 3px 10px">Gen. Ave: _________</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-bordered " style="font-size: 10px; margin-top: -15px">
                <tbody>
                  <tr>
                    <td style="padding: 3px 10px">Date of Graduation/Completion (MM/DD/YYYY): _________</td>
                    <td style="padding: 3px 10px">Name of School: _______________________</td>
                    <td style="padding: 3px 10px">School Address: _______________________</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-bordered " style="font-size: 10px">
                <thead style="background-color:#d2d6de">
                  <tr>
                    <th colspan="10" class="text-center" style="border: none;padding: 3px 10px"><b>SCHOLASTIC RECORD</b></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="padding: 3px 10px"><b>School : </b> MANUEL ARAULLO HIGH SCHOOL</td>
                    <td style="padding: 3px 10px"><b>School ID : </b> 305309</td>
                    <td style="padding: 3px 10px"><b>Grade Level : </b> <?php echo $s_record['grade_level'] ?></td>
                    <td style="padding: 3px 10px"><b>SY : </b> <?php echo $s_record['sy'] ?></td>
                    <td style="padding: 3px 10px"><b>Sem : </b> First Semester</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="padding: 3px 10px"><b>TRACK/STRAND : </b>HUMANITIES AND SOCIAL SCIENCES</td>
                    <td colspan="2" style="padding: 3px 10px"><b>SECTION :</b> <?php echo $s_record['section'] ?></td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-bordered text-center" style="font-size: 12px">
                <thead style="background-color: #d2d6de">
                  <tr>
                    <th rowspan="2">TYPE</th>
                    <th rowspan="2">SUBJECTS</th>
                    <th colspan="2">Quarter</th>
                    <th rowspan="2" style="width: 10%">SEM FINAL GRADE</th>
                    <th rowspan="2" style="width: 15%">ACTION TAKEN</th>
                  </tr>
                  <tr>
                    <th style="width: 10%">1st Quarter</th>
                    <th style="width: 10%">2nd Quarter</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sub_info as $v) { ?>
                  <tr>
                    <td><?php echo $v->subject_type; ?></td>
                    <td><?php echo $v->subject_name; ?></td>
                    <td><?php echo $v->q1; ?></td>
                    <td><?php echo $v->q2; ?></td>
                    <td><?php echo $v->ave; ?></td>
                    <td><?php echo $v->action_taken; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>

              <table class="table">
                <tbody>
                  <tr style="border: none;  font-size: 10px ">
                    <td  style="border: none;" colspan="6"><b class="pull-left">REMARKS: ________________________________________________________________________</b></td>
                  </tr>
                  <tr style="border: none; font-size: 10px ">
                    <td  style="border: none; width: 30%;"><b class="pull-left">Prepared by:</b></td>
                    <td  style="border: none; width: 45%;"><b class="pull-left">Certified True and Correct:</b></td>
                    <td  style="border: none; width: 25%;"><b class="pull-left">Date Checked(MM/DD/YYYY):</b></td>
                  </tr>
                  <tr style="border: none;">
                    <td  style="border: none;" colspan="6"></td>  
                    <td  style="border: none;" colspan="6"></td>  
                    <td  style="border: none;" colspan="6"></td>  
                  </tr>
                  <tr style="border: none; font-size: 10px " class="text-center">
                    <td  style="border: none; text-decoration-line: overline">Signature of Adviser over Printed Name</td>
                    <td  style="border: none; text-decoration-line: overline">Signature of Authorized Person over Printed Name, Designation</td>
                    <td  style="border: none; text-decoration-line: overline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-bordered " style="font-size: 10px">
                <tbody>
                  <tr>
                    <td colspan="1" style="width: 20%;padding: 3px 10px">REMEDIAL CLASSES</td>
                    <td colspan="1" style="width: 50%;padding: 3px 10px">Conducted from (MM/DD/YYYY): ___________</td>
                    <td colspan="1" style="width: 30%;padding: 3px 10px">to (MM/DD/YYYY): ________</td>
                  </tr>
                  <tr>
                    <td colspan="2" style="padding: 3px 10px">SCHOOL: __________________________________________________________________</td>
                    <td colspan="1" style="padding: 3px 10px">SCHOOL ID: ___________</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-bordered text-center" style="font-size: 12px;  margin-top: -15px">
                <thead style="background-color: #d2d6de">
                  <tr>
                    <th style="width: 15%">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</th>
                    <th>SUBJECTS</th>
                    <th style="width: 10%">SEM FINAL GRADE</th>
                    <th style="width: 10%">REMEDIAL CLASS MARK</th>
                    <th style="width: 10%">RECOMPUTED FINAL GRADE</th>
                    <th style="width: 10%">ACTION TAKEN</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>

              <table class="table" style="font-size: 10px; margin-top: -15px">
                <tbody>
                  <tr>
                    <td style="width: 70%;border: none;padding: 3px 10px">Name of Teacher/Adviser: __________________________________________________________________</td>
                    <td style="width: 30%;border: none;padding: 3px 10px">Signature: ___________</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-bordered " style="font-size: 10px">
                <thead style="background-color:#d2d6de">
                  <tr>
                    <th colspan="10" class="text-center" style="border: none;padding: 3px 10px"><b>SCHOLASTIC RECORD</b></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="padding: 3px 10px"><b>School : </b> MANUEL ARAULLO HIGH SCHOOL</td>
                    <td style="padding: 3px 10px"><b>School ID : </b> 305309</td>
                    <td style="padding: 3px 10px"><b>Grade Level : </b> <?php echo $s_record['grade_level'] ?></td>
                    <td style="padding: 3px 10px"><b>SY : </b> <?php echo $s_record['sy'] ?></td>
                    <td style="padding: 3px 10px"><b>Sem : </b> Second Semester</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="padding: 3px 10px"><b>TRACK/STRAND : </b>HUMANITIES AND SOCIAL SCIENCES</td>
                    <td colspan="2" style="padding: 3px 10px"><b>SECTION :</b> <?php echo $s_record['section'] ?></td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-bordered text-center" style="font-size: 12px">
                <thead style="background-color: #d2d6de">
                  <tr>
                    <th rowspan="2">TYPE</th>
                    <th rowspan="2">SUBJECTS</th>
                    <th colspan="2">Quarter</th>
                    <th rowspan="2" style="width: 10%">SEM FINAL GRADE</th>
                    <th rowspan="2" style="width: 15%">ACTION TAKEN</th>
                  </tr>
                  <tr>
                    <th style="width: 10%">1st Quarter</th>
                    <th style="width: 10%">2nd Quarter</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sub_info2 as $v) { ?>
                  <tr>
                    <td><?php echo $v->subject_type; ?></td>
                    <td><?php echo $v->subject_name; ?></td>
                    <td><?php echo $v->q1; ?></td>
                    <td><?php echo $v->q2; ?></td>
                    <td><?php echo $v->ave; ?></td>
                    <td><?php echo $v->action_taken; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>

              <table class="table">
                <tbody>
                  <tr style="border: none;  font-size: 10px ">
                    <td  style="border: none;" colspan="6"><b class="pull-left">REMARKS: ________________________________________________________________________</b></td>
                  </tr>
                  <tr style="border: none; font-size: 10px ">
                    <td  style="border: none; width: 30%;"><b class="pull-left">Prepared by:</b></td>
                    <td  style="border: none; width: 45%;"><b class="pull-left">Certified True and Correct:</b></td>
                    <td  style="border: none; width: 25%;"><b class="pull-left">Date Checked(MM/DD/YYYY):</b></td>
                  </tr>
                  <tr style="border: none;">
                    <td  style="border: none;" colspan="6"></td>  
                    <td  style="border: none;" colspan="6"></td>  
                    <td  style="border: none;" colspan="6"></td>  
                  </tr>
                  <tr style="border: none; font-size: 10px " class="text-center">
                    <td  style="border: none; text-decoration-line: overline">Signature of Adviser over Printed Name</td>
                    <td  style="border: none; text-decoration-line: overline">Signature of Authorized Person over Printed Name, Designation</td>
                    <td  style="border: none; text-decoration-line: overline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-bordered " style="font-size: 10px">
                <tbody>
                  <tr>
                    <td colspan="1" style="width: 20%;padding: 3px 10px">REMEDIAL CLASSES</td>
                    <td colspan="1" style="width: 50%;padding: 3px 10px">Conducted from (MM/DD/YYYY): ___________</td>
                    <td colspan="1" style="width: 30%;padding: 3px 10px">to (MM/DD/YYYY): ________</td>
                  </tr>
                  <tr>
                    <td colspan="2" style="padding: 3px 10px">SCHOOL: __________________________________________________________________</td>
                    <td colspan="1" style="padding: 3px 10px">SCHOOL ID: ___________</td>
                  </tr>
                </tbody>
              </table>

              <table class="table table-bordered text-center" style="font-size: 12px;  margin-top: -15px">
                <thead style="background-color: #d2d6de">
                  <tr>
                    <th style="width: 15%">Indicate if Subject is CORE, APPLIED, or SPECIALIZED</th>
                    <th>SUBJECTS</th>
                    <th style="width: 10%">SEM FINAL GRADE</th>
                    <th style="width: 10%">REMEDIAL CLASS MARK</th>
                    <th style="width: 10%">RECOMPUTED FINAL GRADE</th>
                    <th style="width: 10%">ACTION TAKEN</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>

              <table class="table" style="font-size: 10px; margin-top: -15px">
                <tbody>
                  <tr>
                    <td style="width: 70%;border: none;padding: 3px 10px">Name of Teacher/Adviser: __________________________________________________________________</td>
                    <td style="width: 30%;border: none;padding: 3px 10px">Signature: ___________</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <button style="width: 100px; margin-top: -10px" id="row-print" class="hidden-print btn btn-sm btn-primary pull-right">Print</button>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->
  {footer}
</div>
<!-- ./wrapper -->

<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  
$('#row-print').on('click',function(){
  window.print(); 
});

</script>
</body>
</html>
