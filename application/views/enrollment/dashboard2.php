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
        Dashboard
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
            <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $enrolledStudentsCount ?></h3>

              <p>Enrolled Students</p>
            </div>
            <div class="icon">
              <i class="fa fa-pencil"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $teachersCount ?></h3>

              <p>Teachers</p>
            </div>
            <div class="icon">
              <i class="fa fa-mortar-board"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $roomsCount ?></h3>

              <p>Rooms</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $subjectsCount ?></h3>

              <p>Subjects</p>
            </div>
            <div class="icon">
              <i class="fa fa-star"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <!-- TABLE: LATEST STUDENTS ENROLLED -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Students Enrolled</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>LRN</th>
                    <th>Full Name</th>
                    <th>Strand</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($students_enrolled as $key => $val) { ?>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html"><?php echo $val->lrn; ?></a></td>
                    <td><?php echo $val->first_name.' '.$val->middle_name.' '.$val->last_name ; ?></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $val->strand_name; ?></div>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo site_url('enrollment/register_student')?>" class="btn btn-sm btn-info btn-flat pull-left">Add Student</a>
              <a href="<?php echo site_url('enrollment/student_list')?>" id="trial" class="btn btn-sm btn-default btn-flat pull-right">View All Students</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div >
      </div>

      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <!-- TABLE: LATEST STUDENTS ENROLLED -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Students Enrolled</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>LRN</th>
                    <th>Full Name</th>
                    <th>Strand</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($students_enrolled as $key => $val) { ?>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html"><?php echo $val->lrn; ?></a></td>
                    <td><?php echo $val->first_name.' '.$val->middle_name.' '.$val->last_name ; ?></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $val->strand_name; ?></div>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="<?php echo site_url('enrollment/register_student')?>" class="btn btn-sm btn-info btn-flat pull-left">Add Student</a>
              <a href="<?php echo site_url('enrollment/student_list')?>" id="trial" class="btn btn-sm btn-default btn-flat pull-right">View All Students</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div >
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
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- BOOTSTRAP NOTIF -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-notify-3.1.3/dist/bootstrap-notify.js"></script>
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>


<script>

  $(document).ajaxStart(function () {
    Pace.restart()
  })

  
</script>
</body>
</html>
