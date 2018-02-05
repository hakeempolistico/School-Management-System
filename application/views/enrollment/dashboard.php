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

      <?php if(isset($this->session->user_role) && $this->session->user_role=='admin') { ?>
      <div class="row">
        <div class="col-md-12">
          <!-- Application buttons -->
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title text-danger"><i class="fa fa-fw fa-cab"></i> Quick Access</h3>
            </div>
            <div class="box-body">
              <center>
                <a href="<?php echo site_url('enrollment/register_student'); ?>" class="btn btn-app flat" >
                  <i class="fa fa-files-o text-danger"></i> <div class="text-danger">Enroll</div>
                </a>
                <a href="<?php echo site_url('academics/strands'); ?>" class="btn btn-app flat">
                  <i class="fa fa-clone text-danger"></i> <div class="text-danger">Strands</div>
                </a>
                <a href="<?php echo site_url('academics/rooms'); ?>" class="btn btn-app flat">
                  <i class="fa fa-university text-danger"></i> <div class="text-danger">Rooms</div>
                </a>
                <a href="<?php echo site_url('academics/sections'); ?>" class="btn btn-app flat">
                  <i class="fa fa-star text-danger"></i> <div class="text-danger">Class</div>
                </a>
                <a href="<?php echo site_url('student_info/student_details'); ?>" class="btn btn-app flat">
                  <i class="fa fa-id-card text-danger"></i> <div class="text-danger">Students</div>
                </a>
                <a href="<?php echo site_url('grades/view'); ?>" class="btn btn-app flat">
                  <i class="fa fa-line-chart text-danger"></i> <div class="text-danger">Grades</div>
                </a>
                <a href="<?php echo site_url('audit_trail'); ?>" class="btn btn-app flat">
                  <i class="fa fa-history text-danger"></i> <div class="text-danger">Audit Trail</div>
                </a>
                <a href="<?php echo site_url('reports/student_reports'); ?>" class="btn btn-app flat">
                  <i class="fa fa-bar-chart text-danger"></i> <div class="text-danger">Reports</div>
                </a>
                <a href="<?php echo site_url('advisory/advisory_class'); ?>" class="btn btn-app flat">
                  <i class="fa fa-star text-danger"></i> <div class="text-danger">Advisory</div>
                </a>
                <a href="#" class="btn btn-app flat">
                  <i class="fa fa-lock text-danger"></i> <div class="text-danger">Lock</div>
                </a>
                <a href="#" class="btn btn-app flat">
                  <i class="fa fa-gear text-danger"></i> <div class="text-danger">Settings</div>
                </a>
              </center>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
      <?php } ?>

      <div class="row">

        <div class="col-lg-4 col-xs-12">
          <div class="box box-widget"  style="border-width: 1px; border-style: solid; border-color: darkgrey;">
            <div class="box-body">
              <div class="media">
                <div class="media-left">
                  <img src="<?php echo base_url('images/adrii.jpg');?>" alt="<?php echo base_url('images/alt_picture.jpg');?>" width="100px" style="border-width: 1px; border-style: solid; border-color: gainsboro;">
                </div>
                <div class="media-body" style="padding: 5px">
                  <h4 class="media-heading" style="font-family: Century Gothic;">Admin Adrielle</h4>
                  <p style="margin-bottom: 5px;"><i class="fa fa-fw fa-phone text-danger"></i> 0955-887-4822</p>
                  <p style="margin-bottom: 5px;"><i class="fa fa-fw fa-envelope text-warning"></i> niconicolette@gmail.com</p>
                  <p style="margin-bottom: -3px;"><i class="fa fa-fw fa-comment text-primary"></i> <a href="#">Quick Message</a> </p>
                </div>
              </div>
            </div>
          </div>
          <div class="box box-widget"  style="border-width: 1px; border-style: solid; border-color: darkgrey;">
            <div class="box-body">
              <div class="media">
                <div class="media-left">
                  <img src="<?php echo base_url('images/hakeem.jpg');?>" alt="<?php echo base_url('images/alt_picture.jpg');?>" width="100px" style="border-width: 1px; border-style: solid; border-color: gainsboro;">
                </div>
                <div class="media-body" style="padding: 5px">
                  <h4 class="media-heading" style="font-family: Century Gothic;">Admin Hakeem</h4>
                  <p style="margin-bottom: 5px;"><i class="fa fa-fw fa-phone text-danger"></i> 0955-887-4822</p>
                  <p style="margin-bottom: 5px;"><i class="fa fa-fw fa-envelope text-warning"></i> hjpolistico@gmail.com</p>
                  <p style="margin-bottom: -3px;"><i class="fa fa-fw fa-comment text-primary"></i> <a hpref="#">Quick Message</a> </p>
                </div>
              </div>
            </div>
          </div>


          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Enrolled Students</span>
              <span class="info-box-number"><?php echo $enrolledStudentsCount; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $graduatingPercent;?>%"></div>
              </div>
              <span class="progress-description">
                    <?php echo $graduatingPercent;?>% are graduating.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Teachers</span>
              <span class="info-box-number"><?php echo $teachersCount; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $activeTeachersPercent;?>%"></div>
              </div>
              <span class="progress-description">
                    <?php echo $activeTeachersPercent;?>% are active.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Rooms</span>
              <span class="info-box-number"><?php echo $roomsCount; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $activeRoomsPercent;?>%"></div>
              </div>
              <span class="progress-description">
                    <?php echo $activeRoomsPercent;?>% can be used.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="ion-ios-heart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Class</span>
              <span class="info-box-number"><?php echo $sectionsCount; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo $activeClassesPercent;?>%"></div>
              </div>
              <span class="progress-description">
                    <?php echo $activeClassesPercent;?>% are active.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-lg-8 col-xs-12">

          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title text-danger"><i class="fa fa-fw fa-graduation-cap"></i> Latest Students Enrolled</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                <tr>
                  <th>LRN</th>
                  <th>Full Name</th>
                  <th>Strand</th>
                </tr>
                  
                </thead>
                <?php foreach ($students_enrolled as $key => $val) { ?>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html"><?php echo $val->lrn; ?></a></td>
                    <td><?php echo $val->first_name.' '.$val->middle_name.' '.$val->last_name ; ?></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $val->strand_name; ?></div>
                    </td>
                  </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->

            <?php if(isset($this->session->Enrollment) && $this->session->Enrollment=='active') { ?>
              <div class="box-footer clearfix">
                <a href="<?php echo site_url('enrollment/register_student')?>" class="btn btn-sm btn-danger btn-flat pull-left">Add Student</a>
                <a href="<?php echo site_url('enrollment/student_list')?>" id="trial" class="btn btn-sm btn-default btn-flat pull-right">View All Students</a>
              </div>
            <?php } ?>
          </div>
          <!-- /.box -->

          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-fw fa-bar-chart"></i> Strand Status</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Strand</th>
                  <th>No of Students</th>
                  <th>Percent in total</th>
                  <th style="width: 10%">Label</th>
                </tr>
                <?php foreach ($strandStatus as $key => $val) { ?>
                <tr>
                  <td><?php echo $val->code;?></td>
                  <td><?php echo $val->stud_count;?></td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-danger" style="width: <?php echo $val->percent;?>%; background-color: <?php echo $val->color;?>;"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-<?php echo $val->color;?>"><?php echo $val->percent;?>%</span></td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div >
        <div class="col-lg-4 col-xs-12">
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
