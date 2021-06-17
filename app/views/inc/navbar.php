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
							<li class="has-submenu">
								<a href="#">Doctors<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="<?php echo URLROOT . 'public/users/finddoctors'; ?>">Find Doctors</a></li>
									<li><a href="<?php echo URLROOT . 'public/users/doctorreports'; ?>">Doctors Reports</a></li>
								</ul>
							</li>	
							<li class="has-submenu">
								<a href="#">Appointment<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="<?php echo URLROOT . 'public/users/bookappointments'; ?>">Book Appointment</a></li>
									<li><a href="<?php echo URLROOT . 'public/users/appointmentshistory'; ?>">Appointments History</a></li>
									
								</ul>
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
$text = <<<EOT


<!-- Notifications -->
<li class="nav-item">
<a class="nav-link header-login"  href="$logout" >Logout</a>
</li>
<li class="nav-item dropdown noti-dropdown">
	<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
		<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
	</a>
	<div class="dropdown-menu notifications">
		<div class="topnav-dropdown-header">
			<span class="notification-title">Notifications</span>
			<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
		</div>
		<div class="noti-content">
			<ul class="notification-list">
				<li class="notification-message">
					<a href="#">
						<div class="media">
							<span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/doctors/doctor-thumb-01.jpg">
							</span>
							<div class="media-body">
								<p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
								<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
							</div>
						</div>
					</a>
				</li>
				<li class="notification-message">
					<a href="#">
						<div class="media">
							<span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient1.jpg">
							</span>
							<div class="media-body">
								<p class="noti-details"><span class="noti-title">Charlene Reed</span> has booked her appointment to <span class="noti-title">Dr. Ruby Perrin</span></p>
								<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
							</div>
						</div>
					</a>
				</li>
				<li class="notification-message">
					<a href="#">
						<div class="media">
							<span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient2.jpg">
							</span>
							<div class="media-body">
							<p class="noti-details"><span class="noti-title">Travis Trimble</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
							<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
							</div>
						</div>
					</a>
				</li>
				<li class="notification-message">
					<a href="#">
						<div class="media">
							<span class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient3.jpg">
							</span>
							<div class="media-body">
								<p class="noti-details"><span class="noti-title">Carl Kelly</span> send a message <span class="noti-title"> to his doctor</span></p>
								<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
		<div class="topnav-dropdown-footer">
			<a href="#">View all Notifications</a>
		</div>
	</div>
</li>
<!-- /Notifications -->

<!-- User Menu -->
<li class="nav-item dropdown has-arrow">
	<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
		<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
	</a>
	<div class="dropdown-menu">
		<div class="user-header">
			<div class="avatar avatar-sm">
				<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
			</div>
			<div class="user-text">
				<h6>Ryan Taylor</h6>
				<p class="text-muted mb-0">Administrator</p>
			</div>
		</div>
		<a class="dropdown-item" href="profile.html">My Profile</a>
		<a class="dropdown-item" href="settings.html">Settings</a>
		<a class="dropdown-item" href="login.html">Logout</a>
	</div>
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