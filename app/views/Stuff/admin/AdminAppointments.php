<?php
class AdminAppointments extends view{
public function output(){
    //$title = $this->model->title;
    //$subtitle = $this->model->subtitle;
   // require APPROOT . '/views/inc/header.php';
   include APPROOT . '/views/inc/includesImp.php';
    include APPROOT . '/views/inc/adminupperDashboard.php';
    include APPROOT . '/views/inc/adminLeftNavbar.php';
    $text = <<<EOT
	<!-- Page Wrapper -->
	<div class="page-wrapper">
	
		<div class="content container-fluid">
			
			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="page-title">Appointments List</h3>
						<ul class="breadcrumb">
							
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->


			<!-----------------------------Appointments list--------------------------------->
                    </div>
                
                <div class="row">
                    <div class="col-md-12">
                    
                        <!-- Appointments list -->
                        <div class="card card-table">
                            <div class="card-header">
                                <h4 class="card-title">Appointments List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Doctor Name</th>
                                                <th>Patient Name</th>
                                                <th>Apointment Date</th>
                                                <th>Apointment duration time</th>
                                                
                                            </tr>
                                        </thead>
                                        
EOT;

echo $text;
$this->viewAppointments();
$text = <<<EOT
<tbody>
                                            
                                          
                                          
                                           
                                           
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

  function viewAppointments()
  {
    $pic = URLROOT . 'public/assets/img/Doctors';
    foreach($this->model->getAppointments() as $Appointment)
	{
        $Day=$Appointment->Day;
        $Time=$Appointment->Time;

        $drID=$Appointment->Doctor_ID;
        $PatientID=$Appointment->Patient_ID;

//get dr name
        $name=$this->model->getDoctorName($drID);
        $drName= $name->Full_Name;
// get patient name
$name=$this->model->getPatientFName($PatientID);
        $PatientFName= $name->FName;

        $name=$this->model->getPatientLName($PatientID);
        $PatientLName= $name->LName;

        


       
    $text = <<<EOT
    
    <tr>
       <td>
                                                    <h2 class="table-avatar">
                                                        <a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="" alt="User Image"></a>
                                                        <a href="#">$drName </a>
                                                    </h2>

                                                </td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="" alt="User Image"></a>
                                                        <a href="#">$PatientFName $PatientLName</a>
                                                    </h2>
                                                    
                                                </td>
                                                
                                                
                                                
                                                <td>$Day</td>
                                                <td>$Time</td>
                                                
                                                
                                                
                                            </tr>
EOT;
  echo $text;
    }

  }
}