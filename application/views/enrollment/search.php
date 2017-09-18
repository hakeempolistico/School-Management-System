<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Search for Online Applications</title>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('/') ?>" class="logo">
      {logo}
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url(); ?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="user-image" alt="<?php echo base_url('images/alt_picture.jpg');?>">
              <span class="hidden-xs"><?php echo $this->session->first_name." ".$this->session->last_name ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="img-circle" alt="<?php echo base_url('images/alt_picture.jpg');?>">

                <p>
                 <?php echo $this->session->first_name." ".$this->session->last_name." - ".$this->session->position ?>
                  <small>Member since <?php echo $this->session->date_created ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="img-circle" alt="<?php echo base_url('images/alt_picture.jpg');?>">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->first_name." ".$this->session->last_name ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo site_url('/'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Enrollment</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('enrollment/dashboard'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('enrollment/view_data'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  View Data
              </a>
            </li>
            <li class="active">
              <a href="<?php echo site_url('enrollment/enroll_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Enroll Student
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('enrollment/manage_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Manage Student
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('enrollment/manage_schedule'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Manage Schedule
              </a>
            </li>
          </ul>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-mortar-board"></i>
            <span>Academics</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Schedule
              </a>
            </li>          
            <li>
              <a href="<?php echo site_url('academics/subjects'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Subjects
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Assign Subjects
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('academics/teachers'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Teachers
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Year Level
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Sections
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Strands
              </a>
            </li>
          </ul>
          
        </li>
      
        
        <li class="header">LABELS</li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="alert bg-navy alert-dismissible flat">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-bullhorn"></i> Reminder!</h4>
        Make sure to receive the necessary requirements for enrollment, otherwise the student won't be enrolled!
     </div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Search for Online Applications
        <small>(IDK what to put here)</small>
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
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>LRN</th>
                  <th>Name</th>
                  <th>Grade</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr id = "record">
                  <td>14-038-014</td>
                  <td>Hakeem Polistico</td>
                  <td>12</td>
                  <td>123</td>
                </tr>
                </tbody>
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
<!--Modal-->
<div class="modal fade" id="modal-default">

          <div class="modal-dialog" style="align-self: center; max-width: 500px">
          <!-- Profile Image -->
          <div class="box box-primary" >
            <div class="box-body box-profile">
              <form method="POST" action="/sms/enrollment/enroll_student/move/">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 id="name" class="profile-username text-center" ></h3>

              <p class="text-muted text-center" id="position"></p>
    <div class="row">
        <div class="col-md-6">
              <ul class="list-group list-group-unbordered" style= "text-align: center">
                <li class="list-group-item">
                  <b>LRN</b><br> <a id="lrn"></a>
                </li>
                <li class="list-group-item">
                  <b>Contact No.</b><br> <a id="contact"></a>
                </li>
                <li class="list-group-item">
                  <b>Birthdate</b><br> <a id="birth_date" ></a>
                </li>
                <li class="list-group-item">
                  <b>Birthplace</b> <br><a id="birth_place"></a>
                </li>
                <li class="list-group-item">
                  <b>Age</b><br> <a id="age"></a>
                </li>
                <li class="list-group-item">
                  <b>Mother Tongue</b><br> <a id="mother_tongue"></a>
                </li>
                <li class="list-group-item">
                  <b>Religion</b> <br><a id="religion">c</a>
                </li>
                <li class="list-group-item">
                  <b>Address</b> <br><a id="street"></a><br><a id="barangay"></a><a id="city"></a><br><a id="province"></a><br>
                </li>
        </ul>
      </div>
      <div class="col-md-6">
      <ul class="list-group list-group-unbordered" style= "text-align: center">
                <li class="list-group-item">
                  <b>Sex</b> <br><a id="sex"></a>
                </li>
        <li class="list-group-item">
                  <b>Father's Name</b> <br><a id="father_name">asd</a>
                </li>
        <li class="list-group-item">
                  <b>Father's Contact No</b> <br><a id="father_contact">asd</a>
                </li>
        <li class="list-group-item">
                  <b>Mother's Maiden Name</b> <br><a id="mother_name">asd</a>
                </li>
        <li class="list-group-item">
                  <b>Mother's Contact No</b> <br><a id="mother_contact">asd</a>
                </li>
        <li class="list-group-item">
                  <b>Guardian's Name</b><br> <a id="guardian">asd</a>
                </li>
        <li class="list-group-item">
                  <b>Guardian's Relationship</b> <br><a id="relationship">asd</a>
                </li>
        <li class="list-group-item">
                  <b>Guardian's Contact No</b> <br><a id="guardian_contact">asd</a>
                </li>
        </ul>
      </div>
      </div>
        <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <strong><i class="fa fa-book margin-r-5"></i> Note</strong>
            <textarea class="form-control" name="note" value="<?php echo set_value('note'); ?>"></textarea> 
        </li>
        
        <li class="list-group-item requirements-section">
          <strong><i class="fa fa-book margin-r-5"></i>Requirements</strong>
  
            <select class="form-control select2" multiple="multiple" id="inputREQUIREMENTS" name="requirement[]" value="<?php echo set_select('requirement'); ?>" data-placeholder="Select Requirement" style="width: 100%;">
              <option id="f137">Form 137</option>
              <option id="f138">Form 138</option>
              <option id="nso">NSO Birth Certificate</option>
            </select>

        </li>
        <input type="hidden" name="lrn" value="<?php echo set_value('lrn'); ?>" id="learner">
        <input type="hidden" name="grade" value="<?php echo set_value('grade'); ?>" id="grade">
        <input type="hidden" name="first_name" value="<?php echo set_value('first_name'); ?>" id="fname">
        <input type="hidden" name="middle_name" value="<?php echo set_value('middle_name'); ?>" id="mname">
        <input type="hidden" name="last_name" value="<?php echo set_value('last_name'); ?>" id="lname">
        <input type="hidden" name="sex" value="<?php echo set_value('sex'); ?>" id="gender">
        <input type="hidden" name="contact" value="<?php echo set_value('contact'); ?>" id="contactno">
        <input type="hidden" name="birth_date" value="<?php echo set_value('birth_date'); ?>" id="birthdate">
        <input type="hidden" name="birth_place" value="<?php echo set_value('birth_place'); ?>" id="birthplace">
        <input type="hidden" name="age" value="<?php echo set_value('age'); ?>" id="edad">
        <input type="hidden" name="mother_tongue" value="<?php echo set_value('mother_tongue'); ?>" id="mothertongue">
        <input type="hidden" name="religion" value="<?php echo set_value('religion'); ?>" id="reli">
        <input type="hidden" name="street" value="<?php echo set_value('street'); ?>" id="house">
        <input type="hidden" name="barangay" value="<?php echo set_value('barangay'); ?>" id="baranggay">
        <input type="hidden" name="city" value="<?php echo set_value('city'); ?>" id="cityy">
        <input type="hidden" name="province" value="<?php echo set_value('province'); ?>" id="prov">
        <input type="hidden" name="father_name" value="<?php echo set_value('father_name'); ?>" id="fathername">
        <input type="hidden" name="mother_name" value="<?php echo set_value('mother_name'); ?>" id="mothername">
        <input type="hidden" name="father_contact" value="<?php echo set_value('father_contact'); ?>" id="fathercontact">
        <input type="hidden" name="mother_contact" value="<?php echo set_value('mother_contact'); ?>" id="mothercontact">
        <input type="hidden" name="guardian" value="<?php echo set_value('guardian'); ?>" id="guard">
        <input type="hidden" name="relationship" value="<?php echo set_value('relationship'); ?>" id="relation">
        <input type="hidden" name="guardian_contact" value="<?php echo set_value('guardian_contact'); ?>" id="guardcontact">
        <input type="hidden" name="requirements" value="<?php echo set_value('requirements'); ?>" id="requirements">
        

              </ul>
              <a href="#" class="btn btn-primary btn-block pull-left" data-dismiss="modal" style="max-width: 100px"><b>Close</b></a>
              <button type="submit" class="btn btn-primary btn-block pull-right" id="enrollStudent" style="max-width: 150px"><b>Enroll Student</b></button>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


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
<script type="text/javascript">
  $('table').DataTable();

  var arrofobject = <?php echo $onlineRecords ?>;

  $('#record').hide();

  $.each(arrofobject, function(index, val) {
    $('tbody').append('<tr id="record"><td>'+val.lrn+'</td><td>'+val.first_name+' '+val.middle_name+' '+val.last_name+'</td><td>'+val.grade+'</td> <td><button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-block btn-info btn-flat btn-xs buttonView" style="max-width: 100px; display:block;margin: auto;">View</button></td> </div> </tr>');
  });

  $("#inputREQUIREMENTS").on("change", function (e) {
    var a = "Form 137,Form 138,NSO Birth Certificate"

    //alert($('.select2').val());

    if ($(this).val() == a) {
      $("#requirements").val('COMPLETE');
    } else {
      $("#requirements").val('INCOMPLETE');
    }
  });

  $(".buttonView").click(function(){
          var lrn = $(this).closest('tr').find('td:eq(0)').html(); 
          $.ajax({
            url: "<?php echo base_url("enrollment/enroll_student/ajax"); ?>",
            type: 'post',
            dataType: 'json', 
            data: {'lrn' : lrn, 'table': 'online_applicants', 'set': 'lrn' }, 
            success: function(result){
              //alert(result);
              $.each(result, function(index, val) {
                $('#name').html(val.first_name +" "+ val.middle_name + " " + val.last_name);
                $('#lrn').html(val.lrn);
                $('#contact').html(val.contact);
                $('#birth_date').html(val.birth_date);
                $('#birth_place').html(val.birth_place);
                $('#age').html(val.age);
                $('#mother_tongue').html(val.mother_tongue);
                $('#religion').html(val.religion);
                $('#street').html(val.street);
                $('#barangay').html(val.barangay+", ");
                $('#city').html(val.city);
                $('#province').html(val.province);
                $('#sex').html(val.sex);
                $('#father_name').html(val.father_name);
                $('#father_contact').html(val.father_contact);
                $('#mother_name').html(val.mother_name);
                $('#mother_contact').html(val.mother_contact);
                $('#guardian').html(val.guardian);
                $('#relationship').html(val.relationship);
                $('#guardian_contact').html(val.guardian_contact);  
                $('#position').html('Grade 12 Student');   
                $('.requirements-section').show();

                $('#learner').attr('value', val.lrn);
                $('#grade').attr('value', val.grade);
                $('#fname').attr('value', val.first_name);
                $('#mname').attr('value', val.middle_name);
                $('#lname').attr('value', val.last_name);
                $('#gender').attr('value', val.sex);
                $('#contactno').attr('value', val.contact);
                $('#birthdate').attr('value', val.birth_date);
                $('#birthplace').attr('value', val.birth_place);
                $('#edad').attr('value', val.age);
                $('#mothertongue').attr('value', val.mother_tongue);
                $('#reli').attr('value', val.religion);
                $('#house').attr('value', val.street);
                $('#baranggay').attr('value', val.barangay);
                $('#cityy').attr('value', val.city);
                $('#prov').attr('value', val.province);
                $('#fathername').attr('value', val.father_name);
                $('#mothername').attr('value', val.mother_name);
                $('#fathercontact').attr('value', val.father_contact);
                $('#mothercontact').attr('value', val.mother_contact);
                $('#guard').attr('value', val.guardian);
                $('#relation').attr('value', val.relationship);
                $('#guardcontact').attr('value', val.guardian_contact);
                $('#noto').attr('value', val.note);
              })
            }
          });
        });

</script>
<script type="text/javascript">
  //Initialize Select2 Elements
    $('.select2').select2()
</script>

</body>
</html>
