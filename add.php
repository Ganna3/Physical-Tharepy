<?php
  include 'Doctor.php';

  $DoctorObj = new Doctor();
  if(isset($_POST['submit'])) {
    $DoctorObj->InsertNewSchedule($_POST);
  }

?>
<!DOCTYPE html>

<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<h1 > trial </h1>
<div class="container">
  <form action="add.php" method="POST">
    <div class="form-group">
      <label for="name">Doctor Schedule day:</label>
  <select name="DoctorsScheduleday" required="" class="form-control">
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
      <input type="date" class="form-control" name="DoctorsScheduledate" required="">
    </div>
    <div class="form-group">
      <label >Doctor Schedule Start:</label>
      <input type="Time" class="form-control" name="DoctorsScheduleStart" required="">
    </div>
    <div class="form-group">
      <label >Doctor Schedule End:</label>
      <input type="Time" class="form-control" name="DoctorsScheduleEnd" required="">
    </div>
    <div class="form-group">
      <label >Average Session Time (Min):</label>
      <input type="number" min="10" max="60" step="10" class="form-control" name="AverageSessionTime"required=""value="Min">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
