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
        <div class="col-md-12">
          <!-- Application buttons -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Quick Access</h3>
            </div>
            <div class="box-body">
              <center>
                <a class="btn btn-app flat">
                  <i class="fa fa-files-o"></i> Enroll
                </a>
                <a class="btn btn-app flat">
                  <i class="fa fa-clone"></i> Strands
                </a>
                <a class="btn btn-app flat">
                  <i class="fa fa-university"></i> Rooms
                </a>
                <a class="btn btn-app flat">
                  <i class="fa fa-star"></i> Class
                </a>
                <a class="btn btn-app flat">
                  <i class="fa fa-id-card"></i> Students
                </a>
                <a class="btn btn-app flat">
                  <i class="fa fa-line-chart"></i> Grades
                </a>
                <a class="btn btn-app flat">
                  <i class="fa fa-history"></i> Audit Trail
                </a>
                <a class="btn btn-app flat">
                  <i class="fa fa-bar-chart"></i> Reports
                </a>
                <a class="btn btn-app flat">
                  <i class="fa fa-gear"></i> Settings
                </a>
                <a class="btn btn-app flat">
                  <i class="fa fa-lock"></i> Lock
                </a>
                <a class="btn btn-app flat">
                  <i class="fa fa-star"></i> Advisory
                </a>
              </center>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->

      <div class="row">

        <div class="col-lg-4 col-xs-12">
          <div class="box box-widget"  style="border-width: 1px; border-style: solid; border-color: darkgrey;">
            <div class="box-body">
              <div class="media">
                <div class="media-left">
                  <img src="<?php echo base_url('images/alt_picture.jpg');?>" alt="<?php echo base_url('images/alt_picture.jpg');?>" width="100px" style="border-width: 1px; border-style: solid; border-color: gainsboro;">
                </div>
                <div class="media-body" style="padding: 5px">
                  <h4 class="media-heading" style="font-family: Century Gothic;">Admin Adrii</h4>
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
                  <img src="<?php echo base_url('images/alt_picture.jpg');?>" alt="<?php echo base_url('images/alt_picture.jpg');?>" width="100px" style="border-width: 1px; border-style: solid; border-color: gainsboro;">
                </div>
                <div class="media-body" style="padding: 5px">
                  <h4 class="media-heading" style="font-family: Century Gothic;">Admin Jassy</h4>
                  <p style="margin-bottom: 5px;"><i class="fa fa-fw fa-phone text-danger"></i> 0955-887-4822</p>
                  <p style="margin-bottom: 5px;"><i class="fa fa-fw fa-envelope text-warning"></i> jasbears@gmail.com</p>
                  <p style="margin-bottom: -3px;"><i class="fa fa-fw fa-comment text-primary"></i> <a hpref="#">Quick Message</a> </p>
                </div>
              </div>
            </div>
          </div>


          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Enrolled Students</span>
              <span class="info-box-number">5,200</span>

              <div class="progress">
                <div class="progress-bar" style="width: 100%"></div>
              </div>
              <span class="progress-description">
                    100% are active.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Teachers</span>
              <span class="info-box-number">92,050</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
              <span class="progress-description">
                    70% are active.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Rooms</span>
              <span class="info-box-number">114,381</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
              <span class="progress-description">
                    70% are occupied.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="ion-ios-heart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Class</span>
              <span class="info-box-number">163,921</span>

              <div class="progress">
                <div class="progress-bar" style="width: 90%"></div>
              </div>
              <span class="progress-description">
                    90 are full.
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <div class="col-lg-8 col-xs-12">

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Students Enrolled</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered table-striped">
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
            <div class="box-footer clearfix">
              <a href="<?php echo site_url('enrollment/register_student')?>" class="btn btn-sm btn-info btn-flat pull-left">Add Student</a>
              <a href="<?php echo site_url('enrollment/student_list')?>" id="trial" class="btn btn-sm btn-default btn-flat pull-right">View All Students</a>
            </div>
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Strand Status</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-bordered">
                <tr>
                  <th>Strand</th>
                  <th>No of Students</th>
                  <th>Percent in total</th>
                  <th style="width: 10%">Label</th>
                </tr>
                <tr>
                  <td>STEM</td>
                  <td>300</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                </tr>
                <tr>
                  <td>GAS</td>
                  <td>200</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-purple" style="width: 70%; background-color: teal"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-teal">70%</span></td>
                </tr>
                <tr>
                  <td>HUMMS</td>
                  <td>800</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                </tr>
                <tr>
                  <td>ABM</td>
                  <td>510</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-violet" style="width: 90%;  background-color: orange"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-orange">90%</span></td>
                </tr>
                <tr>
                  <td>TVL-AS</td>
                  <td>1023</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%;  background-color: purple"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-purple">90%</span></td>
                </tr>
                <tr>
                  <td>TVL-HE</td>
                  <td>80</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-info" style="width: 90%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">90%</span></td>
                </tr>
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
