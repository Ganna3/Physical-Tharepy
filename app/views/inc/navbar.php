<div class="main-wrapper">
<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>	
						</a>
						<a href="<?php echo URLROOT . 'public';?>" class="navbar-brand logo">
							<img src="<?php echo URLROOT . 'public';?>/assets/img/amr.png" width="200" hight="100" class="img-fluid" alt="Logo" >
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="<?php echo URLROOT . 'public';?>" class="menu-logo">
								<img src="<?php echo URLROOT . 'public';?>/assets/img/amr.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li>
								<a href="<?php echo URLROOT . 'public';?>">Home</a>
						
							</li>
								
							<?php  if(isset($_SESSION['id'])) {
							$f_D = URLROOT . 'public/users/Appointmentshistory';
							$MyReports = URLROOT . 'public/users/doctorreports';
                            
								$text = <<<EOT
							<li class="main-nav">
								<a href="$f_D">My Appointments<i></i></a>
							</li>	
							<li class="main-nav">
								<a href="$MyReports">Doctors Reports<i></i></a>
							</li>
							EOT;
							echo $text;
							}?>
							<li>
								<a href="<?php echo URLROOT . 'public/users/finddoctors'; ?>">Find Doctor</a>
							</li>
							<li>
								<a href="<?php echo URLROOT . 'public/pages/services'; ?>">Services</a>
							</li>
							
							<li>
								<a href="<?php echo URLROOT . 'public/pages/about'; ?>">About us</a>
							</li>
							
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header">+201551864244</p>
								
								
								
							</div>
						</li>
						
<?php  if(isset($_SESSION['id'])) {
$logout = URLROOT . 'public/users/logout';
$pic_Source =URLROOT . 'public/assets/img/patients';
$Pic =$_SESSION['Pic'] ;

$text = <<<EOT


<!-- Notifications -->
<li class="nav-item">
<a class="nav-link header-login"  href="$logout" >Logout</a>
</li>


<!-- User Menu -->
<li class="nav-item dropdown has-arrow">
	
		<span class="user-img"><img class="rounded-circle" src="$pic_Source/$Pic" width="31" alt="Ryan Taylor"></span>
	</a>

</li>
</ul>

EOT;

echo $text;
}
else {
	$Register = URLROOT . 'public/users/Register';
	$login = URLROOT . 'public/users/login';
	$text = <<<EOT
						<li class="nav-item">
							<a class="nav-link header-login" href="$login" >login </a>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="$Register">Signup </a>
						</li>
						EOT;
						echo $text;	
					//	echo $_SESSION['user_id'];	
}
?>

				</nav>
			</header>
		</div>