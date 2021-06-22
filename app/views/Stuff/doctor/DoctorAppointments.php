<?php
class DoctorAppointments extends view{
public function Output(){
  //$title = $this->model->title;
  //$subtitle = $this->model->subtitle;
 // require APPROOT . '/views/inc/header.php';
 $ADD = URLROOT . 'public/Stuff/Schedule';
include APPROOT . '/views/inc/doctcorupperDashboard.php';
include APPROOT . '/views/inc/doctorLeftNavbar.php';
  $text = <<<EOT
  <!-- Page Wrapper -->
  <div class="page-wrapper">
			  <div class="content container-fluid">
			  
				  <!-- Page Header -->
				  <div class="page-header">
					  <div class="row">
						  <div class="col-sm-12">
							  <h3 class="page-title">List of Patients</h3>
							  
						  </div>
					  </div>
				  </div>
				  <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
				  <li class="nav-item">
					  <a class="nav-link active" href="$ADD" ">Add Schedule</a>
				  </li>
			  </ul>
				  <!-- /Page Header -->
				  
				  <div class="row">
					  <div class="col-sm-12">
						  <div class="card">
							  <div class="card-body">
								  <div class="table-responsive">
									  <div class="table-responsive">
									  <table class="datatable table table-hover table-center mb-0">
										  <thead>
											  <tr>
												  <th>Patient ID</th>
												  <th>Patient Name</th>
												  <th>Age</th>
												  <th>Address</th>
												  <th>Phone</th>
												  <th>Last Visit</th>
												  <th class="text-right">Paid</th>
											  </tr>
										  </thead>
										  <tbody>
											  <tr>
												  <td>#PT001</td>
												  <td>
													  <h2 class="table-avatar">
														  <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image"></a>
														  <a href="profile.html">Charlene Reed </a>
													  </h2>
												  </td>
												  <td>29</td>
												  <td>4417  Goosetown Drive, Taylorsville, North Carolina, 28681</td>
												  <td>8286329170</td>
												  <td>20 Oct 2019</td>
												  <td class="text-right">$100.00</td>
											  </tr>
											  <tr>
												  <td>#PT002</td>
												  <td>
													  <h2 class="table-avatar">
														  <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image"></a>
														  <a href="profile.html">Travis Trimble </a>
													  </h2>
												  </td>
												  <td>23</td>
												  <td>4026  Fantages Way, Brunswick, Maine, 04011</td>
												  <td>2077299974</td>
												  <td>22 Oct 2019</td>
												  <td class="text-right">$200.00</td>
											  </tr>
											  <tr>
												  <td>#PT003</td>
												  <td>
													  <h2 class="table-avatar">
														  <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient3.jpg" alt="User Image"></a>
														  <a href="profile.html">Carl Kelly</a>
													  </h2>
												  </td>
												  <td>29</td>
												  <td>2037 Pearcy Avenue, Decatur, Indiana, 46733</td>
												  <td>2607247769</td>
												  <td>21 Oct 2019</td>
												  <td class="text-right">$250.00</td>
											  </tr>
											  <tr>
												  <td>#PT004</td>
												  <td>
													  <h2 class="table-avatar">
														  <a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient4.jpg" alt="User Image"></a>
														  <a href="profile.html"> Michelle Fairfax</a>
													  </h2>
												  </td>
												  <td>25</td>
												  <td>2037 Pearcy Avenue, Decatur, Indiana, 46733</td>
												  <td>5043686874</td>
												  <td>21 Sep 2019</td>
												  <td class="text-right">$150.00</td>
											  </tr>
											 
										  </tbody>
									  </table>
								  </div>
								  </div>
							  </div>
						  </div>
					  </div>			
				  </div>
				  
			  </div>			
		  </div>
		  <!-- /Page Wrapper -->
	  
	  </div>
	  <!-- /Main Wrapper -->
	  </div>
	  <!-- /Main Wrapper -->
			
    

EOT;
echo $text;
//require APPROOT . '/views/inc/.php';
//require APPROOT . '/views/inc/footer.php';
}
}