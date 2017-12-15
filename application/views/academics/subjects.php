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
        Subjects
        <small>temporary message here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-mortar-board"></i> Academics</a></li>
        <li class="active">Subjects</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-4 col-xs-12">
          <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Add Subjects</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="form-group"style="margin-bottom: 5px;">
                    <label for="code-input">Code</label>
                    <label for="name-input" class="text-danger">*</label>
                    <input type="text" class="form-control" id="code-input" placeholder="Subject Code" required>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                    <label for="name-input">Name</label>
                    <label for="name-input" class="text-danger">*</label>
                    <input type="text" class="form-control" id="name-input" placeholder="Subject Name" required>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                    <label for="type-input">Type</label>
                    <input type="text" class="form-control" id="type-input" placeholder="Subject Type">
                  </div>
                  <div class="form-group" style="margin-bottom: 7px;">
                    <label for="description-input">Description</label>
                    <input type="text" class="form-control" id="description-input" placeholder="Subject Description">
                  </div>
                  <button id="add-btn" type="button" style="width: 100px" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-plus"></i> &nbsp; Add</button>
              </div>
          </div>
        </div>
        <div class="col-lg-8 col-xs-12">

          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Subject List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="subjectsTable" class="table table-bordered table-striped display nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tfoot>
                <tr>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>

        <div class="modal fade in" id="modal-view">
          <div class="modal-dialog" style="max-width: 400px">
              <div class="box box-primary">

              <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-search"></i>

                <h3 class="box-title text-info">View Subject</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  <button id="view-edit" type="button" class="btn btn-box-tool" ><i class="fa fa-pencil text-info"></i></button>
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>

            <div class="box-body box-profile flat ">

              <ul class="list-group list-group-unbordered">
                <li>
                <div class="form-group">
                  <label for="view-code">Code</label>
                  <input type="text" class="form-control" id="view-code" placeholder="subject code" value="Subject Code">
                </div>
                  <div class="form-group" style="margin-bottom: 5px;">
                  <label for="view-name">Name</label>
                  <input type="text" class="form-control" id="view-name" placeholder="subject name" value="Subject Name">
                </div>
                <div class="form-group"style="margin-bottom: 5px;">
                  <label for="view-type">Type</label>
                  <input type="text" class="form-control" id="view-type" placeholder="subject type" value="Subject Type">
                </div>
                <div class="form-group">
                  <label for="view-description">Description</label>
                  <textarea type="text" class="form-control" id="view-description" placeholder="subject description">Subject Description </textarea>
                </div>                
                <button id="view-update" type="button" style="width: 100px; margin-top: -10px;" class="btn btn-sm btn-block btn-primary pull-right"><i class="fa fa-save"></i> &nbsp; Save</button>
                 
                </li>                
              </ul>
             
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.modal-dialog -->
        </div>

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
              
                 
                </li>                
              </ul>
             
            </div>
            <!-- /.box-body -->
          </div>
          {footer}
          </div>
          <!-- /.modal-dialog -->
        </div>

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- PACE -->
<script src="<?php echo base_url(); ?>bower_components/PACE/pace.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
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

<script src="<?php echo base_url(); ?>dist/js/academics/subjects.js"></script>
</body>
</html>
