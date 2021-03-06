<!DOCTYPE html>
<html>

<?=$header?>

<style>
  input[type=number]::-webkit-inner-spin-button, 
  input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      margin: 0; 
  }
</style>
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
        Teachers
        <small>Manage teachers.</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Academics</a></li>
        <li class="active">Teachers</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-primary"><i class="fa fa-users"></i> Teacher List</h3>
              <button data-toggle="modal" data-target="#modal-add" class="pull-right btn btn-primary btn-xs edit-btn"><span class="fa fa-fw fa-plus"></span></button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="teachersTable" class="table table-bordered table-striped display nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Major</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Major</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>

      </div>

      <div class="modal fade" id="modal-schedule">
          <div class="modal-dialog" style="max-width: 900px">
              <div class="box box-success">
                <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-clock-o text-success"></i>

                <h3 class="box-title text-success">Schedule</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
            <div class="box-body box-profile flat">
              <div class="table-responsive">
              <table id="table-sched" class="table table-striped display nowrap" cellspacing="0" width="100%" >
                <thead class="bg-green">
                  <td><b>Class</b></td>
                  <td><b>Subject</b></td>
                  <td><b>Day</b></td>
                  <td><b>Time</b></td>
                  <td><b>Room</b></td>
                </thead>
                <tr>
                  <td>STEM 11-A</td>
                  <td>English 1</td>
                  <td>M/T/W/Th/F</td>
                  <td>9-11/1-2/2-3/3-4/ 4-5</td>
                  <td>Room 221</td>
                </tr>
                <tr>
                  <td>STEM 12-A</td>
                  <td>English 2</td>
                  <td>M/T/F</td>
                  <td>9-11/1-2/4-5</td>
                  <td>Room 222</td>
                </tr>
                <tr>
                  <td>STEM 12-A</td>
                  <td>English 2</td>
                  <td>M/T/F</td>
                  <td>9-11/1-2/4-5</td>
                  <td>Room 223</td>
                </tr>
                <tr>
                  <td>STEM 12-A</td>
                  <td>English 2</td>
                  <td>M/T/F</td>
                  <td>9-11/1-2/4-5</td>
                  <td>Room 224</td>
                </tr>
                <tr>
                  <td>STEM 12-A</td>
                  <td>English 2</td>
                  <td>M/T/F</td>
                  <td>9-11/1-2/4-5</td>
                  <td>Room 224</td>
                </tr>
                <tr>
                  <td>STEM 12-A</td>
                  <td>English 2</td>
                  <td>M/T/F</td>
                  <td>9-11/1-2/4-5</td>
                  <td>Room 224</td>
                </tr>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      <div class="modal fade" id="modal-view">
          <div class="modal-dialog" style="max-width: 400px">
              <div class="box box-primary">
                <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-search text-info"></i>

                <h3 class="box-title text-info">View Teacher</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button id="view-edit" type="button" class="btn btn-box-tool" ><i class="fa fa-pencil text-info"></i></button>
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
            <div class="box-body box-profile flat">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('images/alt_picture.jpg');?>" alt="<?php echo base_url('images/alt_picture.jpg');?>"> <br>
              <ul class="list-group list-group-unbordered">
                <li>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-id">Employee ID</label>
                  <input type="text" class="form-control" id="view-id">
                </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-firstname">First Name</label>
                  <input type="text" class="form-control" id="view-firstname">
                </div>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-middlename">Middle Name</label>
                  <input type="text" class="form-control" id="view-middlename">
                </div>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-lastname">Last Name</label>
                  <input type="text" class="form-control" id="view-lastname">
                </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label>Birthdate</label>
                      <input style="padding-left: 12px" id="view-birthdate" type="text" class="form-control pull-right datepicker" placeholder="Teacher Birthdate">
                  </div>
                  <div class="form-group">
                    <label>Sex</label>
                    <select id="view-sex" class="form-control select2" data-placeholder="Select Sex" style="width: 100%;">
                      <option></option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label>Contact Number</label>
                    <input id="view-contact" type="number" class="form-control" placeholder="Teacher Contact No">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label>Email</label>
                    <input id="view-email" type="text" class="form-control" placeholder="Teacher Email">
                  </div>  
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-major">Major</label>
                  <input type="text" class="form-control" id="view-major">
                </div>
                <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-position">Position</label>
                  <input type="text" class="form-control" id="view-position">
                </div>
                <button id="view-update" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-save"></i> &nbsp; Save</button>
                 
                </li>   
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      <div class="modal fade" id="modal-add">
          <div class="modal-dialog" style="max-width: 400px">
            <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title text-primary"><i class="fa fa-plus"></i> Add Teacher</h3>
                </div>
                <div class="box-body">
                  <div class="form-group" style="margin-bottom: 5px">
                    <label>Employee ID</label>
                    <label class="text-danger">*</label>
                    <input id="id-input" type="text" class="form-control"  placeholder="Teacher Employee ID">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label>First Name</label>
                    <input id="firstname-input" type="text" class="form-control" placeholder="Teacher First Name">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label>Middle Name</label>
                    <input id="middlename-input" type="text" class="form-control" placeholder="Teacher Middle Name">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label>Last Name</label>
                    <input id="lastname-input" type="text" class="form-control" placeholder="Teacher Last Name">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label>Birthdate</label>
                      <input style="padding-left: 12px" id="birthdate-input" type="text" class="form-control pull-right datepicker" placeholder="Teacher Birthdate">
                  </div>
                  <div class="form-group">
                    <label>Sex</label>
                    <select id="sex-input" class="form-control select2" data-placeholder="Select Sex" style="width: 100%;">
                      <option></option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label>Contact Number</label>
                    <input id="contact-input" type="number" class="form-control" placeholder="Teacher Contact No">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label>Email</label>
                    <input id="email-input" type="text" class="form-control" placeholder="Teacher Email">
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label>Major</label>
                    <input type="text" class="form-control" id="major-input" placeholder="Teacher Major">
                  </div>
                  <div class="form-group" style="margin-bottom: 7px">
                    <label>Position</label>
                    <input type="text" class="form-control" id="position-input" placeholder="Teacher Position">
                  </div>
                  <button id="add-btn" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-plus"></i> &nbsp; Add</button>
                </div>
            </div>
          </div>
        </div>

        <div class="modal fade in" id="modal-delete">
          <div class="modal-dialog" style="max-width: 320px">
            <div id="box-delete" class="box box-danger">
              <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i id="box-delete-icon" class="fa fa-warning text-danger"></i>

                <h3 class="box-title text-danger">Warning</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button id="box-delete-btn" type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body box-profile flat" style="margin-top: -10px">
                <h4 id="text-status">Are you sure you want to delete record?</h4>
                <button id="delete-confirm" data-dismiss="modal" type="button" style="width: 75px" class="btn btn-block btn-danger btn-sm pull-right">Confirm</button>
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

<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- BOOTSTRAP NOTIF -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-notify-3.1.3/dist/bootstrap-notify.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
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
  });
</script>
<script>
  var getRecordsUrl = '<?php echo base_url('academics/teachers/ajaxGetRecords'); ?>';
  var countUrl = '<?php echo base_url('academics/teachers/ajaxCountRow'); ?>';
  var addUrl = '<?php echo base_url('academics/teachers/ajaxInsert'); ?>';
  var updateUrl = '<?php echo base_url('academics/teachers/ajaxUpdate'); ?>';
  var getRowUrl = '<?php echo base_url('academics/teachers/ajaxGetRow'); ?>';
  var deleteRowUrl = '<?php echo base_url('academics/teachers/ajaxDeleteRow'); ?>';
  var auditTrailUpdateUrl = '<?php echo base_url('academics/teachers/auditTrailUpdate'); ?>';

    //Initialize Select2 Elements
    $('.select2').select2()
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    })

</script>


<script src="<?php echo base_url('dist/js/academics/teachers.js'); ?>"></script>
</body>
</html>
