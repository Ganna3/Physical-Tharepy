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

EOT;
				echo $text;
						
				$this ->PrintDoctors();
				$text = <<<EOT
					

							<!-- Doctor Widget -->
							
							<!-- /Doctor Widget -->
	
						</div>
					</div>

				</div>

			
	
      
EOT;
  echo $text;
  require APPROOT . '/views/inc/footer.php';

  }

  function PrintDoctors(){
	$pic = URLROOT . 'public/assets/img/Doctors';
	$picS = URLROOT . 'public/assets/img/specialities';
	$Appointment = URLROOT . 'public/users/bookappointments';
	foreach($this->model->getDoctors() as $Doctors)
	{
	 $Doctor_ID = $Doctors->Doctor_ID;
     $Fname = $Doctors->LName;
	 $Lname = $Doctors->FName;
	 $Expert_at =$Doctors->Expert_at;
	 $Profile_pic =$Doctors->Profile_pic;
	 $Salary =$Doctors->Salary;
	 $Spaciality_Pic=$Doctors->Spaciality_Pic;
		$text = <<<EOT
		<div class="card">
								<div class="card-body">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img">
												<a href="doctor-profile.html">
													<img src="$pic/$Profile_pic" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="doc-info-cont">
												<h4 class="doc-name"><a>$Fname</a> <a>$Lname</a></h4>
												<p class="doc-speciality"><a>Speciality</a> : <a>$Expert_at</a></p>
												<p class="doc-department"><img src="$picS/$Spaciality_Pic" style="width: 100px;" class="img-fluid" alt="Speciality"></p>
											
												
												
											</div>
										</div>
										<div class="doc-info-right">
											<div class="clini-infos">
												<ul>
													<li><i class="far fa-money-bill-alt"></i>$Salary LE</i></li>
												</ul>
											</div>
											<div class="clinic-booking">
												<a class="view-pro-btn" href="">View Profile</a>
												
												<a class="apt-btn" name="$Doctor_ID" href="$Appointment&id=$Doctor_ID">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
EOT;
  echo $text;



	}




  }
}