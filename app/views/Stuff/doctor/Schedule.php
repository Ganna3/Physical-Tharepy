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
									<h4 class="card-title style="margin-bottom:70px;">Basic Form</h4>
								</div>
									<form action="$ADD" method="POST">
										<div class="form-group row">
											
											<label class="col-lg-3 ">First Name</label>
											<div class="col-lg-9">
											<select name="Scheduleday" required=""  class="form-control">
											<option value="Saturday">Saturday</option>
										     <option value="Sunday">Sunday</option>
										 <option value="Monday">Monday</option>
										 <option value="Tuesday">Tuesday</option>
										 <option value="Wednesday">Wednesday</option>
										 <option value="Thurday">Thurday</option>
										 <option value="Friday">Friday</option>
									   </select>  
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Last Name</label>
											<div class="col-lg-9">
												<input type="date" name="day" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Email Address</label>
											<div class="col-lg-9">
												<input type="time" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-3 col-form-label">Username</label>
											<div class="col-lg-9">
												<input type="number" class="form-control">
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