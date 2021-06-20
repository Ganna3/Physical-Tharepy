<script>
function myFunction() {
  alert("ARE YOU SURE ?");
}
</script>
<?php

class appointmentshistory extends view
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

<div class="card-body">

    <div class="table-responsive">
        <table class="datatable table table-stripped">
            <thead>
                <tr>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Speciality</th>
                    <th>Salary</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
EOT;
    echo $text;

$this->ViewApp();
$text =<<<EOT
 
            </tbody>
            </table>
    </div>
</div>
EOT;
    echo $text;
   
  }
  function ViewApp()
  {
    $App_Page= URLROOT . 'public/users/appointmentshistory';
    if(isset($_GET['App_id'])){
        $App_id=$_GET['App_id'];
        $Doc_Schuale_id =$_GET['Doc_Sch'];
        $this->model->Delete_App($App_id);
        $this->model->UpdateCancel($Doc_Schuale_id);
    }

    foreach($this->model-> getReservedAppointments($_SESSION["id"]) as $App  )
    { 
        $Doc_Schuale_id= $App->Doctors_Schedule_ID;
        $App_Date =$App->Day;
        $App_Time =$App->Time;
        $App_id = $App ->Appointment_ID;
        $Doctor = $App->Doctor_ID;
        $info = $this->model->getDoctor_info($Doctor);
        $Doc = $this->model->getDoctor($Doctor);
        $D_Name = $Doc->Full_Name;
        $D_Specilaity =  $info->Expert_at;
        $D_Salary =  $info->Salary;
       

        $text =<<<EOT
            <tr>
                <td>$D_Name</td>
                <td>$App_Date</td>
                <td>$App_Time PM</td>
                <td>$D_Specilaity</td>
                <td>$D_Salary LE</td>
                <td>
                <div class="btn btn-danger">
				<a class="apt-btn" onclick="myFunction()" name="$App_id" href="$App_Page&App_id=$App_id&Doc_Sch=$Doc_Schuale_id">Cancel</a>
				</div>
                </td>
                
            </tr>
  

EOT;

echo $text;
    }
  }
}

?>