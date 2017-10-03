<!-- include header.php file in template_blocks folder-->
<?php include 'template_blocks/header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="alert alert-success alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Day 1 of Enrollment is successful!</h4>
        Congratulations! Job well done! Please do the same on Day 2 of Enrollment!
     </div>
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li class="active">Dashboard</li>
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
              <h3>1200</h3>

              <p>Students</p>
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
              <h3>169</h3>

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
              <h3>44</h3>

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
              <h3>65</h3>

              <p>Class</p>
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
      <!-- Main row -->
      <div class="row">
        <!-- Left col --> 
        <section class="col-lg-4 connectedSortable">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Overall Senior High Students Per Grade</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="150"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-aqua"></i> Grade 11</li>
                    <li><i class="fa fa-circle-o text-light-blue"></i> Grade 12</li>
                  </ul>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Grade 11 Students
                  <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                <li><a href="#">Grade 12 Students <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                </li>
              </ul>
            </div>
            <!-- /.footer -->
          </div>
          <!-- /.box -->
        </section>

        <section class="col-lg-4 connectedSortable">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Overall Grade 12 per Strands</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart3" height="150"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-navy"></i> STEM</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> GAS</li>
                    <li><i class="fa fa-circle-o text-red"></i> ABM</li>
                    <li><i class="fa fa-circle-o text-green"></i> HUMSS</li>
                    <li><i class="fa fa-circle-o text-aqua"></i> TVL Cookery</li>
                    <li><i class="fa fa-circle-o text-maroon"></i> TVL AS</li>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">TVL Cookery
                  <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                <li><a href="#">TVL Automative Servicing<span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                </li>
              </ul>
            </div>
            <!-- /.footer -->
          </div>
          <!-- /.box -->

        </section>

        <section class="col-lg-4 connectedSortable">

          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Overall Grade 11 per Strands</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart2" height="150"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-navy"></i> STEM</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> GAS</li>
                    <li><i class="fa fa-circle-o text-red"></i> ABM</li>
                    <li><i class="fa fa-circle-o text-green"></i> HUMSS</li>
                    <li><i class="fa fa-circle-o text-aqua"></i> TVL Cookery</li>
                    <li><i class="fa fa-circle-o text-maroon"></i> TVL AS</li>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">TVL Cookery
                  <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                <li><a href="#">TVL Automative Servicing<span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a>
                </li>
              </ul>
            </div>
            <!-- /.footer -->
          </div>
          <!-- /.box -->

        </section>
      </div>

      <div class="row">
        <section class="col-lg-7 connectedSortable">

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
                    <th>Status</th>
                    <th>Strand</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html">14-038-014</a></td>
                    <td>Hakeem A. Polistico</td>
                    <td><span class="label label-success">ENROLLED</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">TVL-Automotive Servicing</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html">14-038-027</a></td>
                    <td>Adrielle Kristine Nicolette M. Escaro </td>
                    <td><span class="label label-warning">PENDING</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">TVL-Cookery</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html">14-038-016</a></td>
                    <td>Jasver Salva</td>
                    <td><span class="label label-danger">PENDING</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">TVL-Cookery</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html">14-038-015</a></td>
                    <td>Marc Dominic I. Terrobias</td>
                    <td><span class="label label-success">ENROLLED</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">TVL-Automotive Servicing</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html">14-038-069</a></td>
                    <td>Patrick Guzman</td>
                    <td><span class="label label-success">ENROLLED</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">TVL-Automotive Servicing</div>
                    </td>
                  </tr>

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Add Student</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Students</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

           <!-- TABLE: LATEST STUDENTS ENROLLED -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Teachers Hired</h3>

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
                    <th>Status</th>
                    <th>Strand</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html">14-038-014</a></td>
                    <td>Hakeem A. Polistico</td>
                    <td><span class="label label-success">TEACHER 1</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">TVL-Automotive Servicing</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html">14-038-027</a></td>
                    <td>Adrielle Kristine Nicolette M. Escaro </td>
                    <td><span class="label label-warning">TEACHER 3</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">TVL-Cookery</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html">14-038-016</a></td>
                    <td>Jasver Salva</td>
                    <td><span class="label label-danger">TEACHER 2</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">TVL-Cookery</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="<?php echo base_url(); ?>pages/examples/invoice.html">14-038-015</a></td>
                    <td>Marc Dominic I. Terrobias</td>
                    <td><span class="label label-success">TEACHER 1</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">TVL-Automotive Servicing</div>
                    </td>
                  </tr>
                  

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Add Teacher</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Teachers</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->


          

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          
          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Overall Senior High School Students per Year</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Chat</h3>

              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <div class="item">
                <img src="<?php echo base_url(); ?>dist/img/user4-128x128.jpg" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                    Mike Doe
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
                <div class="attachment">
                  <h4>Attachments:</h4>

                  <p class="filename">
                    Theme-thumbnail-image.jpg
                  </p>

                  <div class="pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                  </div>
                </div>
                <!-- /.attachment -->
              </div>
              <!-- /.item -->
              <!-- chat item -->
              <div class="item">
                <img src="<?php echo base_url(); ?>dist/img/user3-128x128.jpg" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                    Alexander Pierce
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
              </div>
              <!-- /.item -->
              <!-- chat item -->
              <div class="item">
                <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                    Susan Doe
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
              </div>
              <!-- /.item -->
            </div>
            <!-- /.chat -->
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" placeholder="Type message...">

                <div class="input-group-btn">
                  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box (chat box) -->

          
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
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
</body>
</html>
