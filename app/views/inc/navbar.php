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
									<li><a href="">Find Doctors</a></li>
									<li><a href="">Doctors Reports</a></li>
								</ul>
							</li>	
							<li class="has-submenu">
								<a href="#">Appointment<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="">Book Appointment</a></li>
									<li><a href="">Appointments History</a></li>
									
								</ul>
							</li>	
						
							<li>
								<a href="<?php echo URLROOT . 'public/users/login'; ?>">Services</a>
							</li>
							<li>
								<a href="<?php echo URLROOT . 'public/users/login'; ?>">About us</a>
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
						<li class="nav-item">
							<a class="nav-link header-login" href="<?php echo URLROOT . 'public/users/login'; ?>">login / Signup </a>
						</li>
					</ul>
				</nav>
			</header>
			