<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | Manage Schedule</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/skins/_all-skins.min.css">
  <!-- Page style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/enrollment/manage_schedule.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('welcome/index2') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">School Management</span>
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
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
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
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul style="margin-bottom: 285px; " class="sidebar-menu" data-widget="tree">
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
            <li>
              <a href="<?php echo site_url('enrollment/enrollstudent'); ?>">
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
            <li class="active">
              <a href="<?php echo site_url('enrollment/manage_schedule'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Manage Schedule
              </a>
            </li>
          </ul>
        </li>
      
        
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>

        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Schedule
        <small>Temporary idle</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Manage Schedule</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Draggable Events</h4>
            </div>
            <div class="box-body">
               <div class="count object" id="1" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white; background-color:#3c8dbc">Example Subject<br><div class="text-gray">Example Teacher</div></div>
              <div id="external-events">
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Create Event</h3>
            </div>
            <div class="box-body">
              <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
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
                  <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                </ul>
              </div>
              <!-- /btn-group -->
              <div class="input-group">
                <input style="height:34px;" id="new-event-subject" type="text" class="form-control" placeholder="Event">
                <input style="height:34px;" id="new-event-teacher" type="text" class="form-control" placeholder="Teacher">

                <div class="input-group-btn ">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat" style="height:68px;">Add</button>
                </div>
                <!-- /btn-group -->
              </div>
              <!-- /input-group -->
            </div>
          </div>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 id="trash" class="box-title">Drag Here To Trash</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div ondrop="dropTrash(event)" ondragover="allowDrop(event)" >
                  <h5 class="box-title text-center"><icon id = "icon" class="fa fa-trash-o fa-4x"/></h5>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->

          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Actions Row</h4>
            </div>
            <div class="box-body">
              <center>
                <button id="remove" class="btn btn-danger">Remove</button>
                <button id="removeAll" class="btn btn-warning">Remove All</button>
                <button id="add"class="btn btn-success">Add</button>
              </center>
                
              <div id="external-events">

              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE TABLE SCHEDULE -->
              <table  id="example2" class="table table-bordered table-hover table-schedule">
                <thead>
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
                  <td contenteditable='true'>6:00-7:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>7:00-8:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>8:00-9:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>9:00-10:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>10:00-11:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>11:00-12:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>12:00-1:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>1:00-2:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>2:00-3:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>3:00-4:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>4:00-5:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>5:00-6:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
                <tr class="tr-height">
                  <td contenteditable='true'>6:00-7:00</td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                  <td id="td-padding" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
                </tr>
              </div>
              </tbody>
                <tfoot>
                <tr>
                  <th>Time</th>
                  <th>Monday</th>
                  <th>Tuesday</th>
                  <th>Wednesday</th>
                  <th>Thursday</th>
                  <th>Friday</th>
                </tr>
                </tfoot>
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

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
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
</body>
</html>
