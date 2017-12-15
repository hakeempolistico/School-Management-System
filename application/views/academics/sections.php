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
        Sections
        <small>Manage Sections</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Academics</a></li>
        <li class="active">Sections</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Add Sections</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="select-strand">Strand</label>                  
                  <label for="select-strand" class="text-danger">*</label>                  
                  <select id="select-strand" data-placeholder="Section Strand" class="form-control" style="width: 100%">
                    <option></option>
                  </select>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="select-year">Year Level</label> 
                  <label for="select-year" class="text-danger">*</label>                     
                  <select id="select-year" data-placeholder="Section Year Level" class="form-control" style="width: 100%">
                    <option></option>
                  </select>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="input-name">Name</label>
                  <label for="input-name" class="text-danger">*</label>    
                  <input type="text" class="form-control" id="input-name" placeholder="Section Name">
                </div> 
                <div class="form-group" style="margin-bottom: 7px">
                  <label for="input-capacity">Capacity</label>
                  <input type="number" class="form-control" id="input-capacity" placeholder="Section Capacity">
                </div>                
                <button id="btn-add" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-plus"></i> &nbsp; Add</button>
              </div>
          </div>
        </div>
        <div class="col-lg-8 col-xs-12">

          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Strand List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="table-sections" class="table table-bordered table-striped display nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>Strand Code</th>
                  <th>Year Level</th>
                  <th>Name</th>
                  <th>Capacity</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>


        <div class="modal fade" id="modal-edit">
          <div class="modal-dialog" style="max-width: 400px">
              <div class="box box-primary">
                <div class="box-header with-border" style="cursor: move; margin: 0px;">
                  <i class="fa fa-pencil"></i>

                  <h3 class="box-title">Edit Sections</h3>
                  <!-- tools box -->
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="box-body box-profile flat">
                  <ul class="list-group list-group-unbordered">
                    <li>
                      <div class="form-group">
                        <label>Strands</label>
                        <label class="text-danger">*</label>
                        <select id="edit-strand" data-placeholder="Section Strand" class="form-control select2" style="width:100%;">
                          <option></option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Year</label>
                        <label class="text-danger">*</label>
                        <select id="edit-year" data-placeholder="Section Year Level" class="form-control select2" style="width:100%;">
                          <option></option>
                        </select>
                      </div>                  
                      <div class="form-group" style="margin-bottom: 5px;">
                        <label for="edit-name">Name</label>                    
                        <label for="edit-name" class="text-danger">*</label>
                        <input type="text" class="form-control" id="edit-name">
                      </div>
                      <div class="form-group" style="margin-bottom: 5px;">
                        <label for="edit-capacity">Capacity</label>
                        <input type="number" class="form-control" id="edit-capacity">
                      </div>                
                      <button id="edit-update" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-save"></i> &nbsp; Save</button>                 
                    </li>   
                  </ul>
                </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="modal fade in" id="modal-delete">
          <div class="modal-dialog" style="max-width: 320px">
            <div class="box box-danger">
              <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-warning text-danger"></i>

                <h3 class="box-title text-danger">Warning</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body box-profile flat" style="margin-top: -10px">
                <h4>Are you sure you want to delete record?</h4>
                <button id="delete-confirm" data-dismiss="modal" type="button" style="width: 75px" class="btn btn-block btn-danger btn-sm pull-right">Confirm</button>
              </div>
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
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
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
<script src="<?php echo base_url('dist/js/academics/sections.js'); ?>"></script>

<script>

  $(document).ajaxStart(function () {
    Pace.restart()
  })

  var getStrands = '<?php echo base_url('academics/sections/getStrands'); ?>';
  var getYears = '<?php echo base_url('academics/sections/getYears'); ?>';
  var getRecordsUrl = '<?php echo base_url('academics/sections/ajaxGetRecords'); ?>';
  var addUrl = '<?php echo base_url('academics/sections/ajaxInsert'); ?>';
  var countUrl = '<?php echo base_url('academics/sections/ajaxCountRow'); ?>';
  var updateUrl = '<?php echo base_url('academics/sections/ajaxUpdate'); ?>';
  var deleteRowUrl = '<?php echo base_url('academics/sections/ajaxDeleteRow'); ?>';
</script>
</body>
</html>
