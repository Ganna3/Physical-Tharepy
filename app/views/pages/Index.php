<?php
class Index extends view{
  public function output(){
    //$title = $this->model->title;
    //$subtitle = $this->model->subtitle;
	//echo $subtitle;

	if(isset($_SESSION['user_name'])){
    $P_Name=$_SESSION['user_name'];
	}
	else{
		$P_Name='';
	}
	
	
	//}$idd = $_SESSION['user_id'];
	
	//echo $_SESSION['user_name'];
	
	
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT

			<!-- /Header -->
			<!-- Home Banner -->
			
			<section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center style="color:#000000;">
						<div class="text-block">
							<h1>Welcome<p > $P_Name</h1>
							<p>Discover the best doctors and specialists.</p>
							</div>
						</div>
                         
						<!-- Search -->
					
						<!-- /Search -->
						
					</div>
				</div>
			</section>
			<!-- /Home Banner -->
			  
			<!-- Clinic and Specialities -->
			<section class="section section-specialities">
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2>Physical Therapy Specialists</h2>
						<p class="sub-title">The clinic is famous for these specialists.</p>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-9">
							<!-- Slider -->
							<div class="specialities-slider slider">
							
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/Mangment.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Orthopedic</p>
								</div>	
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/Post Surgical.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>
									<p>Rehabilitation</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/Women Health.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Woman Health</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/Physiotherapy.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Physiotherapy</p>	
								</div>							
								<!-- /Slider Item -->
								
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/Sports injury.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Sports Injury</p>
								</div>							
								<!-- /Slider Item -->
								<!-- Slider Item -->
								<div class="speicality-item text-center">
									<div class="speicality-img">
										<img src="assets/img/specialities/Nutrition.png" class="img-fluid" alt="Speciality">
										<span><i class="fa fa-circle" aria-hidden="true"></i></span>
									</div>	
									<p>Nutrition</p>
								</div>							
								<!-- /Slider Item -->

							</div>
							<!-- /Slider -->
							
						</div>
					</div>
				</div>   
			</section>
			
			<!-- Physio Therapy Specialists-->
		  
			<!-- Popular Section -->
		<section class="section section-doctor">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4">
							<div class="section-header ">
								<h2>Book Our Doctor</h2>
								<p>Choose the specific doctor according to your injury</p>
							</div>
					</div>		
			             <div class="col-lg-8">
	                         <div class="doctor-slider slider">
							 
							
EOT;
								echo $text;
                               $this->Doctors();
								$text = <<<EOT
					
				
					     </div>	
				      </div>
				   </div>	
				</div>
			 </div>
		</section>
			<!-- /Popular Section -->
		   
		   
			<!-- Availabe Features -->
			
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
			
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
	   
     
	   <!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>
</html>
      

EOT;
  echo $text;
  require APPROOT . '/views/inc/footer.php';

  }
  function Doctors(){
	$pic = URLROOT . 'public/assets/img/Doctors';
	$Appointment = URLROOT . 'public/users/finddoctors';
	foreach($this->model->getDoctors() as $Doctors  )
	{
	 $Doctor_ID = $Doctors->Stuff_id;
	 
     $Fullname = $Doctors->Full_Name;
	// $Expert_at =$Doctors->Expert_at;
	 $Profile_pic =$Doctors->Profile_pic;
	// $Salary =$Doctors->Salary;
	// $Spaciality_Pic=$Doctors->Spaciality_Pic;
	$info = $this->model->getDoctor_info($Doctor_ID);
	$Salary =$info->Salary;
	$Spaciality_Pic=$info->Spaciality_Pic;
	$Expert_at =$info->Expert_at;
	$text = <<<EOT


		
		<!-- Doctor Widget -->
		<div class="profile-widget">
			<div class="doc-img">
				<a href="doctor-profile.html">
					<img class="img-fluid" alt="User Image" src="$pic/$Profile_pic">
				</a>
				<a href="javascript:void(0)" class="fav-btn">
					<i class="far fa-bookmark"></i>
				</a>
			</div>
			<div class="pro-content">
				<h3 class="title">
					<a href="doctor-profile.html">$Fullname</a> 
					<i class="fas fa-check-circle verified"></i>
				</h3>
				
				<ul class="available-info">
						<i class="far fa-money-bill-alt"></i>$Salary   LE
						<i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
					</li>
				</ul>
				<div class="row row-sm">
					<div class="col-6">
						<a href="doctor-profile.html" class="btn view-btn">View Profile</a>
					</div>
					<div class="col-6">
						<a href="$Appointment" class="btn book-btn">Book Now</a>
					</div>
				</div>
			</div>
		</div>
		




EOT;
  echo $text;

  }
}
}
