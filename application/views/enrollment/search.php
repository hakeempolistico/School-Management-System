<!-- include header.php file in template_blocks folder-->
<?php include 'template_blocks/header.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!--<div class="alert bg-navy alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Reminder!</h4>
        Make sure to receive the necessary requirements for enrollment, otherwise the student won't be enrolled!
     </div>-->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Search for Registered Students
        <small>Pick one to enroll</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li class="active">Enroll Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Registered Students</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registeredStudentstable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>LRN</th>
                  <th>Name</th>
                  <th>Date Registered</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>LRN</th>
                  <th>Name</th>
                  <th>Date Registered</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  {footer}

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script>
  var getRecordsUrl = '<?php echo base_url("enrollment/enroll_student/populateTable"); ?>';

  $('#registeredStudentstable').DataTable().destroy();

  $('#registeredStudentstable').DataTable({
    "columns": [
        { "width": "20%" },
        { "width": "30%" },
        { "width": "25%" },
        { "width": "25%" }
        ],
        "order": [] ,
        "ajax": getRecordsUrl
  });
</script>


</body>
</html>
