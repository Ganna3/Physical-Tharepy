<?php
class Schedule extends view{
public function Output(){
  //$title = $this->model->title;
  //$subtitle = $this->model->subtitle;
 // require APPROOT . '/views/inc/header.php';
 $ADD = URLROOT . 'public/Stuff/Schedule';
include APPROOT . '/views/inc/doctcorupperDashboard.php';
include APPROOT . '/views/inc/doctorLeftNavbar.php';
  $text = <<<EOT

<div class="row ">
						<div class="col-xl-9 ">
							<div class="card flex-fill">
								
								<div class="card-body" style="margin-left:300px; margin-top:70px;">
								<div >
									<h4 class="card-title style="margin-bottom:70px;">Add schedule</h4>
								</div>
									<form action="$ADD" method="POST">
										<div class="form-group row">
											
											<label class="col-lg-3 ">Schedule Day </label>
											<div class="col-lg-9">
											<select name="Doctors_Schedule_day" required=""  class="form-control">
											<option value="Saturday">Saturday</option>
										     <option value="Sunday">Sunday</option>
										 <option value="Monday">Monday</option>
										 <option value="Tuesday">Tuesday</option>
										 <option value="Wednesday">Wednesday</option>
										 <option value="Thursday">Thursday</option>
										 <option value="Friday">Friday</option>
									   </select>  
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Schecdule Date</label>
											<div class="col-lg-9">
												<input type="date" name="Doctors_Schedule_date" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Schedule Time</label>
											<div class="col-lg-9">
												<input type="time"  name="Doctors_Schedule_Start" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Session Price</label>
											<div class="col-lg-9">
												<input type="number" name="Session_Price"  class="form-control">
											</div>
										</div>
								
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
</div>
EOT;
echo $text;
}






}