<?php
include APPROOT . '/views/inc/includesImp.php';
?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:20 GMT -->

        <head>
        <body>
    <div class="header">
			
            <!-- Logo -->
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="<?php echo URLROOT; ?>public/adminAssests/img/logo2.png" alt="Logo" >
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="<?php echo APPROOT; ?>public/adminAssests/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->
            
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>
            
        
            
            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->
            
            <!-- Header Right Menu -->
            <ul class="nav user-menu">

            
                
                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow">
                    <a href="adminupperDashboard.php" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="<?php echo URLROOT; ?>public/adminAssests/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="<?php echo URLROOT; ?>public/adminAssests/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Ryan Taylor</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="<?php echo URLROOT . 'public/Stuff/AdminProfile'; ?>">My Profile</a>
                        
                        <a class="dropdown-item" href="<?php echo URLROOT . 'public/Stuff/Stuff_Login';?>">Logout</a>
                    </div>
                </li>
                <!-- /User Menu -->
                
            </ul>
            <!-- /Header Right Menu -->
            
        </div>
			<!-- /Header -->


     
		
    </body>
    </html>