<? 
// $d = &get_instance();
// $uri = $d->uri->segment(2);
?>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile position-relative" style="background: url(<?php echo base_url() ?>adminassets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo base_url() ?>adminassets/images/users/profile.png" alt="user" class="w-100" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text pt-1"> 
                        <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php // echo $d->admin->get_admin("name") ?></a>
                        <div class="dropdown-menu animated flipInY"> 
                            <a href="<?php echo base_url() ?>admin/dashboard/updateProfile" class="dropdown-item"><i class="ti-user"></i>
                                My Profile</a>  
<!--                            <a href="<? //echo base_url('admin/settings') ?>" class="dropdown-item"><i class="ti-settings"></i> Settings</a>-->
                            <div class="dropdown-divider"></div> 
                            <a href="<?php echo base_url("admin/login/logout");?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item <?php //echo ($uri == "dashboard") ? 'active' : ''; ?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/dashboard" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                            	<span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                      
                        <li class="sidebar-item <?php //echo ($uri == "stroy") ? 'active' : ''; ?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/about/story" aria-expanded="false"><i class="mdi mdi-all-inclusive"></i>
                            	<span class="hide-menu"> Events</span>
                            </a>
                        </li>
                       
                        
                       
                        <li class="sidebar-item <?php //echo ($uri == "solutions") ? 'active' : ''; ?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/solutions" aria-expanded="false"><i class=" mdi mdi-laptop-windows"></i>
                            	<span class="hide-menu">Solutions</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php //echo ($uri == "about") ? 'active' : ''; ?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/about" aria-expanded="false"><i class=" mdi mdi-account-switch"></i>
                            	<span class="hide-menu">Team</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item <?php //echo ($uri == "file_manager") ? 'active' : ''; ?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/file_manager" aria-expanded="false"><i class=" mdi mdi-laptop-windows"></i>
                            	<span class="hide-menu">File Manager</span>
                            </a>
                        </li> -->
                        
                        <li class="sidebar-item <?php //echo ($uri == "settings") ? 'active' : ''; ?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/settings" aria-expanded="false"><i class="icon-settings"></i>
                            	<span class="hide-menu">Settings</span>
                            </a>
                        </li>
                         <li class="sidebar-item <?php //echo ($uri == "settings") ? 'active' : ''; ?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/settings/events" aria-expanded="false"><i class="far fa-handshake"></i>
                            	<span class="hide-menu"> Eevnts List</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?php //echo ($uri == "settings") ? 'active' : ''; ?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/settings/booking" aria-expanded="false"><i class=" fas fa-hand-peace"></i>
                            	<span class="hide-menu">Booking</span>
                            </a>
                        </li>
                         <li class="sidebar-item <?php //echo ($uri == "settings") ? 'active' : ''; ?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/settings/subscribe" aria-expanded="false"><i class=" fas fa-comment-alt"></i>
                            	<span class="hide-menu">Subscribe</span>
                            </a>
                        </li>
                         <li class="sidebar-item <?php //echo ($uri == "settings") ? 'active' : ''; ?>"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url(); ?>admin/settings/contacts" aria-expanded="false"><i class="fas fa-address-book"></i>
                            	<span class="hide-menu">Contacts</span>
                            </a>
                        </li>
                       
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url("admin/login/logout");?>" aria-expanded="false"><i class="mdi mdi-directions"></i>
                            	<span class="hide-menu">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points
            <div class="sidebar-footer">
                <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
      
      
    