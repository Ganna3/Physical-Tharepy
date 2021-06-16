


<?php
class Post extends view
{


    public function output()
    {
      //$title = $this->model->title;
     require APPROOT . '/views/inc/header_login.php';
     // require APPROOT . '/views/inc/AdminNavbar.php';
      $this->ViewData();
      require APPROOT . '/views/inc/footer_login.php';
    }
    public function ViewData()
	{
$text =<<<EOT
	
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12 col-12">
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">My Patients</li>
					</ol>
				</nav>
				<h2 class="breadcrumb-title">My Patients</h2>
			</div>
		</div>
	</div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->
<div class="content">
	<div class="container-fluid">

		<div class="row">
			
				<!-- Profile Sidebar -->
				<div class="profile-sidebar">
					<div class="widget-profile pro-widget-content">
						<div class="profile-info-widget">
							<a href="#" class="booking-doc-img">
								<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
							</a>
							<div class="profile-det-info">
								<h3>Dr. Darren Elder</h3>
								
								<div class="patient-details">
									<h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="dashboard-widget">
						<nav class="dashboard-menu">
							<ul>
								<li>
									<a href="doctor-dashboard.html">
										<i class="fas fa-columns"></i>
										<span>Dashboard</span>
									</a>
								</li>
								<li>
									<a href="appointments.html">
										<i class="fas fa-calendar-check"></i>
										<span>Appointments</span>
									</a>
								</li>
								<li class="active">
									<a href="my-patients.html">
										<i class="fas fa-user-injured"></i>
										<span>My Patients</span>
									</a>
								</li>
								<li>
									<a href="schedule-timings.html">
										<i class="fas fa-hourglass-start"></i>
										<span>Schedule Timings</span>
									</a>
								</li>
								<li>
									<a href="invoices.html">
										<i class="fas fa-file-invoice"></i>
										<span>Invoices</span>
									</a>
								</li>
								<li>
									<a href="reviews.html">
										<i class="fas fa-star"></i>
										<span>Reviews</span>
									</a>
								</li>
								<li>
									<a href="chat-doctor.html">
										<i class="fas fa-comments"></i>
										<span>Message</span>
										<small class="unread-msg">23</small>
									</a>
								</li>
								<li>
									<a href="doctor-profile-settings.html">
										<i class="fas fa-user-cog"></i>
										<span>Profile Settings</span>
									</a>
								</li>
								<li>
									<a href="social-media.html">
										<i class="fas fa-share-alt"></i>
										<span>Social Media</span>
									</a>
								</li>
								<li>
									<a href="doctor-change-password.html">
										<i class="fas fa-lock"></i>
										<span>Change Password</span>
									</a>
								</li>
								<li>
									<a href="index-2.html">
										<i class="fas fa-sign-out-alt"></i>
										<span>Logout</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div><div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
			
				<!-- /Profile Sidebar -->
				
			</div>
			<div class="tab-content">
										
											<!-- Upcoming Appointment Tab -->
											<div class="tab-pane show active" id="upcoming-appointments">
												<div class="card card-table mb-0">
													<div class="card-body">
														<div class="table-responsive">
															<table class="table table-hover table-center mb-0">
																<thead>
																	<tr>
																		<th>Patient Name</th>
																		<th>Appt Date</th>
																		<th>Purpose</th>
																		<th>Type</th>
																		<th class="text-center">Paid Amount</th>
																		<th></th>
																	</tr>
																</thead>
																<tbody>
																	
EOT;
																echo $text;
																
																$this->printdata();
															
																$text = <<<EOT
										
																
																
													
																</tbody>
															</table>		
														</div>
													</div>
												</div>
											</div>


EOT;

    echo $text;
  }

  private function printdata()
  {
    //$patients = new PostModel();
    //$patients->getPatients();
	//var_dump($patients);

	foreach($this->model->getPatients() as $patients)
	$email =  $patients->Email;
	//$id = $_SESSION['user_id'];
 {

		
    $text = <<<EOT
	<tr>
							<td>
										<h2 class="table-avatar">
											<a href="patient-profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient.jpg" alt="User Image"></a>
											<a href="patient-profile.html"><span>#PT0016</span></a>
										</h2>
									</td>
									<td>11 Nov 2019 <span class="d-block text-info">10.00 AM</span></td>
									<td>$email</td>
									<td>New Patient</td>
									<td class="text-center">$150</td>
									<td class="text-right">
										<div class="table-action">
											<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
												<i class="far fa-eye"></i> View
											</a>
											
											<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
												<i class="fas fa-check"></i> Accept
											</a>
											<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
												<i class="fas fa-times"></i> Cancel
											</a>
										</div>
									</td>
								</tr>
EOT;
    echo $text;
  }

}
}   
