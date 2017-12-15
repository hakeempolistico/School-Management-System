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
        Schedule
        <small>Create a schedule for school year 2017-2018</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Manage Schedule</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
      <div class="col-lg-4 col-xs-12">
        <div class="input-group margin hidden-print" style="margin: 0 0 10px 0;" >
                <select id="select-class" class="form-control select2"  data-placeholder="Select Class" style="width: 100%">
                  <option></option>
                  <?php foreach ($classes as $val) 
                    {
                      echo "<option value='".$val->id."'>".$val->strand_code." ".substr($val->year_level, 6)."-". $val->section_name."</option>";
                    }
                  ?>
                </select> 
                    <span class="input-group-btn">
                      <button id="btn-enter" type="button" class="btn btn-info btn-flat">ENTER</button>
                    </span>
              </div>

      </div>

    </div>
      
      
      <div class="row disabled">
        
      <!-- CLASS INFORMATION BOX -->
      <div class="col-lg-4 col-xs-12">
        <div class="hidden-print box box-solid">
          <div class="box-header with-border">
              <h4 id="trash" class="box-title">Class Information</h4>
          </div>
          <div class="box-body" style="padding: 0px 10px 0px 10px">
            <h5 style="margin: 14px 0px 13px 0px"> <b> Strand  </b> <a id="class-strand" class="pull-right"> --- </a></h5>
            <h5 style="margin: 14px 0px 13px 0px"> <b> Year & Section  </b> <a id="class-year-section" class="pull-right"> --- </a></h5>
            <h5 style="margin: 14px 0px 13px 0px"> <b> Capacity  </b> <a id="class-capacity" class="pull-right"> --- </a></h5>
          </div>
        </div>
      </div>

      <!-- TRASH BIN BOX -->
        <div class="col-lg-4 col-xs-12">
          <div class="hidden-print box box-solid">
            <div class="box-header with-border">
              <h4 id="trash" class="box-title">Drag Here To Trash</h4>
            </div>
            <div class="box-body" style="padding: 5px">
              <div ondrop="dropTrash(event)" ondragover="allowDrop(event)" >
                  <h5 class="box-title text-center"><icon id = "icon" class="fa fa-trash-o fa-5x"/></h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-xs-12">
          <div class="hidden-print box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Actions Row</h4>
            </div>
            <div class="box-body" >
              <center style="padding: 7px;">
                <button style="width: 100px; margin-top: 3px" id="row-add" class="btn btn-sm btn-success custom">Add</button>
                <button style="width: 100px; margin-top: 3px" id="row-remove" class="btn btn-sm btn-danger custom">Remove</button>
                <button style="width: 100px; margin-top: 3px" id="row-remove-all" class="btn btn-sm btn-warning custom">Remove All</button>
                <button style="width: 100px; margin-top: 3px" id="row-print" class="btn btn-sm btn-primary custom">Print</button>
                <button style="width: 100px; margin-top: 3px" id="row-save" class="btn btn-sm bg-purple custom">Save Sched</button>     
                <button style="width: 100px; margin-top: 3px" id="row-clear" class="btn btn-sm bg-purple custom">Clear</button>  
              </center>                                     
            </div>
          </div>
        </div>
      
    </div>

      <div class="row disabled">
        <!-- /.col -->
        <div class="col-md-3">

          <div class="hidden-print box box-solid">
            <div class="box-header with-border">
                <h4 id="trash" class="box-title">Create Event Here</h4>
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
                <select id="select-room" class="form-control select2 custom"  data-placeholder="Select Room" style="width: 100%">
                  <option></option>
                  <?php foreach ($rooms as $val) 
                    {
                      echo "<option value='".$val->room_id."'>".$val->room_name."</option>";
                    }
                  ?>   
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
              <h4 class="box-title">Draggable Events</h4>
            </div>
            <div class="box-body" >
              <div id="external-events">
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
                  <th id="tbl-title" colspan="6" class="text-success">---</th>
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
                  <td contenteditable='true' class='time'>6:00-7:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>7:00-8:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>8:00-9:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>9:00-10:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>10:00-11:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>11:00-12:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>12:00-1:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>1:00-2:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>2:00-3:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>3:00-4:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>4:00-5:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>5:00-6:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true' class='time'>6:00-7:00</td>
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
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
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

  $(document).ajaxStart(function () {
    Pace.restart()
  })

  var getSectionUrl = "<?php echo base_url("academics/schedule/getSectionsDetails"); ?>"
  var getSubjectsUrl = "<?php echo base_url("academics/schedule/getSubjects"); ?>"
  var addScheduleUrl = "<?php echo base_url("academics/schedule/addSchedule"); ?>"
  var deleteScheduleUrl = "<?php echo base_url("academics/schedule/deleteSchedule"); ?>"
  var getScheduleUrl = "<?php echo base_url("academics/schedule/getSchedule"); ?>"
</script>
</body>
</html>
