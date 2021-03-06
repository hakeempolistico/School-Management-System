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
        Laboratory Schedule
        <small>Create a laboratory schedule for school year 2017-2018</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Manage Schedule</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row hidden-print">
      <div class="col-lg-3 col-xs-12">
        <div class="form-group ">
          <label>Laboratory Room</label>
          <select id="select-lab" class="form-control select2"  data-placeholder="Select Laboratory" style="width: 100%">
            <option></option>
            <?php foreach ($rooms as $val) 
              {
                echo "<option value='".$val->room_id."'>".$val->room_name."</option>";
              }
            ?>
          </select> 
        </div>
      </div>
      <div class="col-lg-3 col-xs-12">
        <div class="form-group ">
          <label>Semester</label>
          <select id="select-sem" class="form-control select2"  data-placeholder="Select Semester" style="width: 100%">
            <option></option>
            <option value='First Semester'>First Semester</option>
            <option value='Second Semester'>Second Semester</option>
          </select> 
        </div>
      </div>
    </div>

    <hr class="hidden-print" style="margin-top: 3px; border-color: lightgrey;" >
      
      <div class="row disabled">
        
      <!-- CLASS INFORMATION BOX -->
      <div class="col-lg-3 col-xs-12">
        <div class="box box-solid">
          <div class="box-header with-border">
              <h3 id="trash" class="box-title text-success" style="font-size: 15px;"><i class="fa fa-fw fa-info"></i> Room Information</h3>
          </div>
          <div class="box-body" style="padding: 0px 10px 0px 10px">
            <h6 style="margin: 14px 0px 13px 0px"> <b> Room ID  </b> <a id="room-id" class="pull-right"> --- </a></h6>
            <h6 style="margin: 14px 0px 13px 0px"> <b> Room Name  </b> <a id="room-name" class="pull-right"> --- </a></h6>
            <h6 style="margin: 14px 0px 13px 0px"> <b> Building  </b> <a id="room-building" class="pull-right"> --- </a></h6>
          </div>
        </div>
      </div>

      <!-- TRASH BIN BOX -->
        <div class="col-lg-3 col-xs-12">
          <div class="hidden-print box box-solid">
            <div class="box-header with-border">
              <h3 id="trash" class="box-title text-success" style="font-size: 15px;"><i class="fa fa-fw fa-trash"></i> Trash</h3>
            </div>
            <div class="box-body" style="padding: 5px">
              <div ondrop="dropTrash(event)" ondragover="allowDrop(event)" >
                  <h5 class="box-title text-center"><icon id = "icon" class="fa fa-trash-o fa-5x"/></h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-12">
          <div class="hidden-print box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title text-success" style="font-size: 15px;"><i class="fa fa-fw fa-hand-pointer-o"></i> Actions</h3>
            </div>
            <div class="box-body" >
              <center style="padding: 7px;">
                <!-- <button style="width: 100px; margin-top: 3px" id="row-add" class="btn btn-sm btn-success custom" data-toggle="modal" data-target="#modal-default">Add</button>
                <button style="width: 100px; margin-top: 3px" id="row-remove" class="btn btn-sm btn-danger custom">Remove</button> -->
                <button style="width: 100px; margin-top: 3px" id="row-remove-all" class="btn btn-sm btn-warning custom">Remove All</button>
                <button style="width: 100px; margin-top: 3px" id="row-print" class="btn btn-sm btn-primary custom">Print</button>
                <button style="width: 100px; margin-top: 3px" id="row-save" class="btn btn-sm bg-purple custom">Save</button>     
                <button style="width: 100px; margin-top: 3px" id="row-clear" class="btn btn-sm bg-purple custom">Clear</button>  
              </center>                                     
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-xs-12">
          <div class="hidden-print box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title text-success" style="font-size: 15px;"> <i class="fa fa-fw fa-clock-o"></i> Add Row</h3>
            </div>
            <div class="box-body" style="padding: 14px 10px" >
              <!-- time Picker -->
              <div class="bootstrap-timepicker" style="margin-bottom: -12px">
                  <!-- time Picker -->
                <div class="bootstrap-timepicker">
                  <div class="form-group">

                    <div class="input-group">
                      <input id="time-start" type="text" class="form-control timepicker">
                      <input id="time-end" type="text" class="form-control timepicker">

                      <div class="input-group-addon no-padding">
                        <button id="row-add" type="button" class="btn btn-info btn-flat" style="height: 67px"><i class="fa fa-fw fa-plus"></i></button>
                      </div>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>                                  
            </div>
          </div>
        </div>
      
    </div>
  </div>

      <div class="row disabled">
        <!-- /.col -->
        <div class="col-md-3">
        <!-- CREATE EVENT -->
          <div class="hidden-print box box-solid">
            <div class="box-header with-border">
                <h3 id="trash" class="box-title text-success" style="font-size: 15px;"> <i class="fa fa-fw fa-calendar-plus-o"></i> Create Event Here</h3>
            </div>
            <div class="box-body" style="padding: 18px 10px 17px 10px">
              <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <ul class="fc-color-picker" id="color-chooser">
                  <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-maroon" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-danger" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                </ul>
              </div>
              <!-- /btn-group -->
              <div class="input-group">
                <select id="select-subject" class="form-control select2 custom"  data-placeholder="Select Subjects" style="width: 100%">
                  <option></option>
                </select>
                <select id="select-class" class="form-control select2 custom"  data-placeholder="Select Class" style="width: 100%">
                  <option></option>
                  <?php foreach ($classes as $v) {
                    echo "<option value='".$v->id."'>".$v->strand_code.' '.substr($v->year_level,6,8).$v->section_name."</option>";
                  } ?>
                </select>

                <div class="input-group-btn ">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat custom" style="height: 68px">Add</button>
                </div>
                <!-- /btn-group -->
              </div>
              <!-- /input-group -->
              <button id="add-vacant" type="button" class="btn btn-flat custom" style="margin-top: 10px; background-color: gray; color: white">Add Vacant</button>
              <button id="add-break" type="button" class="btn btn-flat custom pull-right" style="margin-top: 10px; background-color: darkgray; color: white">Add Break</button>
            </div>
          </div>
          <!-- DRAGGABLE EVENTS -->
          <div class="box box-solid hidden-print">
            <div class="box-header with-border">
              <h3 class="box-title text-success" style="font-size: 15px;"> <i class="fa fa-fw fa-calendar-check-o"></i> Draggable Events</h3>
            </div>
            <div class="box-body" >
              <div id="external-events" class="external-events">
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-9">

          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE TABLE SCHEDULE -->
              <table  id="schedule" class="table table-bordered table-hover table-schedule">
                <thead>
                <tr>
                  <td id="tbl-title" colspan="6" class="text-success"> <i class="fa fa-fw fa-calendar"></i> Schedule</td>
                </tr>
                <tr>
                  <th>Time</th>
                  <th>Monday</th>
                  <th>Tuesday</th>
                  <th>Wednesday</th>
                  <th>Thursday</th> 
                  <th>Friday</th>
                </tr>
                </thead>

                <tbody>
                <div id="tbody">
                <tr class="tr-height">
                  <td class='time'>6:00 - 7:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>7:00 - 8:00 </td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>8:00 - 9:00 </td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>9:00 - 10:00 </td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>10:00 - 11:00 </td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>11:00 - 12:00 </td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>12:00 - 1:00 </td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>1:00 - 2:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>2:00 - 3:00 </td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>3:00 - 4:00 </td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>4:00 - 5:00 </td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>5:00 - 6:00 </td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td class='time'>6:00 - 7:00 </td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
              </div>
              </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
        <div class="modal fade in" id="modal-confirm">
          <div class="modal-dialog" style="max-width: 360px">
            <div id="box-delete" class="box box-primary">
              <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i id="box-delete-icon" class="fa fa-warning text-primary"></i>

                <h3 class="box-title text-primary">Confirm Save</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i id="box-delete-btn" class="fa fa-times text-primary"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body box-profile flat" style="margin-top: -10px">
                <h4 id="text-status">Are you sure you want todelete record?</h4>
                <h5 id='text-conflicts'></h5>
                <button id="btn-confirm" data-dismiss="modal" type="button" style="width: 75px; margin: 10px;" class="btn btn-block btn-primary btn-sm pull-right">Confirm</button>
              </div>
            </div>
          </div>
        </div>
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
<script src="<?php echo base_url(); ?>dist/js/academics/manage_laboratory.js"></script>

<script type="text/javascript">
  //Initialize Select2 Elements
    $('.select2').select2()
    //Timepicker
  $(document).ajaxStart(function () {
    Pace.restart()
  })
  var aYear = "<?php echo $this->session->academic_year; ?>"
  var getSectionUrl = "<?php echo base_url("academics/schedule/getSectionsDetails"); ?>"
  var getSectionsUrl = "<?php echo base_url("academics/schedule/getSections"); ?>"
  var getSubjectsUrl = "<?php echo base_url("academics/schedule/getSubjects"); ?>"
  var getSubjects = "<?php echo base_url("academics/schedule/getSubjectsDetails"); ?>"
  var addScheduleUrl = "<?php echo base_url("academics/schedule/addSchedule"); ?>"
  var deleteScheduleUrl = "<?php echo base_url("academics/schedule/deleteSchedule"); ?>"
  var getScheduleUrl = "<?php echo base_url("academics/schedule/getLabSchedule"); ?>"
  var auditTrailSaveUrl = "<?php echo base_url('academics/schedule/auditTrailSave'); ?>"
  var validationUrl = "<?php echo base_url('academics/schedule/validation'); ?>"
  var getRoomInfoUrl = "<?php echo base_url('academics/schedule/getRoomInfo'); ?>"
  var getLabSubjectsUrl = "<?php echo base_url('academics/schedule/getLabSubjects'); ?>"
</script>
</body>
</html>
