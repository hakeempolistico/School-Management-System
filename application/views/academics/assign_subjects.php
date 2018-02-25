<!DOCTYPE html>
<html>

<?=$header?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <?=$template?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Assign Subjects
        <small>temporary message here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Academics</a></li>
        <li class="active">Assign Subjects</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title text-primary" style="font-size: 17px;"><i class="fa fa-search"></i> Select class</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">   
                  <div class="col-lg-4 col-xs-12">               
                    <div class="form-group" style="margin-bottom: 5px">
                      <label>Strand</label>
                      <select id="select-strand" data-placeholder="Select Strand" class="form-control select2" style="width: 100%;">
                        <option id="option-strand"></option>
                      </select>
                    </div>
                  </div>   
                  <div class="col-lg-4 col-xs-12">                
                    <div class="form-group" style="margin-bottom: 5px">
                      <label>Year</label>
                      <select id="select-year" data-placeholder="Select Year" class="form-control select2" style="width: 100%;">
                        <option id="option-year"></option>
                      </select>
                    </div>  
                  </div>                 
                  <div class="col-lg-4 col-xs-12">
                    <div class="form-group" style="margin-bottom: 7px">
                      <label>Section</label>
                      <select id="select-section" data-placeholder="Select Section" class="form-control select2" style="width: 100%;">
                        <option id="option-section"></option>
                      </select>
                    </div> 
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-xs-12">
                    <button id="confirm-btn" type="button" style="width: 100px" class="btn btn-sm btn-primary pull-right">Confirm</button>
                  </div>
                </div>

              </div>
          </div>
        </div>

        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title text-primary" style="font-size: 17px;" id="assign-subjects-title"><i class="fa fa-leaf"></i> First Semester</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="row append-to-1">
                    <div id="set-1">
                      <div class="col-xs-6 col-lg-6"> 
                        <div class="form-group" id="group-subject">
                          <label id="label-subject-1st" for="subjectNameInput">Subject</label>
                          <select id="select-subject-1st" data-placeholder="Select Subject" class="subject-input-1 form-control select2" style="width: 100%;">
                            <option></option>
                          </select>
                        </div>  
                      </div>                          
                      <div class="col-xs-6 col-lg-6">
                        <div class="form-group" id="group-teacher" >
                          <label id="label-teacher-1st" for="subjectCodeInput">Teacher</label>
                          <select id="select-teacher-1st" data-placeholder="Select Seacher" class="teacher-input-1 form-control select2" style="width: 100%;">
                            <option></option>
                          </select>
                        </div> 
                      </div>
                    </div>
                  </div> 
            </div>
            <hr style="margin: 5px 10px">
              <div class="box-header">
                <h3 class="box-title text-primary" style="font-size: 17px;" id="assign-subjects-title"><i class="fa fa-leaf"></i> Second Semester</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="row append-to-2">
                    <div id="set-2">
                      <div class="col-xs-6 col-lg-6"> 
                        <div class="form-group" id="group-subject">
                          <label id="label-subject-2nd" for="subjectNameInput">Subject</label>
                          <select id="select-subject-2nd" data-placeholder="Select Subject" class="subject-input-2 form-control select2" style="width: 100%;">
                          <option></option> 
                          </select>
                        </div>  
                      </div>                          
                      <div class="col-xs-6 col-lg-6">
                        <div class="form-group" id="group-teacher" >
                          <label id="label-teacher-2nd" for="subjectCodeInput">Teacher</label>
                          <select id="select-teacher-2nd" data-placeholder="Select Seacher" class="teacher-input-2 form-control select2" style="width: 100%;">
                            <option></option>
                          </select>
                        </div> 
                      </div>
                    </div>
                  </div> 
                <button id="save-btn" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right">Save</button>    
            </div>
                  <div class="overlay"> </div>
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
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- BOOTSTRAP NOTIF -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-notify-3.1.3/dist/bootstrap-notify.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('dist/js/academics/assign_subjects.js'); ?>"></script>

<script>

  $(document).ajaxStart(function () {
    Pace.restart()
  })
var a_year = '<?php echo $this->session->academic_year; ?>';
var getStrands = '<?php echo base_url('academics/assign_subjects/getStrands'); ?>';
var getYears = '<?php echo base_url('academics/assign_subjects/getYears'); ?>';
var getSection = '<?php echo base_url('academics/assign_subjects/getSection'); ?>';
var getSubjects = '<?php echo base_url('academics/assign_subjects/getSubjects'); ?>';
var getSubjectName = '<?php echo base_url('academics/assign_subjects/getSubjectName'); ?>';
var getTeachers = '<?php echo base_url('academics/assign_subjects/getTeachers'); ?>';
var addUrl = '<?php echo base_url('academics/assign_subjects/addClassSubjects'); ?>';
var getClassSubjects = '<?php echo base_url('academics/assign_subjects/getClassSubjects'); ?>';
var getCurrSubjects = '<?php echo base_url('academics/assign_subjects/getCurrSubjects'); ?>';
var deleteUrl = '<?php echo base_url('academics/assign_subjects/deleteClassSubject'); ?>';
var auditTrailSaveUrl = '<?php echo base_url('academics/assign_subjects/auditTrailSave'); ?>';
</script>
</body>
</html>
