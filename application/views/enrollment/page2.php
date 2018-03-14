<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Enroll Student</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/all.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2-4.0/dist/css/select2.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- DataTable Select -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/select.dataTables.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/googlefont.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?=$template?>

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
      <div class="col-md-5">
          <div class="box" style="width: 100%;">
            <div class="box-header with-border">
            <button class="btn btn-flat btn-primary btn-lg" id="grade" style="height: 60px; width: 100%;"></button>
          </div>
          <div class="box-body">
            <label>Requirements:</label>
                <!-- checkbox -->
                <div class="form-group" style="padding: 3px 10px;">
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
                <div class="form-group" style="padding: 0 10px;">
                  <textarea id="note" style="width: 100%;"></textarea>
                </div>
                <!-- /.form-group -->

              </div>


              <div class="box-footer with-border text-muted" id="grades11">
                <label>Grades:</label>
                <div class="inner" style="padding: 10px 10px;">

                  <div class="row">

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>MATH</label>
                        <select class="form-control select2 has-error subject11" id="math" name="subj[]" style="margin-bottom: -10px;" disabled>
                            <option></option>
                            <?php for ($i=65; $i < 100; $i++) { ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                            <?php } ?>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>ENG</label>
                        <select class="form-control select2 has-error subject11" id="eng" name="subj[]" style="margin-bottom: -10px;" disabled>
                            <option></option>
                            <?php for ($i=65; $i < 100; $i++) { ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                            <?php } ?>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>SCI</label>
                        <select class="form-control select2 has-error subject11" id="sci" name="subj[]" style="margin-bottom: -10px;" disabled>
                            <option></option>
                            <?php for ($i=65; $i < 100; $i++) { ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                            <?php } ?>
                          </select>
                      </div>
                    </div>

                  </div>
                  <!-- /.row -->


                  <div class="row">

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>AP</label>
                        <select class="form-control select2 has-error subject11" id="ap" name="subj[]" style="margin-bottom: -10px;" disabled>
                            <option></option>
                            <?php for ($i=65; $i < 100; $i++) { ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                            <?php } ?>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>MAPEH</label>
                        <select class="form-control select2 has-error subject11" id="mapeh" name="subj[]" style="margin-bottom: -10px;" disabled>
                            <option></option>
                            <?php for ($i=65; $i < 100; $i++) { ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                            <?php } ?>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>VALUES</label>
                        <select class="form-control select2 has-error subject11" id="values" name="subj[]" style="margin-bottom: -10px;" disabled>
                            <option></option>
                            <?php for ($i=65; $i < 100; $i++) { ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                            <?php } ?>
                          </select>
                      </div>
                    </div>

                  </div>
                  <!-- /.row -->

                  <div class="row">

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>FIL</label>
                        <select class="form-control select2 has-error subject11" id="fil" name="subj[]" style="margin-bottom: -10px;" disabled>
                            <option></option>
                            <?php for ($i=65; $i < 100; $i++) { ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                            <?php } ?>
                          </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>TLE</label>
                        <select class="form-control select2 has-error subject11" id="tle" name="subj[]" style="margin-bottom: -10px;" disabled>
                            <option></option>
                            <?php for ($i=65; $i < 100; $i++) { ?>
                            <option value="<?php echo $i ?>"> <?php echo $i ?> </option>
                            <?php } ?>
                          </select>
                      </div>
                    </div>

                  </div>
                  <!-- /.row -->
                  <button class="btn btn-primary btn-flat pull-right subject" id="ave11" style="margin-top: 15px; width: 20%;">Go</button>
                  <div id="error" class="text-danger"></div>
                  <div id="avera" class="text-info"></div>
                </div>
                <!-- /.inner -->
              </div>
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-7" id= "aStrands" style="display: none;">

          <div>
          <h4>Available Strands:</h4>
          </div>

          <div id="available"></div>

        </div>
        <!-- /.col-md-8 -->

      </div>
      <!-- /.row -->

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
                <tbody></tbody>
              </table>
              <br>
                <form id="enrollStudent" method="post" action=<?php echo base_url('enrollment/enroll_student/submit/'); ?>>
                  <input type="hidden" id="s_i_lrn" name="students_info_lrn">
                  <input type="hidden" id="noteHidden" name="note">
                  <input type="hidden" id="section_id" name="section_id">
                  <input type="hidden" id="strand" name="strand">
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

      <input type="hidden" name="year_level_id" id="year">
      <input type="hidden" name="strand_code" id="strand">


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
<!-- DataTable Select -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.select.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2-4.0/dist/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url(); ?>plugins/iCheck/icheck.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script>

  $('.select2').select2();

  var selected;
  var s_code;

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
    $('.subject11').prop('disabled', false);
    $('#grades11').removeClass('text-muted'); //pampatanggal ng mute
  });
  $('#f138').on('ifUnchecked', function (event) {
    $('#f138Hidden').val('form 138');
    $('.subject11').prop('disabled', true);
  });


  $('.checkAll11').on('ifChecked', function (event) {
      $('.check11').iCheck('check'); //checks lahat if checkall is checked
      $('#grades11').removeClass('text-muted'); //pampatanggal ng mute
      triggeredByChild = false;
  });

  $('.checkAll11').on('ifUnchecked', function (event) {
      if (!triggeredByChild) {
          $('.check11').iCheck('uncheck'); //unchecks other checkboxes pag naka uncheck yung checkall
      }
      $('#grades11').addClass('text-muted'); //mutes text
      triggeredByChild = false;
  });

  $('.check11').on('ifUnchecked', function (event) {
      triggeredByChild = true;
      $('.checkAll11').iCheck('uncheck');
  });


  //  $('.check11').on('ifChanged', function (event) {
  //     if ($('.check11').filter(':checked').length > 0) {
  //       $('.subject11').prop('disabled', false);

  //     } else {
  //       $('.subject11').prop('disabled', true);
  //     }
  // });

  $('.check11').on('ifChecked', function(event){
      if ($('.check11').filter(':checked').length == $('.check11').length) {
        $('.checkAll11').iCheck('check');

      }
  });

  

  $("#ave11").click(function(){
    // $('#avera').text('');
    var input1 = parseFloat($('#math').val());
    console.log(input1);
    var input2 = parseFloat($('#eng').val());
    var input3 = parseFloat($('#sci').val());
    var input4 = parseFloat($('#ap').val());
    var input5 = parseFloat($('#mapeh').val());
    var input6 = parseFloat($('#values').val());
    var input7 = parseFloat($('#fil').val());
    var input8 = parseFloat($('#tle').val());

    // if(!input1 || !input2 || !input3 || !input4 || !input5 || !input6 || !input7 || !input8){
    //   $('#error').text('Input blank spaces');
    // }
    // else if (isNaN(input1) || isNaN(input2) || isNaN(input3) || isNaN(input4) || isNaN(input5) || isNaN(input6) || isNaN(input7) || isNaN(input8)) {
    //   $('#error').text('Inputs must be numbers');
    // } 
    // else if (input1 > 100 || input2 > 100 || input3 > 100 || input4 > 100 || input5 > 100 || input6 > 100 || input7 > 100 || input8 > 100) 
    // {
    //   $('#error').text('Inputs should be less than 100');
    // }
    // else if (input1<=64 || input2<=64 || input3<=64 || input4<=64 || input5<=64 || input6<=64 || input7<=64 || input8<=64) 
    // {
    //   $('#error').text('Inputs should not be less than 65');
    // }
    // else {
      $('#aStrands').css('display', 'block');
      $('#error').text('');

        ave = (input1 + input2 + input3 + input4 + input5 + input6 + input7 +input8) / 8;
        $('#avera').text('General Average : ' + ave);

          // alert("ulol pakyu");

          var getStrandsUrl = "<?php echo base_url("enrollment/enroll_student/getStrands"); ?>"

          $.ajax({
            url: getStrandsUrl,
            type: 'post',
            dataType: 'json', 
            data: {'grade_requirement': ave, 'status': 'active'}, 
            success: function(result){

            console.log(result);

            $('#available').empty();

            $.each(result, function( index, value ) {


              $('#available').append('<div class="col-md-6"><div class="small-box bg-olive" data-toggle="modal" data-target="#strand_selection" style="cursor: pointer;"><div class="inner text-white" style="color: white; min-height: 130px;"><h3 style="color: white;">'+value.strand_code+'</h3><p style="color: white;">'+value.strand_name+'</p></div><div class="icon"><i class="fa fa-cogs"></i></div><a href="#" class="small-box-footer">Enroll <i class="fa fa-arrow-circle-right"></i></a></div></div>');


             });

            $('.small-box').on('click', function(){
              s_code = $(this).find('h3').text();

              $('.chosenStrand').html(s_code);
              $('#strand').val(s_code);

              // console.log($('#year').val());
              // console.log($('#strand').val());

              var getSectionsUrl = "<?php echo base_url("enrollment/enroll_student/getSectionTable"); ?>"
              var year = $('#year').val();

              $.ajax({
                        url: getSectionsUrl,
                        type: 'post',
                        dataType: 'json', 
                        data: {'year_level_id': year, 'strand': s_code}, 
                        success: function(result){

                          console.log(result);

                          $('#sectionsTable').DataTable().destroy();

                          var table = $('#sectionsTable').DataTable({
                            data: result,
                            columnDefs: [{
                              orderable: false,
                              className: 'select-checkbox',
                              targets: 0
                            }],
                            select: {
                              style: 'os',
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

                          $('#enroll').on('click', function()
                          {
                            selected = $('#sectionsTable').find('.selected').find('td:nth-child(2)').text();
                            console.log(selected);

                            var silrn = <?php echo $lrn ?>;
                            var id = selected;

                            $('#s_i_lrn').val(silrn);
                            $('#noteHidden').val($('#note').val());
                            $('#section_id').val(id);
                            $('#strand').val(s_code);
                            

                            $('#enrollStudent').submit();

                          })



                        
                        
                          
                        }
              });
              //end ng ajax

              
            });
            //end ng small box
              
              }
              //end ng success
          });   
          //end ng ajax
      });
 
</script>


</body>
</html>
