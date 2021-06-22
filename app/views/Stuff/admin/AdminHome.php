<?php
class AdminHome extends view{
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
                            <h3 class="page-title">Welcome Admin!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-primary border-primary">
                                        <i class="fe fe-users"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>168</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted">Doctors</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-success">
                                        <i class="fe fe-credit-card"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>487</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    
                                    <h6 class="text-muted">Receptionists</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-success">
                                        <i class="fe fe-credit-card"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>487</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    
                                    <h6 class="text-muted">Patients</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-danger border-danger">
                                        <i class="fe fe-money"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>485</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    
                                    <h6 class="text-muted">Appointment</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            
                <div class="row">
                    <div class="col-md-12 d-flex">
                    <!-- ------------------------------ Doctors lists---------------------------------------- -->
                        <!-- Doctors list -->
                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Doctors List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Doctor Name</th>
                                                <th>Speciality</th>
                                                <th>Degree</th>
                                                <th>Salary</th>
                                                <th>Email</th>
                                                <th>Phone number</th>
                                                <th>Gender</th>
                                                <th>Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
EOT;

echo $text;
$this->ViewDoctors();
$text = <<<EOT
                                           
                                          
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Doctors list -->
                        
                    </div>
                    <div class="row">
                    <div class="col-md-12 d-flex">
                    <!--------------- Receptionists list -------------------------------->
                        <!-- Receptionists list -->
                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Receptionists List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Receptionist Name</th>
                                                <th>Email</th>
                                                <th>Phone number</th>
                                                <th>Gender</th>
                                                <th>Address</th>
                                                
                                            </tr>
                                        </thead>
                                       
                                   

EOT;

echo $text;
$this->viewReceptionists();
$text = <<<EOT

</table>
</div>
</div>
</div>
<!--------------------------------- Patient list---------------------------------------- -->
<!-- /Receptionists list -->

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


                        <!-- /Patients list -->
                        <!-----------------------------Appointments list--------------------------------->
                    </div>
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
                                        <tbody>
EOT;

echo $text;
$this->viewAppointments();
$text = <<<EOT
                                      

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Appointments list -->
                        
                    </div>
                </div>
            
                
            </div>			
        </div>
        <!-- /Page Wrapper -->
    
    </div>
    <!-- /Main Wrapper -->
   
      

EOT;
  echo $text;
  
  }





  function ViewDoctors()
  {
    $pic = URLROOT . 'public/assets/img/Doctors';
    foreach($this->model->getDoctors() as $Doctors)
	{
        $Doctor_name=$Doctors->Full_Name;
        $Doctor_Pic=$Doctors->Profile_pic;
        $Doctor_id=$Doctors->Stuff_id;

        $email=$Doctors->Email;
        $phonenumber=$Doctors->PhoneNum;
        $Gender=$Doctors->Gender;
        $address=$Doctors->Address;


        $info=$this->model->getDoctor_info($Doctor_id);
        $spec= $info->Expert_at;
        $degree= $info->Degree;
        $salary= $info->Salary;
        $egb='EGB';
    $text = <<<EOT
    
    <tr>
       <td>
                                                    <h2 class="table-avatar">
                                                        <a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src=" $pic/$Doctor_Pic" alt="User Image"></a>
                                                        <a href="#">$Doctor_name</a>
                                                    </h2>
                                                </td>
                                                <td>$spec</td>
                                                <td>$degree</td>
                                                <td>$salary$egb</td>
                                                <td>$email</td>
                                                <td>$phonenumber</td>
                                                <td>$Gender</td>
                                                <td>$address</td>
                                                
                                                
                                            </tr>
EOT;
  echo $text;
    }

  }
  function viewReceptionists()
  {
    $pic = URLROOT . 'public/assets/img/Doctors';
    foreach($this->model->getReceptionist() as $Receptionists)
	{
        $recep_name=$Receptionists->Full_Name;
        $recep_Pic=$Receptionists->Profile_pic;
        $recep_id=$Receptionists->Stuff_id;

        $email=$Receptionists->Email;
        $phonenumber=$Receptionists->PhoneNum;
        $Gender=$Receptionists->Gender;
        $address=$Receptionists->Address;


       
    $text = <<<EOT
    
    <tr>
       <td>
                                                    <h2 class="table-avatar">
                                                        <a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src=" $pic/$recep_Pic" alt="User Image"></a>
                                                        <a href="#">$recep_name</a>
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

