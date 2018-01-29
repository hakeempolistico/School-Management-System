<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Assign Advisory Class</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/  /3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/googlefont.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<div hidden class="loading">Loading&#8230;</div>
  
  <?=$template?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- <div class="alert alert-success alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Day 1 of Enrollment is successful!</h4>
        Congratulations! Job well done! Please do the same on Day 2 of Enrollment!
     </div> -->
      
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advisory Class
        <!-- <small>Student Grades</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-user"></i> Advisory</a></li>
        <li class="active">Advisory Class</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">Select Criteria</h4>
              <!-- <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
              </div> -->
            </div>
            <div class="box-body">
              <div class="col-xs-12 col-lg-4">
                  <div class="form-group">
                    <label>School Year</label>
                      <select class="subject-input form-control select2" disabled="" style="width: 100%;">
                        <option>2017-2018</option>
                        <option>2018-2019</option>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-12 col-lg-4">
                  <div class="form-group">
                    <label>Section</label>
                      <select id="select-section" class="subject-input form-control select2" disabled="" style="width: 100%;">
                        <option value="1">STEM 11A</option>
                      </select>
                  </div> 
              </div>
              <div class="col-xs-12 col-lg-4">
                  <div class="form-group">
                    <label>View By</label>
                      <select id="select-section" class="subject-input form-control select2" style="width: 100%;">
                        <option></option>
                        <option>1st Semester</option>
                        <option>2nd Semester</option>
                        <option>School Year</option>
                      </select>
                  </div> 
              </div>
            </div>
          </div>
          <!-- /.box -->
          <div class="box box-primary">
            <!-- <div class="box-header">
              <h3 class="box-title"></h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
              </div>
            </div> -->
            <div class="box-body">          
              <table id = "studentList1" class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 20%">LRN</th>
                    <th>Full Name</th>
                    <th style="width: 10%">Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                  
                </tfoot>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/. col-md-12 -->

        <div class="modal fade" id="modal-view">  
          <div class="modal-dialog" style="width: 400px;">
            <div class="box box-primary">
              <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-search text-info"></i>

                <h3 class="box-title text-info">View Student</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
              <div class="box-body box-profile flat">
                <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('images/alt_picture.jpg');?>" alt="<?php echo base_url('images/alt_picture.jpg');?>">
                <center><h4 id="full-name">Adrielle Escaro</h4></center>
                
                <table class="table table-striped table-bordered">
                  <tr>
                    <td style="width: 50%">Admission Date</td>
                    <td id="admission-date">14-038-032</td>
                  </tr>
                  <tr>
                    <td>LRN</td>
                    <td id="lrn">123123123</td>
                  </tr>                
                  <tr>
                    <td>Sex</td>
                    <td id="sex">Female</td>                        
                  </tr>
                  <tr>
                    <td>Birthdate</td>
                    <td id="birthdate">june 24, 1998</td>
                    </tr>
                  <tr>
                    <td>Contact Number</td>
                    <td id="contact-no">9808123812</td>
                  </tr>
                  <tr>
                    <td>Guardian</td>
                    <td id="guardian">Nanay mo</td>
                  </tr>
                  <tr>
                    <td>Guardian's Contact</td>
                    <td id="guardian-contact">123123</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>

      <!-- modal-->
      <div class="modal" id="modal-grades">
        <div class="modal-dialog" style="width: 600px;">
              <div class="box box-primary">
                <div class="box-header with-border" style="cursor: move; margin: 0px;">
                <i class="fa fa-line-chart text-info"></i>

                <h3 class="box-title text-info">Grades</h3>
                <!-- tools box -->
                <div class="box-tools pull-right">
                  
                  <button type="button" class="btn btn-box-tool" data-dismiss="modal"><i class="fa fa-times text-danger"></i></button>
                </div>
                <!-- /. tools -->
              </div>
            <div class="box-body box-profile flat">
              <h4><b>Name: </b> Adrielle Escaro</h4>
              
              <table class="table table-striped table-bordered">
                      <thead>
                        <td style="width: 50%"><b>Subject</b></td>
                        <td><b>1st Quarter</b></td>
                        <td><b>2nd Quarter</b></td>
                        <td><b>Final Grade</b></td>
                      </thead>
                        <tr>
                          <td>PHYSICS</td>
                          <td>89<td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>ENGLISH</td>
                          <td>81<td>
                          <td></td>
                        </tr>            
                       <tr>
                          <td>CHEMISTRY</td>
                          <td>83<td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>P.E</td>
                          <td>84<td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>HISTORY</td>
                          <td>89<td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>FILIPINO</td>
                          <td>90<td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>BIOLOGY</td>
                          <td>95<td>
                          <td></td>
                        </tr>
                        <tfoot>
                          <td><b>Average</b></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tfoot>
                    </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          <!-- /.modal-dialog -->
      </div>

      </div>
      <!-- /.row -->
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
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>bower_components/Chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>

<script type="">
  $(function (){
    $('#studentList1').DataTable();

    section_id = $('select-section').val();
    var getAdvisoryClassUrl = '<?php echo base_url('advisory/advisory_class/getAdvisoryClass'); ?>';
    var getStudentInfoUrl = '<?php echo base_url('student_info/student_details/getStudentInfo'); ?>';
    var getGuardianInfoUrl = '<?php echo base_url('student_info/student_details/getGuardianInfo'); ?>';

      $.ajax({
        url: getAdvisoryClassUrl,
        type: 'post',
        dataType: 'json', 
        data: {'section_id' : section_id}, 
        success: function(result){  
          //console.log(result)
          if(result == ''){
            //console.log('NO RECORDS');
            $('#studentList1').find('tbody tr').remove();
            $('#studentList1').find('tbody').append(
          '<tr> <td colspan="5"><center> NO SCHEDULE SET <center></td> </tr>'
          );
          return;
          }
          else{
            $('#studentList1').find('tbody tr').remove();
            $.each(result, function( index, value ) {
              $('#studentList1').find('tbody').append(
                '<tr> <td>'+value[0]+'</td> <td>'+value[1]+'</td> <td>'+value[2]+'</td> </tr>'
                )
            });

            
      
            $('.btn-view').on('click', function(){
              lrn = $(this).parents('tr').find('td:first').html();

              $.ajax({
                url: getStudentInfoUrl,
                type: 'post',
                dataType: 'json', 
                data: {'lrn' : lrn}, 
                success: function(result){  
                  console.log(result);
                  $('#admission-date').html(result[0].date_registered);
                  $('#full-name').html(result[0].first_name + ' ' + result[0].middle_name + ' ' + result[0].last_name);
                  $('#lrn').html(lrn);
                  $('#sex').html(result[0].sex);
                  $('#birthdate').html(result[0].birth_date);
                  $('#contact-no').html(result[0].contact_number);
                }
              });

              $.ajax({
                url: getGuardianInfoUrl,
                type: 'post',
                dataType: 'json', 
                data: {'students_info_lrn' : lrn}, 
                success: function(result){  
                  console.log(result);
                  $('#guardian').html(result[0].name);
                  $('#guardian-contact').html(result[0].contact);

                }
              });
            }) 
          }
        }
      });

  })
</script>
</body>
</html>
