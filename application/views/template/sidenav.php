<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url('/') ?>" class="logo" style="background: rgb(97, 22, 35)">
     {logo}
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #6C1827" >
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">                                    
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="user-image" alt="<?php echo base_url('images/alt_picture.jpg');?>">
              <span class="hidden-xs"><?php echo $this->session->first_name." ".$this->session->last_name ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="background-color: #6C1827">
                <img src="<?php echo base_url('images/alt_picture.jpg');?>" class="img-circle" alt="<?php echo base_url('images/alt_picture.jpg');?>">

                <p>
                 <?php echo $this->session->first_name." ".$this->session->last_name." - ".$this->session->position ?>
                  <small>Member since <?php echo $this->session->date_created ?></small>
                </p>
              </li>              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo site_url('profile')?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
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
        <li class="<?php echo (isset($active) && $active =='dashboard' ? 'active' : null); ?>">
          <a href="<?php echo site_url('/'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?php echo (isset($active) && substr($active,0,10) == 'enrollment' ? 'active' : null); ?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Enrollment</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="<?php echo (isset($active) && $active =='enrollment/register_student' ? 'active' : null); ?>">
              <a href="<?php echo site_url('enrollment/register_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Register Student
              </a>              
            </li>

            <li class="<?php echo (isset($active) && $active =='enrollment/enroll_student' ? 'active' : null); ?>">
              <a href="<?php echo site_url('enrollment/enroll_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Enroll Student
              </a>
            </li>

            <li class="<?php echo (isset($active) && $active =='enrollment/student_list' ? 'active' : null); ?>">
              <a href="<?php echo site_url('enrollment/student_list'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Student List
              </a>
            </li>
          </ul>          
        </li>

        <li class="treeview <?php echo (isset($active) && substr($active,0,9) =='academics' ? 'active' : null); ?>">
          <a href="#">
            <i class="fa fa-mortar-board"></i>
            <span>Academics</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="<?php echo (isset($active) && $active =='academics/strands' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('academics/strands'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Strands
              </a>
            </li>
            <li class="<?php echo (isset($active) && $active =='academics/teachers' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('academics/teachers'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Teachers
              </a>
            </li>
            <li class="<?php echo (isset($active) && $active =='academics/rooms' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('academics/rooms'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Rooms
              </a>
            </li>
            <li class="<?php echo (isset($active) && $active =='academics/sections' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('academics/sections'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Sections
              </a>
            </li>          
            <li class="<?php echo (isset($active) && $active =='academics/subjects' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('academics/subjects'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Subjects
              </a>
            </li>          
            <li class="<?php echo (isset($active) && $active =='academics/curriculum' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('academics/curriculum'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Curriculum
              </a>
            </li>
            <li class="<?php echo (isset($active) && $active =='academics/assign_subjects' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('academics/assign_subjects'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Assign Subjects
              </a>
            </li>
            <li class="<?php echo (isset($active) && $active =='academics/schedule' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('academics/schedule'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Schedule
              </a>
            </li>
          </ul>          
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-id-card"></i>
            <span>Student Information</span>
            <span class="pull-right-container">
              <span class="label label-warning pull-right">soon</span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('enrollment/dashboard'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Details
              </a>
            </li>         
            <li>
              <a href="<?php echo site_url('enrollment/register_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Grades
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('enrollment/enroll_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Promotion
              </a>
            </li>
          </ul>          
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Reports</span>
            <span class="pull-right-container">
              <span class="label label-warning pull-right">soon</span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li>
              <a href="<?php echo site_url('reports/student_reports'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Reports
              </a>
            </li>         
            <li>
              <a href="<?php echo site_url('enrollment/register_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Grade Reports
              </a>
            </li>            
          </ul>          
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-plus"></i>
            <span>User Management</span>
            <span class="pull-right-container">
              <span class="label label-warning pull-right">soon</span>
            </span>
          </a>         
        </li>

      </ul>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">INFORMATION NAVIGATION</li>
        <li class="<?php echo (isset($active) && $active =='developers' ? 'active' : null) ; ?>">
          <a href="<?php echo site_url('information/developers'); ?>">
            <i class="fa  fa-bug"></i> <span>Developers</span>
          </a>
        </li> 
        <li class="">
          <a href="<?php echo site_url('/'); ?>">
            <i class="fa  fa-info-circle"></i> <span>About</span>
          </a>
        </li>     
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>