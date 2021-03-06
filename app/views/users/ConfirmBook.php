<?php
class bookappointments extends view
{

    public function output()
    {
        $Home = URLROOT . 'public';
        require APPROOT . '/views/inc/header.php';
        if(isset($_GET['D_id']) . $_GET['app_id']){
            $doct_ID = $_GET['D_id'];
            $App_id =$_GET['app_id'];
            //var_dump($App_id);
           $App = $this->model->getSchedule($App_id);
           //var_dump($App);
           $AppDate = $App->Doctors_Schedule_day;
           //var_dump($App->Doctors_Schedule_day);
           $AppID = $App->Doctors_Schedule_ID; 
           $App_Day= $App->Doctors_Schedule_day;
           $App_Date= $App->Doctors_Schedule_date;
           $App_Time=$App->Doctors_Schedule_Start;
           $Doc = $this->model->getDoctor($doct_ID);
           $DocFName = $Doc->Full_Name;
           $p_ID= $_SESSION['id'];
          // $DocLName = $Doc->FName;
           
           // insert appointment 
           if(isset($_SESSION['id']))
           {
            $Reservation ='Yes';
           $this->model->Add_APP($doct_ID,$p_ID,$AppID,$App_Time,$App_Date,$Reservation);
           $this->model->Reserve($App_id);
           }
       }
       $text = <<<EOT
       <div class="content success-page-cont">
       <div class="container-fluid">
       
           <div class="row justify-content-center">
               <div class="col-lg-6">
               
                   <!-- Success Card -->
                   <div class="card success-card">
                       <div class="card-body">
                           <div class="success-cont">
                               <i class="fas fa-check"></i>
                               <h3>Appointment booked Successfully!</h3>
                               <p>Appointment booked with <strong>$DocFName </strong><br> on <strong>$App_Date at  $App_Time</strong></p>
                               <a href="$Home " class="btn btn-primary view-inv-btn">Back to Home</a>
                           </div>
                       </div>
                   </div>
                   <!-- /Success Card -->
               </div>
           </div>
       </div>
   </div>
   EOT;
           echo $text;
        
        require APPROOT . '/views/inc/footer.php';
    }

}
