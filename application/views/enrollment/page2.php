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
        Enroll Student
        <small>lrn: <?php echo $lrn ?> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Enrollment</a></li>
        <li class="active">Enroll Student</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <h4 style="margin-left: 20px;" id="choose">Choose Grade:</h4>
      <div class="row" id="yearLevel">


        <div class="col-md-4">
          <button id="grade11" class="btn btn-flat btn-lg" style="background-color: #603838; height: 270px; width: 100%; color: white;">Grade 11</button>
          <button id="grade12" class="btn btn-flat btn-lg" style="background-color: #82595D; height: 270px; width: 100%; color: white;">Grade 12</button>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row" id="req" style="display: none;">
      <div class="col-md-4">
          <div class="box" style="width: 100%;">
            <div class="box-header with-border">
            <button class="btn btn-flat btn-primary btn-lg" id="grade" style="height: 60px; width: 100%;"></button>
          </div>
          <div class="box-body">
            <label>Requirements:</label>
                <!-- checkbox -->
                <div class="form-group" style="padding: 3px 20px;">
                  <label>
                    <input type="checkbox" class="minimal-red checkAll11">
                    Check All
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" class="minimal-red check11" id="nso">
                    NSO Birth Certificate
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" class="minimal-red check11" id="f137">
                    Form 137
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" class="minimal-red check11" id="f138">
                    Form 138
                  </label>

                </div>
                <label>Note:</label>
                <!-- /.form-group -->
                <div class="form-group" style="padding: 0 20px;">
                  <textarea id="note" style="width: 100%;"></textarea>
                </div>
                <!-- /.form-group -->

              </div>


              <div class="box-footer with-border text-muted" id="grades11">
                <label>Grades:</label>
                <div class="inner" style="padding: 10px 20px;">

                  <div class="row">

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>MATH</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="math" style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>ENG</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="eng"  style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>SCI</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="sci"  style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>AP</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="ap"  style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                  </div>
                  <!-- /.row -->


                  <div class="row">

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>MAPEH</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="mapeh" style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>VALUES</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="values" style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>FIL</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="fil" style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                    <div class="col-md-3">
                      <div class="form-group">
                        <label>TLE</label>
                        <input type="text" class="form-control subject11" name="subj[]" id="tle" style="margin-bottom: -10px;" disabled>
                      </div>
                    </div>

                  </div>
                  <!-- /.row -->
                  <button class="btn btn-primary btn-flat pull-right subject" id="ave11" style="margin-top: 15px; width: 20%;">Go</button>
                  <div id="error"></div>
                  <div id="avera"></div>
                </div>
                <!-- /.inner -->
              </div>
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-8" id= "aStrands" style="display: none;">
        <div>
        <h4>Available Strands:</h4>
        </div>

      <div class="row">

        <div class="col-md-6" id="tvlasdiv">
          <div class="small-box bg-yellow-active" data-toggle="modal" data-target="#strand_selection" style="cursor: pointer;">
            <div class="inner">
              <h3>TVL-AS</h3>

              <p>Technogy-Vocational<br>Livelihood: Automotive Services</p>
            </div>
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-md-6" id="gasdiv">
          <div class="small-box bg-maroon" data-toggle="modal" data-target="#strand_selection" style="cursor: pointer;">
            <div class="inner">
              <h3>GAS</h3>

              <p>General<br>Academic Strand</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-md-6" id="tvlhediv">
          <div class="small-box bg-blue" data-toggle="modal" data-target="#strand_selection" style="cursor: pointer;">
            <div class="inner">
              <h3>TVL-HE</h3>

              <p>Technology-Vocational<br>Livelihood: Home Economics</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-md-6" id="humssdiv">
          <div class="small-box bg-gray humssbox" data-toggle="modal" data-target="#humss" style="pointer-events: none;">
            <div class="inner">
              <h3>HUMSS</h3>

              <p>Humanities<br>and Social Sciences</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-md-6" id="abmdiv">
          <div class="small-box bg-gray abmbox" data-toggle="modal" data-target="#abm" style="pointer-events: none;">
            <div class="inner">
              <h3>ABM</h3>

              <p>Accountancy<br>and Business Management</p>
            </div>
            <div class="icon">
              <i class="fa fa-briefcase"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <div class="col-md-6" id="stemdiv">
          <div class="small-box bg-gray stembox" data-toggle="modal" data-target="#stem" style="pointer-events: none;">
            <div class="inner">
              <h3>STEM</h3>

              <p>Science, Technology,<br> Engineering, and Mathematics</p>
            </div>
            <div class="icon">
              <i class="fa fa-flask"></i>
            </div>
            <a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->        

      </div>
      <!-- /.row -->
      </div>
      <!-- /.col-md-8 -->

      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

    <!-- MODALS -->

      <div class="modal fade" id="strand_selection">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-green">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Select Section for <span class="chosenStrand"></span></h4>
            </div>
            <div class="modal-body">
              <div class="box-body">
                <table id="sectionsTable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th></th>
                  <th>Section ID</th>
                  <th>Section</th>
                  <th>Capacity</th>
                  <th>Status</th>
                </tr>
                </thead>
              </table>
              <br>
                <form id="enrollStudent" method="post" action=<?php echo base_url('enrollment/enroll_student/submit/'); ?>>
                  <input type="hidden" id="s_i_lrn" name="students_info_lrn">
                  <input type="hidden" id="noteHidden" name="note">
                  <input type="hidden" id="section_id" name="section_id">
                  <input type="hidden" id="nsoHidden" name="requirements[]">
                  <input type="hidden" id="f137Hidden" name="requirements[]">
                  <input type="hidden" id="f138Hidden" name="requirements[]">
                  <button type="button" id="enroll" class="btn bg-green" style="width: 100%; height: 50px;">Enroll to <span class="chosenStrand"></span></button>
                  </form>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.modal-body -->
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      




      <!-- ######################## HIDDEN INPUTS ########################### -->
        <input type="hidden" id="strand" name="strand">
        <input type="hidden" id="year" name="year">

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
<!-- DataTable Select -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.select.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script>

  

  $('#grade11').on('click',function()
  {
    $('#yearLevel').remove();
    $('#choose').remove();
    $('#grade').html('Grade 11');
    $('#grade').css('background-color','#603838');
    $('#req').css('display', 'block');
    $('#year').val('1');
  });

  $('#grade12').on('click',function()
  {
    $('#yearLevel').remove();
    $('#choose').remove();
    $('#grade').html('Grade 12');
    $('#grade').css('background-color','#82595D');
    $('#req').css('display', 'block');
    $('#year').val('2');
  });

  //Red color scheme for iCheck
  $('input[type="checkbox"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red'
  })

  $('#nso').on('ifChecked', function (event) {
    $('#nsoHidden').val('NSO Birth Certificate');
  });

  $('#f137').on('ifChecked', function (event) {
    $('#f137Hidden').val('Form 137');
  });

  $('#f138').on('ifChecked', function (event) {
    $('#f138Hidden').val('form 138');
  });


  $('.checkAll11').on('ifChecked', function (event) {
      $('.check11').iCheck('check');
      $('.subject11').prop('disabled', false);
      $('#grades11').removeClass('text-muted');
      triggeredByChild = false;
  });

  $('.checkAll11').on('ifUnchecked', function (event) {
      if (!triggeredByChild) {
          $('.check11').iCheck('uncheck');
      }
      $('.subject11').prop('disabled', true);
      $('#grades11').addClass('text-muted');
      $('#aStrands').css('display', 'none');
      triggeredByChild = false;
  });

  $('.check11').on('ifUnchecked', function (event) {
      triggeredByChild = true;
      $('.checkAll11').iCheck('uncheck');
  });

  $('.check11').on('ifChecked', function(event){
      if ($('.check11').filter(':checked').length == $('.check11').length) {
        $('.checkAll11').iCheck('check');

      }
  });

  

  $("#ave11").click(function(){
    $('#aStrands').css('display', 'block');
    var input1 = parseFloat(parseFloat($('#math').val()).toFixed(2));
    console.log(input1);
    var input2 = parseFloat(parseFloat($('#eng').val()).toFixed(2));
    var input3 = parseFloat(parseFloat($('#sci').val()).toFixed(2));
    var input4 = parseFloat(parseFloat($('#ap').val()).toFixed(2));
    var input5 = parseFloat(parseFloat($('#mapeh').val()).toFixed(2));
    var input6 = parseFloat(parseFloat($('#values').val()).toFixed(2));
    var input7 = parseFloat(parseFloat($('#fil').val()).toFixed(2));
    var input8 = parseFloat(parseFloat($('#tle').val()).toFixed(2));

    if (isNaN(input1) || isNaN(input2) || isNaN(input3) || isNaN(input4) || isNaN(input5) || isNaN(input6) || isNaN(input7) || isNaN(input8)) {
      $('#error').text('Inputs must be numbers');

    } else if (input1 > 100 || input2 > 100 || input3 > 100 || input4 > 100 || input5 > 100 || input6 > 100 || input7 > 100 || input8 > 100) 
    {
      $('#error').text('Inputs should be less than 100');

    }else {
      $('#error').remove();

        ave = (input1 + input2 + input3 + input4 + input5 + input6 + input7 +input8) / 8;
        console.log(input1+' '+ input2+' '+input3+input4+' '+input5+input6+' '+input7+input8+' '+ave);
        $('#avera').text(ave);

        if (ave > 85){
          $('.stembox').hide();
          $('.abmbox').hide();
          $('.humssbox').hide();

          $('#humssdiv').append('<div class="small-box bg-red-active color-palette humssbox" data-toggle="modal" data-target="#strand_selection" style="curor: pointer;"><div class="inner"><h3>HUMSS</h3><p>Humanities and<br> Social Sciences</p></div><div class="icon"><i class="fa fa-users"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');

          $('#abmdiv').append('<div class="small-box bg-green-active color-palette abmbox" data-toggle="modal" data-target="#strand_selection" style="cursor: pointer;"><div class="inner"><h3>ABM</h3><p>Accountancy and Business<br> Management</p></div><div class="icon"><i class="fa fa-briefcase"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');

          $('#stemdiv').append('<div class="small-box bg-purple-active color-palette stembox" data-toggle="modal" data-target="#strand_selection" style="cursor: pointer;"><div class="inner"><h3>STEM</h3><p>Science, Technology,<br> Engineering, and Mathematics</p></div><div class="icon"><i class="fa fa-flask"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');
        } else{
          $('.stembox').hide();
          $('.abmbox').hide();
          $('.humssbox').hide();

          $('#humssdiv').append('<div class="small-box bg-gray color-palette humssbox" data-toggle="modal" data-target="#humss" style="curor: pointer;"><div class="inner"><h3>HUMSS</h3><p>Humanities and<br> Social Sciences</p></div><div class="icon"><i class="fa fa-users"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');

          $('#abmdiv').append('<div class="small-box bg-gray color-palette abmbox" data-toggle="modal" data-target="#abm" style="cursor: pointer;"><div class="inner"><h3>ABM</h3><p>Accountancy and Business<br> Management</p></div><div class="icon"><i class="fa fa-briefcase"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');

          $('#stemdiv').append('<div class="small-box bg-gray color-palette stembox" data-toggle="modal" data-target="#stem" style="cursor: pointer;"><div class="inner"><h3>STEM</h3><p>Science, Technology,<br> Engineering, and Mathematics</p></div><div class="icon"><i class="fa fa-flask"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div>');
        }
      }
  });


  $('#tvlasdiv').click(function()
  {
    $('.modal-header').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('.modal-header').addClass('bg-yellow-active');
    $('.chosenStrand').html('TVL-AS');
    $('#enroll').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('#enroll').addClass('bg-yellow-active');
    $('#strand').val('tvl-as');
    ajax();
  });

  $('#gasdiv').click(function()
  {
    $('.modal-header').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('.modal-header').addClass('bg-maroon');
    $('.chosenStrand').html('GAS');
    $('#enroll').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('#enroll').addClass('bg-maroon');
    $('#strand').val('gas');
    ajax();
  });

  $('#tvlhediv').on('click',function()
  {
    $('.modal-header').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('.modal-header').addClass('bg-blue');
    $('.chosenStrand').html('TVL-HE');
    $('#enroll').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('#enroll').addClass('bg-blue');
    $('#strand').val('tvl-he');
    ajax();
  });

  $('#humssdiv').on('click',function()
  {
    $('.modal-header').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('.modal-header').addClass('bg-red-active');
    $('.chosenStrand').html('HUMSS');
    $('#enroll').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('#enroll').addClass('bg-red-active');
    $('#strand').val('humss');
    ajax();
  });

  $('#abmdiv').on('click',function()
  {
    $('.modal-header').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('.modal-header').addClass('bg-green-active');
    $('.chosenStrand').html('STEM');
    $('#enroll').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('#enroll').addClass('bg-green-active');
    $('#strand').val('abm');
    ajax();
  });

  $('#stemdiv').on('click',function()
  {
    $('.modal-header').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('.modal-header').addClass('bg-purple-active');
    $('.chosenStrand').html('STEM');
    $('#enroll').removeClass('bg-green bg-maroon bg-gray bg-blue bg-yellow-active bg-purple-active bg-red-active');
    $('#enroll').addClass('bg-purple-active');
    $('#strand').val('stem');
    ajax();
  });

 function ajax(){
  var ajaxUrl = "<?php echo base_url("enrollment/enroll_student/getSectionTable"); ?>"
  var strand = $('#strand').val();
  var year = $('#year').val(); 
  //alert('stand : '+strand+' year : '+year);
  $.ajax({
            url: ajaxUrl,
            type: 'post',
            dataType: 'json', 
            data: {'strand': strand, 'year_level_id': year}, 
            success: function(result){

            //alert(result);

            $('#sectionsTable').DataTable().destroy();

            var table = $('#sectionsTable').DataTable({
              "data": result,
              columnDefs: [ {
                orderable: false,
                className: 'select-checkbox',
                targets:   0
              } ],
              select: {
                style:    'os',
                selector: 'td:first-child'
              },
              order: [[ 1, 'asc' ]],
              "searchable": false,
              "bPaginate": false,
              "bLengthChange": false,
              "bFilter": false,
              "bInfo": false,
              "bAutoWidth": false
            });

            //$('#enroll').val(table.rows( { selected: true } ).data());

            $('#enroll').on('click',function()
            {
              var selected = table.rows( { selected: true } ).data();

              selected.destroy();

              var id = selected[0][1];
              var silrn = "<?php echo $lrn ?>";

              $('#s_i_lrn').val(silrn);
              $('#section_id').val(id);
              $('#noteHidden').val($('#note').val());

              console.log('registered_student_lrn: '+ $('#r_s_lrn').val() + ' section_id: ' +$('#section_id').val() + ' note: ' + $('#noteHidden').val());

              $('#enrollStudent').submit();
            });   
              
              }
  });   
 }
 


  
</script>


</body>
</html>
