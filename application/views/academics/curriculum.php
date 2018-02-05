<!DOCTYPE html>
<html>

<?=$header?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <?=$template?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- <div class="alert alert-success alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Day 1 of Enrollment is successful!</h4>
        Congratulations! Job well done! Please do the same on Day 2 of Enrollment!
     </div> -->
     <div id="alert-box" class="alert alert-danger alert-dismissible flat" hidden>
      <button type="button" class="close" aria-hidden="true">&times;</button>
      <h4 id="alert-title"><i id="alert-message-icon" class="icon fa fa-warning"></i> ERROR MESSAGE!</h4>
        <div id="alert-message">Subject code already used. Please use another one.</div>
     </div>
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Curriculum  
        <small>temporary message here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Academics</a></li>
        <li class="active">Curriculum</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-5  col-xs-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#select" data-toggle="tab">Select</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="select">
                <div class="box-body">                  
                      <div class="form-group" style="margin-bottom: 5px">
                        <label>Strand</label>
                        <select id="select-strand" data-placeholder="Select Strand" class="form-control select2" style="width: 100%;">
                          <option></option>
                        </select>
                      </div>                   
                      <div class="form-group" style="margin-bottom: 5px">
                        <label>Year</label>
                        <select id="select-year" data-placeholder="Select Year" class="form-control select2" style="width: 100%;">
                          <option></option>
                          <option value="1">Grade 11</option>
                          <option value="2">Grade 12</option>
                        </select>
                      </div>                   
                      <div class="form-group" style="margin-bottom: 7px">
                        <label>Semester</label>
                        <select id="select-sem" data-placeholder="Select Semester" class="form-control select2" style="width: 100%;">
                          <option></option>
                          <option id="First Semester">First Semester</option>
                          <option id="Second Semester">Second Semester</option>
                        </select>
                      </div> 
                  
                  <button id="btn-confirm" type="button" style="width: 100px" class="btn btn-sm btn-primary pull-right">Confirm</button>
                </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

        <div class="col-lg-7 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title" id="assign-subjects-title">--</h3>
                <h3 class="box-title pull-right"><button id="add-btn" class="btn btn-default btn-xs"><span class="fa fa-fw fa-plus"></span></button></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body new-box">
                  <div class="row">
                    <div class="col-xs-12 col-lg-12 append">
                      <div id="set" class="set">
                        <div class="form-group" id="group-subject">
                          <label id="label-subject" for="subjectNameInput">Subject</label>
                          <label id="btn-close" class="btn-close pull-right text-red" style="cursor: pointer"><i class="fa fa-times"></i></label>
                          <select id="select-subject" data-placeholder="Select Subject" class="subject-input form-control select2" style="width: 100%;">
                            <option></option>
                          </select>
                        </div> 
                      </div>
                    </div>
                  </div> 
                <button id="save-btn" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right">Save</button>  
            </div>

            <div id="box-overlay" class="overlay">
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

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
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
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>

<script src="<?php echo base_url('dist/js/academics/curriculum.js'); ?>"></script>

<script>

var getSubjects = '<?php echo base_url('academics/curriculum/getSubjects'); ?>';
var getStrands = '<?php echo base_url('academics/curriculum/getStrands'); ?>';
var addUrl = '<?php echo base_url('academics/curriculum/addClassSubjects'); ?>';
var deleteUrl = '<?php echo base_url('academics/curriculum/deleteCurrSubject'); ?>';
var getClassSubjects = '<?php echo base_url('academics/curriculum/getClassSubjects'); ?>';

  $(function () {
    $('#table-list').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : false,
      'pageLength': 8
    })
  })

  $(document).ajaxStart(function () {
    Pace.restart()
  })

</script>
</body>
</html>
