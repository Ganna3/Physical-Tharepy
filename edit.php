<?php
  include 'Doctor.php';

  $DoctorObj = new Doctor();
  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $DoctorSch = $DoctorObj->displyaRecordById($editId);
  }
  if(isset($_POST['update'])) {
    $DoctorObj->updateRecord($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>

<div class="card text-center" style="padding:15px;">
</div><br> 

<div class="container">
  <form action="edit.php" method="POST">
    <div class="form-group">
      <label for="name">Doctor Schedule day:</label>
      <select class="form-control" name="UDoctorsScheduleday" value="<?php echo $DoctorSch['Doctors_Schedule_day']; ?>" required="">
     <option value="Saturday">Saturday</option>
  <option value="Sunday">Sunday</option>
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thurday">Thurday</option>
  <option value="Friday">Friday</option>
</select>
    </div>
    <div class="form-group">
       <label>Doctor Schedule date:</label>
        <input type="date" class="form-control" name="UDoctorsScheduledate" value="<?php echo $DoctorSch['Doctors_Schedule_date']; ?>" required="">
    </div>
    <div class="form-group">
      <label >Doctor Schedule Start:</label>
      <input type="time" class="form-control" name="UDoctorsScheduleStart" value="<?php echo $DoctorSch['Doctors_Schedule_Start']; ?>" required="">
    </div>
<div class="form-group">
      <label >Doctor Schedule End:</label>
      <input type="time" class="form-control" name="UDoctorsScheduleEnd" value="<?php echo $DoctorSch['Doctors_Schedule_End']; ?>" required="">
    </div>
    <div class="form-group">
    <label >Average Session Time:(Min)</label>
      <input type="number" min="10" max="60" step="10" class="form-control" name="UAverageSessionTime" value="<?php echo $DoctorSch['Average_Session_Time']; ?>" required="">
    </div>

    <div class="form-group">
      <input type="hidden" name="Doctors_Schedule_ID" value="<?php echo $DoctorSch['Doctors_Schedule_ID']; ?>">
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
    </div>
  </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
