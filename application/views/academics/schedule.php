<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management | Schedule</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css">
  <!-- Loading -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/loading.css">
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
<div hidden class="loading">Loading&#8230;</div>

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('welcome/index2') ?>" class="logo">
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
          <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="img-circle" alt="<?php echo base_url('images/alt_picture.jpg');?>">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->first_name." ".$this->session->last_name ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul style="margin-bottom: 285px; " class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo site_url('/'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li class="treeview">
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
              <a href="<?php echo site_url('enrollment/register_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Register Student
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('enrollment/enroll_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Enroll Student
              </a>
            </li>
          </ul>
          
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-mortar-board"></i>
            <span>Academics</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('academics/strands'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Strands
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('academics/teachers'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Teachers
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('academics/sections'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Sections
              </a>
            </li>          
            <li>
              <a href="<?php echo site_url('academics/subjects'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Subjects
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('academics/assign_subjects'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Assign Subjects
              </a>
            </li>
            <li class="active">
              <a href="<?php echo site_url('academics/schedule'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Schedule
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
  <div  class=" content-wrapper">
    <!-- <div class="alert alert-success alert-dismissible flat">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-bullhorn"></i> Day 1 of Enrollment is successful!</h4>
          Congratulations! Job well done! Please do the same on Day 2 of Enrollment!
    </div> -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Schedule
        <small>Create a schedule for school year 2017-2018</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="enrollment/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Manage Schedule</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
      <div class="col-lg-4 col-xs-12">
        <div class="input-group margin" style="margin: 0 0 10px 0;">
                <select id="new-event-subject" class="form-control select2"  data-placeholder="Select Class" style="width: 100%">
                  <option></option>
                  <?php foreach ($classes as $val) 
                    {
                      echo "<option val='".$val->id."'>".$val->strand_code." ".substr($val->year_level, 6)."-". $val->section_name."</option>";
                    }
                  ?>
                </select> 
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">ENTER</button>
                    </span>
              </div>

      </div>

    </div>
      
      
      <div class="row disabled">
        
      <!-- CLASS INFORMATION BOX -->
      <div class="col-lg-4 col-xs-12">
        <div class="hidden-print box box-solid">
          <div class="box-header with-border">
              <h4 id="trash" class="box-title">Class Information</h4>
          </div>
          <div class="box-body" style="padding: 0px 10px 0px 10px">
            <h5 style="margin: 14px 0px 13px 0px"> <b> Strand  </b> <a class="pull-right"> STEM </a></h5>
            <h5 style="margin: 14px 0px 13px 0px"> <b> Year & Section  </b> <a class="pull-right"> 11-A </a></h5>
            <h5 style="margin: 14px 0px 13px 0px"> <b> Capacity  </b> <a class="pull-right"> 30/40</a></h5>
          </div>
        </div>
      </div>

      <!-- TRASH BIN BOX -->
        <div class="col-lg-4 col-xs-12">
          <div class="hidden-print box box-solid">
            <div class="box-header with-border">
              <h4 id="trash" class="box-title">Drag Here To Trash</h4>
            </div>
            <div class="box-body" style="padding: 5px">
              <div ondrop="dropTrash(event)" ondragover="allowDrop(event)" >
                  <h5 class="box-title text-center"><icon id = "icon" class="fa fa-trash-o fa-5x"/></h5>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-xs-12">
          <div class="hidden-print box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Actions Row</h4>
            </div>
            <div class="box-body" >
              <center style="padding: 7px;">
                <button style="width: 100px; margin-top: 3px" id="add" class="btn btn-sm btn-success">Add</button>
                <button style="width: 100px; margin-top: 3px" id="remove" class="btn btn-sm btn-danger">Remove</button>
                <button style="width: 100px; margin-top: 3px" id="removeAll" class="btn btn-sm btn-warning">Remove All</button>
                <button style="width: 100px; margin-top: 3px" id="printBtn" class="btn btn-sm btn-primary">Print</button>
                <button style="width: 100px; margin-top: 3px" id="saveBtn" class="btn btn-sm bg-purple">Save Sched</button>     
                <button style="width: 100px; margin-top: 3px" id="clearBtn" class="btn btn-sm bg-purple">Clear</button>  
              </center>                                     
            </div>
          </div>
        </div>
      
    </div>

      <div class="row disabled">
        <!-- /.col -->
        <div class="col-md-3">

          <div class="hidden-print box box-solid">
            <div class="box-header with-border">
                <h4 id="trash" class="box-title">Create Event Here</h4>
            </div>
            <div class="box-body" style="padding: 18px 10px 17px 10px">
              <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <ul class="fc-color-picker" id="color-chooser">        
                    <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                    <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>                  
                </ul>
              </div>
              <!-- /btn-group -->
              <div class="input-group">
                <select id="select-subject" class="form-control select2"  data-placeholder="Select Room" style="width: 100%">
                  <option></option>
                  <?php foreach ($subjects as $val) 
                    {
                      echo "<option value='".$val->code."'>".$val->name."</option>";
                    }
                  ?>   
                </select>
                <select id="new-event-room" class="form-control select2"  data-placeholder="Select Room" style="width: 100%">
                  <option></option>
                  <?php foreach ($rooms as $val) 
                    {
                      echo "<option value='".$val->room_id."'>".$val->room_name."</option>";
                    }
                  ?>   
                </select>

                <div class="input-group-btn ">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat" style="height: 68px">Add</button>
                </div>
                <!-- /btn-group -->
              </div>
              <!-- /input-group -->
            </div>
          </div>

         
          <!-- DRAGGABLE EVENTS -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Draggable Events</h4>
            </div>
            <div class="box-body" >
              <div class="count object" id="0" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white; background-color:#3c8dbc">Example Subject<br><div class="text-gray">Example Teacher</div>
              </div>
              <div class="count object bg-purple" id="1" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white;">Example Subject<br><div class="text-gray">Example Teacher</div>
              </div>
              <div class="count object bg-yellow" id="2" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white;">Example Subject<br><div class="text-gray">Example Teacher</div>
              </div>
              <div class="count object bg-red" id="3" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white; ">Example Subject<br><div class="text-gray">Example Teacher</div>
              </div>
              <div class="count object bg-lime" id="4" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white; background-color:#3c8dbc">Example Subject<br><div class="text-gray">Example Teacher</div>
              </div>
              <div class="count object bg-orange" id="5" draggable="true" ondragstart="drag(event)" style="resize: vertical; overflow: auto; color: white;">Example Subject<br><div class="text-gray">Example Teacher</div>
              </div>
              <div id="external-events">
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-9">

          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE TABLE SCHEDULE -->
              <table  id="schedule" class="table table-bordered table-hover table-schedule">
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

  <!-- Footer -->
  {footer}
  <!-- /.Footer -->

  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
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

<script type="text/javascript">
  //Initialize Select2 Elements
    $('.select2').select2()

  var ajaxUrl = "<?php echo base_url("enrollment/manage_schedule/ajax"); ?>"
</script>
</body>
</html>
