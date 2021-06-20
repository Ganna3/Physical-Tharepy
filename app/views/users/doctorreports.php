<?php
class  doctorreports extends view
{
    
    

    public function output()
    {
        
        //$Patient_ID=$_SESSION["id"];
        
      //$title = $this->model->title;
     require APPROOT . '/views/inc/header.php';
     // require APPROOT . '/views/inc/AdminNavbar.php';
      $this->viewreports();
      require APPROOT . '/views/inc/footer.php';
    }
    public function viewreports()
	{
        $pic = URLROOT . 'public/assets/img/Doctors';
        foreach($this->model->getDoctorsReport($_SESSION["id"]) as $Reports  )
        {
            $Report_Date = $Reports->App_Date;
            $Report_id = $Reports->Report_id;
            $Doctor = $Reports->Doctor_ID;
            $info = $this->model->getDoctor($Doctor);
            $D_Name = $info->Full_Name;
            $D_Pic = $info->Profile_pic;
$text =<<<EOT
<div class="appointments"

<!-- Appointment List -->
<div class="appointment-list">
    <div class="profile-info-widget">
        <a href="patient-profile.html" class="booking-doc-img">
            <img src="$pic/$D_Pic" alt="User Image">
        </a>
        <div class="profile-det-info">
            <h3><a href="patient-profile.html">$D_Name</a></h3>
            <div class="patient-details">
                <h5><i class="far fa-clock"></i>$Report_Date</h5>
                           </div>
        </div>
    </div>
    <div class="appointment-action">
        <a href="   &id=$Report_id" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
            <i class="far fa-eye"></i> View
        </a>
        <a href="javascript:void(0);" class="btn btn-sm bg-success-light">
            <i class="fas fa-check"></i> Print
        </a>
    </div>
</div>


</div>
        

EOT;

    echo $text;
        }
  }
}
?>