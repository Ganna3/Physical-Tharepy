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
       $FullName = $Doctors->Full_Name;
       
       $Profile_pic = $Doctors->Profile_pic;
        
       $text = <<<EOT

       <!-- Breadcrumb -->
       <div class="breadcrumb-bar">
           <div class="container-fluid">
               <div class="row align-items-center">
                   <div class="col-md-12 col-12">
                       <nav aria-label="breadcrumb" class="page-breadcrumb">
                           <ol class="breadcrumb">
                               
                           </ol>
                       </nav>
                       <h2 class="breadcrumb-title"> Doctor : $FullName </h2>
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
                                       <img src="$pic/$Profile_pic" alt="User Image">
                                   </a>
                                   <div class="profile-det-info">
                                   <h4 class="doc-name"> $FullName </h4>
                                       
                                       <div class="patient-details">
                                           
                                       </div>
                                   </div>
                               </div>
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
                                                                               <th>Session Day</th>
                                                                               <th>Session Date</th>
                        
                                                                               <th class="text-center">Session Price</th>
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
                                                   </div>
                                                   </div>
                                             </div>
                                </div>

       
       
EOT;
       
           echo $text;
         }
       
private function printdata(){
    if(isset($_SESSION['id'])){
    $book= URLROOT . 'public/users/ConfirmBook';
    }else{
    $book = URLROOT . 'public/users/login';
    }
           //$patients = new PostModel();
           //$patients->getPatients();
           //var_dump($patients);
$id=$_GET['id'];
foreach($this->model->getAppointments($id) as $Appointment){
$App_ID= $Appointment->Doctors_Schedule_ID ;
$Doctor_id=$Appointment->Doctor_ID;
$Appointmentday= $Appointment->Doctors_Schedule_day;
$Appointment_Date= $Appointment->Doctors_Schedule_date;
$Appointment_Time=$Appointment->Doctors_Schedule_Start;
$Appointment_Price=$Appointment->Session_Price ;
           $text = <<<EOT
           <tr>
                
                                           
                                           <td>$Appointmentday</td>
                                           <td>$Appointment_Date<span class="d-block text-info">$Appointment_Time PM</span></td>
                                           <td class="text-center">$Appointment_Price</td>
                                           <td class="text-right">
                                               <div class="table-action">
                                               
                                                   <a href="$book?D_id=$Doctor_id&app_id=$App_ID" class="btn btn-sm bg-success-light">
                                                       <i class="fas fa-check"></i> Reserve Appointment
                                                   </a>

                                        </div>
                    </td>
        </tr>
        </tr>
EOT;
           echo $text;
           //if(isset($_SESSION['id']){
            //<a href="" class="btn btn-sm bg-success-light">
           //}
           //else{
               //<a href="" class="btn btn-sm bg-success-light">
           }
           }
         }
       
       


       
