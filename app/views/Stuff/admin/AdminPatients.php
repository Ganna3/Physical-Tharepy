<?php
class AdminPatients extends view{
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
						<h3 class="page-title">Patients List</h3>
						<ul class="breadcrumb">
							
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->


			<!--------------------------------- Patient list---------------------------------------- -->


</div>
                    <div class="col-md-12 d-flex">
                    
                        <!-- Patients list -->
                        <div class="card  card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Patients List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>													
                                                <th>Patient Name</th>
                                                <th>Email</th>
                                                <th>Phone number</th>
                                                <th>Gender</th>	
                                                <th>Adresse</th>													
                                            </tr>
                                        </thead>
EOT;

echo $text;
$this->viewPatients();
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

  function viewPatients()
  {
    $pic = URLROOT . 'public/assets/img/Doctors';
    foreach($this->model->getPatients() as $Patients)
	{
        $patient_fname=$Patients->FName;
        $patient_lname=$Patients->LName;
        $patient_Pic=$Patients->Image;
        $space=' ';

        $email=$Patients->Email;
        $phonenumber=$Patients->Phone_Num;
        $Gender=$Patients->Gender;
        $address=$Patients->Address;


       
    $text = <<<EOT
    
    <tr>
       <td>
                                                    <h2 class="table-avatar">
                                                        <a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src=" $pic/$patient_Pic" alt="User Image"></a>
                                                        <a href="#">$patient_fname $patient_lname </a>
                                                    </h2>
                                                </td>
                                                
                                                
                                                
                                                <td>$email</td>
                                                <td>$phonenumber</td>
                                                <td>$Gender</td>
                                                <td>$address</td>
                                                
                                                
                                            </tr>
EOT;
  echo $text;
    }

  }
}