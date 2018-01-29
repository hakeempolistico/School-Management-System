<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | Dashboard</title>
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
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Loading -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/googlefont.css">
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color: white;">
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

      <!-- <div class="row">
        <div class="col-md-12 col-xs-12" style=""> -->
          <!-- <img src="<?php echo base_url('images/bugbusters2.png')?>" alt="New York" style = "width: 100%" > -->
         <!--  <div id="myCarousel" class="carousel slide" data-ride="carousel">
            
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

           
            <div class="carousel-inner">
              <div class="active item">
                <img src="<?php echo base_url('images/bugbusters2.png')?>" alt="New York">
              </div>
 -->
              <!-- <div class="item">
                <img src="<?php echo base_url('images/in2.png')?>" alt="New York">
              </div>

              <div class="item">
                <img src="<?php echo base_url('images/in3.png')?>" alt="New York">
              </div>

              <div class="item">
                <img src="<?php echo base_url('images/in4.png')?>" alt="New York">
              </div>

              <div class="item">
                <img src="<?php echo base_url('images/in5.png')?>" alt="New York">
              </div> -->
            <!-- </div>

            
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div> -->

        <!-- </div>
      </div> -->
    <section class="content-header">
      <h1>
        Developers
        <!-- <small>Meet the team</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Developers</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
        <div class="box box-solid">
          <div class="box-body">
            <h1 class="page-header">The Team</h1>
            <!--  -->
              <div class="row" style="margin-top: 20px;">
                <div class="col-md-4 col-xs-12">
                  <!-- Widget: user widget style 1 -->
                  <div class="box box-widget widget-user-2 bg-red">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header">
                      <div class="widget-user-image">
                        <img class="img-circle" src="<?php echo base_url('images/hakeem.jpg');?>" alt="User Avatar">
                      </div>
                      <!-- /.widget-user-image -->
                      <h3 class="widget-user-username">Hakeem Polistico</h3>
                      <h5 class="widget-user-desc">Lead Developer
                      </h5>
                    </div>
                    <div class="box-footer">
                      <ul class="nav nav-stacked">
                        <li><a href="#" style="cursor: default;"><i class="fa fa-phone"></i><span class="pull-right text-red">+63 956 892 1122</span></a></li>
                        <li><a href="#" style="cursor: default;"><i class="fa fa-envelope"></i><span class="pull-right text-red">hakeempolistico@gmail.com</span></a></li>
                        <li>
                          <a href="#" style="cursor: default;"><i class="fa fa-heart"></i>
                            <span class="pull-right text-red">
                              <i class="fa fa-twitter" style="margin-right: 10px; cursor: pointer;"></i>
                              <i class="fa fa-facebook" style="margin-right: 10px; cursor: pointer;"></i>
                              <i class="fa fa-instagram" style="margin-right: 10px; cursor: pointer;"></i>
                              <i class="fa fa-github" style="margin-right: 10px; cursor: pointer;"></i>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.widget-user -->
                </div>
                
                <div class="col-md-4 col-xs-12">
                  <!-- Widget: user widget style 1 -->
                  <div class="box box-widget widget-user-2 bg-purple">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header">
                      <div class="widget-user-image">
                        <img class="img-circle" src="<?php echo base_url('images/adrii.jpg');?>" alt="User Avatar">
                      </div>
                      <!-- /.widget-user-image -->
                      <h3 class="widget-user-username">Adrielle Escaro</h3>
                      <h5 class="widget-user-desc">Developer</h5>
                    </div>
                    <div class="box-footer">
                      <ul class="nav nav-stacked">
                        <li><a href="#" style="cursor: default;"><i class="fa fa-phone"></i><span class="pull-right text-purple">+63 912 114 5894</span></a></li>
                        <li><a href="#" style="cursor: default;"><i class="fa fa-envelope"></i> <span class="pull-right text-purple">adrielleescaro@gmail.com</span></a></li>
                        <li>
                          <a href="#" style="cursor: default;"> <i class="fa fa-heart"></i>
                            <span class="pull-right text-purple">
                              <i class="fa fa-twitter" style="margin-right: 10px; cursor: pointer;"></i>
                              <i class="fa fa-facebook" style="margin-right: 10px; cursor: pointer;"></i>
                              <i class="fa fa-instagram" style="margin-right: 10px; cursor: pointer;"></i>
                              <i class="fa fa-github" style="margin-right: 10px; cursor: pointer;"></i>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.widget-user -->
                </div>

                <div class="col-md-4 col-xs-12">
                  <!-- Widget: user widget style 1 -->
                  <div class="box box-widget widget-user-2 bg-teal">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header">
                      <div class="widget-user-image">
                        <img class="img-circle" src="<?php echo base_url('images/jassy.jpg');?>" alt="User Avatar">
                      </div>
                      <!-- /.widget-user-image -->
                      <h3 class="widget-user-username">Jasver Salva</h3>
                      <h5 class="widget-user-desc">Developer</h5>
                    </div>
                    <div class="box-footer">
                      <ul class="nav nav-stacked">
                        <li><a href="#" style="cursor: default;"><i class="fa fa-phone"></i> <span class="pull-right text-teal">+63 916 123 4567</span></a></li>
                        <li><a href="#" style="cursor: default;"><i class="fa fa-envelope"></i> <span class="pull-right text-teal">jassysalva@gmail.com</span></a></li>
                        <li>
                          <a href="#" style="cursor: default;"><i class="fa fa-heart"></i>
                            <span class="pull-right text-teal">
                              <i class="fa fa-twitter" style="margin-right: 10px; cursor: pointer;"></i>
                              <i class="fa fa-facebook" style="margin-right: 10px; cursor: pointer;"></i>
                              <i class="fa fa-instagram" style="margin-right: 10px; cursor: pointer;"></i>
                              <i class="fa fa-github" style="margin-right: 10px; cursor: pointer;"></i>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.widget-user -->
                </div>

              </div><br>  
              <div class="row">
                <div class="col-md-12">
                  <center>
                  <p class="lead">The Araullo School Management System is developed and maintained by a team of three<br> <b>Bachelor of Science in Information System </b>students from <b>TUP Manila</b>.</p><hr>
                  <img src="<?php echo base_url('images/bugbusters2.png')?>" alt="New York" style = "width: 50%" >
                  </center>
                  <hr>

                  <div class="box box-danger">
                    <div class="box-body">
                      <div class="col-md-4">
                      <center>
                        <img class="img-circle" src="<?php echo base_url('images/hakeem.jpg');?>" alt="User Avatar">
                      </center><br>
                      <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                          <i class="fa fa-fw fa-birthday-cake"></i> <span class="pull-right text-red">July 21, 1994</span>
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-fw fa-home"></i> <span class="pull-right text-red">Bacoor, Cavite</span>
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-fw fa-pencil"></i>
                          <span class="pull-right">
                          <span class="label label-danger">UI Design</span>
                          <span class="label label-success">Coding</span>
                          <span class="label label-info">Javascript</span>
                          <span class="label label-warning">PHP</span>
                          </span>
                        </li>
                      </ul>
                      </div>
                      <div class="col-md-8">
                        <p class="lead" style="text-indent: 50px; line-height: 1.6;"><strong>Hakeem</strong>, a 23 year old graduating student, aspires to be a successful web developer in the future. A <i>strong-willed</i> and <i>determined</i> person with a passion in web-development, he is always up for a challenge.</p>
                        <p class="lead"> He is proficient in PHP, CodeIgniter Framework, and uses Git.</p>
                      </div>
                    </div>
                  </div>
                  <div class="box" style="border-top-color: #605ca8;">
                    <div class="box-body">
                      <div class="col-md-4"><center>
                        <img class="img-circle" src="<?php echo base_url('images/adrii2.jpg');?>" alt="User Avatar">
                      </center><br>
                      <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                          <i class="fa fa-fw fa-birthday-cake"></i> <span class="pull-right text-purple">July 23, 1998</span>
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-fw fa-home"></i> <span class="pull-right text-purple">Imus, Cavite</span>
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-fw fa-pencil"></i>
                          <span class="pull-right">
                          <span class="label label-danger">UI Design</span>
                          <span class="label label-success">Coding</span>
                          <span class="label label-info">Javascript</span>
                          <span class="label label-warning">PHP</span>
                          </span>
                        </li>
                      </ul>
                      </div>
                      <div class="col-md-8">
                        <p class="lead" style="text-indent: 50px; line-height: 1.6;"><strong>Adrii</strong>, a 19 year old graduating student, aspires to have a successful career in the Web Development industry. She's a very helpful person to others. She also has a passion in gaming, particularly in LOL. She can code and also play at the same time, a proof that she has good multitasking skills! </p>
                        <p class="lead"> She is proficient in PHP, CodeIgniter Framework, and uses Git.</p>
                      </div>
                    </div>
                  </div>
                  <div class="box" style="border-top-color: #39cccc;">
                    <div class="box-body">
                      <div class="col-md-4"><center>
                        <img class="img-circle" src="<?php echo base_url('images/jassy2.jpg');?>" alt="User Avatar">
                      </center><br>
                      <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                          <i class="fa fa-fw fa-birthday-cake"></i> <span class="pull-right text-teal">February 11, 1999</span>
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-fw fa-home"></i> <span class="pull-right text-teal">Imus, Cavite</span>
                        </li>
                        <li class="list-group-item">
                          <i class="fa fa-fw fa-pencil"></i>
                          <span class="pull-right">
                          <span class="label label-danger">UI Design</span>
                          <span class="label label-success">Coding</span>
                          <span class="label label-info">Javascript</span>
                          <span class="label label-warning">PHP</span>
                          </span>
                        </li>
                      </ul>
                      </div>
                      <div class="col-md-8">
                        <p class="lead" style="text-indent: 50px; line-height: 1.6;"><strong>Jasver</strong>, an 18 year old graduating student, aspires to have a successful career in the Web Development industry. Lazy, and undependable. hahahahahahahahhaha </p>
                        <p class="lead"> She is proficient in PHP, CodeIgniter Framework, and uses Git.</p>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-md-12">
                  <center>
                  <img src="<?php echo base_url('images/bugbusters2.png')?>" alt="New York" style = "width: 50%" >
                  </center>
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
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>bower_components/Chart.js/Chart.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>dist/js/demo.js"></script>
<!-- page script -->
<script src="<?php echo base_url(); ?>dist/js/enrollment/dashboard.js"></script>
</body>
</html>
