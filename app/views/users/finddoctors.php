<?php 
class finddoctors extends view{

  public function output(){
   // $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
	<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
						</div>
					</div>
				</div>
			</div>
    <div class="content">
				<div class="container-fluid">

					
						
						

					

							<!-- Doctor Widget -->
							<div class="card">
								<div class="card-body">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img">
												<a href="doctor-profile.html">
													<img src="assets/img/doctors/doctor-thumb-06.jpg" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="doc-info-cont">
												<h4 class="doc-name"><a href="doctor-profile.html">Dr. Katharine Berthold</a></h4>
												<p class="doc-speciality">MS - Orthopaedics, MBBS, M.Ch - Orthopaedics</p>
												<p class="doc-department"><img src="assets/img/specialities/specialities-03.png" class="img-fluid" alt="Speciality">Orthopaedics</p>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(52)</span>
												</div>
												<div class="clinic-details">
												</div>
												<div class="clinic-services">
													<span>Dental Fillings</span>
													<span> Whitneing</span>
												</div>
											</div>
										</div>
										<div class="doc-info-right">
											<div class="clini-infos">
												<ul>
													<li><i class="far fa-money-bill-alt"></i> $100 - $500 <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i></li>
												</ul>
											</div>
											<div class="clinic-booking">
												<a class="view-pro-btn" href="doctor-profile.html">View Profile</a>
												<a class="apt-btn" href="booking.html">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Doctor Widget -->
	
						</div>
					</div>

				</div>

			
	
      
EOT;
  echo $text;
  require APPROOT . '/views/inc/footer.php';

  }
}