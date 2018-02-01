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
          <!-- User Account: style can be found in dropdown.less --><li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
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
                        <img src="http://sms.local/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
                        <img src="http://sms.local/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
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
                        <img src="http://sms.local/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
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
                        <img src="http://sms.local/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
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
                        <img src="http://sms.local/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
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

            <li class="<?php echo (isset($active) && $active =='academics/assign_advisory_class' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('academics/assign_advisory_class'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                  Assign Advisory Class
              </a>
            </li>
          </ul>          
        </li>

        <li class="treeview <?php echo (isset($active) && substr($active,0,12) =='student_info' ? 'active' : null); ?>">
          <a href="#">
            <i class="fa fa-id-card"></i>
            <span>Student Information</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="<?php echo (isset($active) && $active =='student_info/student_details' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('student_info/student_details'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Details
              </a>
            </li>         
            <!-- <li>
              <a href="<?php echo site_url('enrollment/register_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Grades
              </a>
            </li> -->
            <li>
              <a href="#">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Promotion
              <span class="pull-right-container">
                <span class="label label-warning pull-right">soon</span>
              </span>
              </a>
            </li>
          </ul>          
        </li>

        <li class="<?php echo (isset($active) && $active =='advisory/advisory_class' ? 'active' : null); ?>">
          <a href="<?php echo site_url('advisory/advisory_class'); ?>">
            <i class="fa fa-star"></i>
            <span>Advisory Class</span>
          </a>
        </li>

        <li class="treeview <?php echo (isset($active) && substr($active,0,6) =='grades' ? 'active' : null); ?>">
          <a href="">
            <i class="fa fa-file"></i>
            <span>Grades Management</span>
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>

          <ul class="treeview-menu">
            <li class="<?php echo (isset($active) && $active =='grades/view' ? 'active' : null); ?>">
              <a href="<?php echo site_url('grades/view'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                View
              </a>
            </li>         
            <li class="<?php echo (isset($active) && $active =='grades/manage' ? 'active' : null); ?>">
              <a href="<?php echo site_url('grades/manage'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Manage
              </a>
            </li>
          </ul> 
        </li>     

        <li class="<?php echo (isset($active) && $active =='audit_trail' ? 'active' : null); ?>">
          <a href="<?php echo site_url('audit_trail'); ?>">
            <i class="fa fa-history"></i>
            <span>Audit Trail</span>
          </a>
        </li>

        <li class="treeview <?php echo (isset($active) && substr($active,0,7) =='reports' ? 'active' : null); ?>">
          <a href="#">
            <i class="fa fa-bar-chart"></i>
            <span>Reports</span>
          </a>

          <ul class="treeview-menu">
            <li class="<?php echo (isset($active) && $active =='reports/student_reports' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('reports/student_reports'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Student Reports
              </a>
            </li>         
            <li>
              <a href="<?php echo site_url('enrollment/register_student'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                Grade Reports
              <span class="pull-right-container">
                <span class="label label-warning pull-right">soon</span>
              </span>
              </a>
            </li>            
          </ul>          
        </li>

        
        <li class="treeview <?php echo (isset($active) && substr($active,0,8) =='settings' ? 'active' : null); ?>">
          <a href="#">
            <i class="fa fa-gear"></i>
            <span>Settings</span>
              <!-- <span class="pull-right-container">
                <span class="label label-warning pull-right">soon</span>
              </span> --> 
            <span class="pull-right-container">
              <span class="fa fa-angle-left pull-right"></span>
            </span>
          </a>

          <ul class="treeview-menu ">
            <li class="<?php echo (isset($active) && $active =='settings/user_management' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('settings/user_management'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                User Management
              </a>
            </li>         
            <li class="<?php echo (isset($active) && $active =='settings/lock' ? 'active' : null) ; ?>">
              <a href="<?php echo site_url('settings/lock'); ?>">
                <i class="fa fa-circle-o text-aqua"></i>
                System Lock
              </a>
            </li>
          </ul>          
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