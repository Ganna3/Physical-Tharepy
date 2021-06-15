<?php
class  doctorreports extends view
{


    public function output()
    {
      //$title = $this->model->title;
     require APPROOT . '/views/inc/header.php';
     // require APPROOT . '/views/inc/AdminNavbar.php';
      $this->viewreports();
      require APPROOT . '/views/inc/footer.php';
    }
    public function viewreports()
	{
$text =<<<EOT
<div class="appointments">

<!-- Appointment List -->
<div class="appointment-list">
    <div class="profile-info-widget">
        <a href="patient-profile.html" class="booking-doc-img">
            <img src="assets/img/patients/patient.jpg" alt="User Image">
        </a>
        <div class="profile-det-info">
            <h3><a href="patient-profile.html">Richard Wilson</a></h3>
            <div class="patient-details">
                <h5><i class="far fa-clock"></i> 14 Nov 2019, 10.00 AM</h5>
                <h5><i class="fas fa-map-marker-alt"></i> Newyork, United States</h5>
            </div>
        </div>
    </div>
    <div class="appointment-action">
        <a href="#" class="btn btn-sm bg-info-light" data-toggle="modal" data-target="#appt_details">
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
?>