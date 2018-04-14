<!DOCTYPE html>
<html>

<?=$header?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  
  <?=$template?>

  <!-- Content Wrapper. Contains page content -->
  <div  class=" content-wrapper">
    <!-- <div class="alert alert-success alert-dismissible flat">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-bullhorn"></i> Day 1 of Enrollment is successful!</h4>
          Congratulations! Job well done! Please do the same on Day 2 of Enrollment!
    </div> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pick Schedule
        <small>Create a schedule for school year</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Manage Schedule</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><span class='fa fa-fw fa-search'></span> Select Options</h3>
            </div>
            <div class="panel-body">
              <form method="post" action="<?php echo base_url('academics/schedule/pickSched')?>">
                <div class="col-xs-12 col-lg-12">
                    <div class="form-group">
                      <label>Semester</label>
                        <select name="sched" id="select-sched" class="subject-input form-control select2" style="width: 100%;" data-placeholder="Select Schedule">
                          <option></option>
                          <option value="lec">Lecture</option>
                          <option value="lab">Laboratory</option>
                        </select>
                    </div> 
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-block btn-info btn-sm pull-right" style="width: 100px">Proceed</button>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>

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
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- BOOTSTRAP NOTIF -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-notify-3.1.3/dist/bootstrap-notify.js"></script>
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url(); ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- fullCalendar -->
<script src="<?php echo base_url(); ?>bower_components/moment/moment.js"></script>
<script src="<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- Page specific script -->
<script src="<?php echo base_url(); ?>dist/js/enrollment/manage_schedule.js"></script>

<script type="text/javascript">
  //Initialize Select2 Elements
    $('.select2').select2()
    //Timepicker
  $(document).ajaxStart(function () {
    Pace.restart()
  })
</script>
</body>
</html>
