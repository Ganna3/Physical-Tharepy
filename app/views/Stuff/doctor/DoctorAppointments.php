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
							  <h3 class="page-title">My Schedule</h3>
							  
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
												  
												  <th>schedule day</th>
												  <th>schedule date</th>
												  <th>time</th>
												  <th>price</th>
												  <th>status</th>
											  </tr>
										  </thead>
										  
										  <tbody>
EOT;
  echo $text;

		$this->getsch();
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
function getsch()
{
	$d_id=$_SESSION['Stuff_id'];
	foreach($this->model->getschedules($d_id) as $sch  )
	{
		$status=$sch->Reservation;
		if($status=='Yes')
		{
        $stat="Reserved";
		}else{
		$stat="Not Reserved";
		}
		$day= $sch->Doctors_Schedule_day;
		$time= $sch->Doctors_Schedule_date;
		$start=$sch->Doctors_Schedule_Start;
		$price=$sch->Session_Price;
	$text = <<<EOT
	<tr>
	
	<td>$day</td>
	<td>$time</td>
	<td>$start</td>
	<td>$price</td>
	<td>$stat</td>
	
    </tr>
	
EOT;
echo $text;

	}
}

}