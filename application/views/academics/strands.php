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
        Strands
        <small>Manage Strands</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Academics</a></li>
        <li class="active">Strands</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">

          <!-- <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title text-primary"><i class="fa fa-tag"></i> Strand List</h3>
              <button data-toggle="modal" data-target="#modal-add" class="pull-right btn btn-primary btn-xs edit-btn"><span class="fa fa-fw fa-plus"></span></button>
            </div>

            <div class="box-body">
              <table id="strands-table" class="table table-bordered table-striped  display nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>Code</th>    
                  <th>Name</th>              
                  <th>Strands</th>              
                  <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>Code</th>    
                  <th>Name</th>              
                  <th>Strands</th>              
                  <th>Action</th>
                </tr>                
                </tfoot>
              </table>
            </div>
          </div> -->

          <!-- <style>
            .panel[id='p-strands'] .panel-heading button { 
              color: white; font-size: 14px; margin-top: -2px;
            }
            .panel[id='p-strands'] .panel-heading button:hover { 
              color: pink;
            }
            .panel[id='p-strands'] .panel-heading { 
              background-color: darkslategray;
              color: white;
            }
            .panel[id='p-strands'] {
              border-color: darkslategray;
            }
          </style> -->

          <div id="p-strands" class="panel panel-primary">
            <div class="panel-heading">
              <button data-toggle="modal" data-target="#modal-add" class="pull-right btn btn-link btn-xs" style="color: white;"><span class="fa fa-fw fa-plus" ></span></button>
              <h3 class="panel-title"><i class="fa fa-tag"></i> Strand List</h3>
            </div>
            <div class="panel-body">
              <table id="strands-table" class="table table-bordered table-striped  display nowrap" cellspacing="0" width="100%">
                  <thead>
                  <tr>
                    <th>Code</th>    
                    <th>Name</th>              
                    <th>Strands</th>              
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                    <th>Code</th>    
                    <th>Name</th>              
                    <th>Strands</th>              
                    <th>Action</th>
                  </tr>                
                  </tfoot>
                </table>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modal-edit">
          <div class="modal-dialog" style="max-width: 400px">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <button type="button" class="pull-right btn btn-link btn-xs" data-dismiss="modal"><i class="fa fa-times" style="color: white"></i></button>
                <h3 class="panel-title"><i class="fa fa-pencil"></i> Edit Strand</h3>
              </div>
              <div class="panel-body">
                <ul class="list-group list-group-unbordered" style="list-style: none;">
                  <li>
                    <div class="form-group" style="margin-bottom: 5px;">
                      <label for="edit-code">Code</label>                    
                      <label for="edit-code" class="text-danger">*</label>
                      <input type="text" class="form-control" id="edit-code">
                    </div>
                    <div class="form-group" style="margin-bottom: 5px;">
                      <label for="edit-status">Name</label>
                      <input type="text" class="form-control" id="edit-name">
                    </div>             
                    <button id="edit-update" type="button" style="width: 100px; margin-top: 10px;" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-save"></i> &nbsp; Save</button>                 
                  </li>   
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modal-add">
          <div class="modal-dialog" style="max-width: 400px">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <button type="button" class="pull-right btn btn-link btn-xs" data-dismiss="modal"><i class="fa fa-times" style="color: white"></i></button>
                <h3 class="panel-title"><i class="fa fa-plus"></i> Add Strands</h3>
              </div>
              <div class="panel-body">
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="srtandCodeInput">Code</label>
                  <label for="srtandCodeInput" class="text-danger">*</label>
                  <input type="text" class="form-control" id="code-input" placeholder="Strand Code">
                </div> 
                <div class="form-group" style="margin-bottom: 7px">
                  <label for="strandNameInput">Name</label>
                  <input type="text" class="form-control" id="name-input" placeholder="Strand Name">
                </div>                
                <div class="form-group" style="margin-bottom: 7px">
                  <label for="strandNameInput">Grade Requirement</label>
                  <input type="text" class="form-control" id="name-gr" placeholder="Strand Name">
                </div>               
                <button type="button" id="add-btn" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-plus"></i> &nbsp; Add</button>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="modal fade" id="modal-add">
          <div class="modal-dialog" style="max-width: 400px">
            <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title text-primary"><i class="fa fa-plus"></i> Add Strands</h3>
                </div>
                <div class="box-body">
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="srtandCodeInput">Code</label>
                    <label for="srtandCodeInput" class="text-danger">*</label>
                    <input type="text" class="form-control" id="code-input" placeholder="Strand Code">
                  </div> 
                  <div class="form-group" style="margin-bottom: 7px">
                    <label for="strandNameInput">Name</label>
                    <input type="text" class="form-control" id="name-input" placeholder="Strand Name">
                  </div>               
                  <button type="button" id="add-btn" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-plus"></i> &nbsp; Add</button>
                </div>
            </div>
          </div>
        </div> -->

        <div class="modal fade in" id="modal-delete">
          <div class="modal-dialog" style="max-width: 360px">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <button type="button" class="pull-right btn btn-link btn-xs" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                <h3 class="panel-title"><i class="fa fa-ban"></i> Warning</h3>
              </div>
              <div class="panel-body">
                <h4 id="text-status" class="panel-title">Are you sure you want todelete record?</h4>
                <button id="delete-confirm" data-dismiss="modal" type="button" style="width: 75px;  margin-top: 10px;" class="btn btn-block btn-danger btn-sm pull-right">Confirm</button>
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

<script src="<?php echo base_url('dist/js/academics/strands.js'); ?>"></script>

<script>

  $(document).ajaxStart(function () {
    Pace.restart()
  })

  var addStrand = '<?php echo base_url('academics/strands/addStrand'); ?>';
  var getRecordsUrl = '<?php echo base_url('academics/strands/ajaxGetRecords'); ?>';
  var getRowUrl = '<?php echo base_url('academics/strands/ajaxGetRow'); ?>';
  var updateUrl = '<?php echo base_url('academics/strands/ajaxUpdate'); ?>';
  var countUrl = '<?php echo base_url('academics/strands/ajaxCountRow'); ?>';
  var deleteRowUrl = '<?php echo base_url('academics/strands/ajaxDeleteRow'); ?>';
  var auditTrailUpdateUrl = '<?php echo base_url('academics/strands/auditTrailUpdate'); ?>';
  
</script>
</body>
</html>
