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
                    <img src="<?php echo APPROOT; ?>public/adminAssests/img/logo.png" alt="Logo">
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
<?php 
 if(isset($_SESSION['Stuff_id'])) {

    $logout = URLROOT . 'public/Stuff/logout';
    $text = <<<EOT
    
    
    <!-- Notifications -->
    <li class="nav-item">
    <a class="nav-link header-login"  href="$logout" >Logout</a>
    </li>
    
    EOT;
    echo $text;
    
 }


?>

                <!-- /User Menu -->
                
            </ul>
            <!-- /Header Right Menu -->
            
        </div>
			<!-- /Header -->


     
		
    </body>
    </html>