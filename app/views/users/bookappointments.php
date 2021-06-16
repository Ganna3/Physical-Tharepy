<?php
class bookappointments extends view
{


    public function output()
    {
        
        //$title = $this->model->title;
        require APPROOT . '/views/inc/header.php';
        $this->viewreports();
        require APPROOT . '/views/inc/footer.php';
        
    }
    public function viewreports()
	{
    $pic = URLROOT . 'public/assets/img/Doctors';
   // require APPROOT . '/views/inc/ProfileSidenav.php';
       $id=$_GET['id'];
       $Doctors = $this->model->getDoctor($id);
       $FName = $Doctors->FName;
       $LName =  $Doctors->LName ;
       $Profile_pic = $Doctors->Profile_pic;
        $text =<<<EOT
        <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
        <div class="profile-sidebar">
					<div class="widget-profile pro-widget-content">
						<div class="profile-info-widget">
							<a href="#" class="booking-doc-img">
								<img src="$pic/$Profile_pic" alt="User Image">
							</a>
							<div class="profile-det-info">
								<h3>$LName</h3>
								
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
				</div>
			
				<!-- /Profile Sidebar -->
				
			</div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Two Column Vertical Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <h4 class="card-title">Personal Information</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" value="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <label>Blood Group</label>
                        <select class="select">
                            <option>Select</option>
                            <option value="1">A+</option>
                            <option value="2">O+</option>
                            <option value="3">B+</option>
                            <option value="4">AB+</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Gender:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1">
                            <label class="form-check-label" for="gender_male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
                            <label class="form-check-label" for="gender_female">Female</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Repeat Password</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <h4 class="card-title">Postal Address</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address Line 1</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address Line 2</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Postal Code</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
EOT;
    echo $text;
  }
}
?>