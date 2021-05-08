<?php
  
  include 'Doctor.php';
  $DoctorObj = new Doctor();

  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $deleteId = $_GET['deleteId'];
      $DoctorObj->deleteRecord($deleteId);
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
  <h4>My Schedule</h4>
</div><br><br> 

<div class="container">
  <?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              New Schedule added successfully
            </div>";
      } 
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Schedule updated successfully
            </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Schedule deleted successfully
            </div>";
    }
    if (isset($_GET['msg4']) == "missing") {
      echo "<div class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
                Complete your data 
            </div>";
    }
  ?>
  <h2>View Schedules
    <a href="add.php" class="btn btn-primary" style="float:right;">Add New Schedule</a>
  </h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Doctors Schedule day</th>
        <th>Doctors Schedule date</th>
        <th>Doctors Schedule Start</th>
        <th>Doctors Schedule End</th>
        <th>Average Session Time</th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $Doctor = $DoctorObj->displayData(); 
          foreach ($Doctor as $DoctorSch) {
        ?>
        <tr>
          <td><?php echo $DoctorSch['Doctors_Schedule_day'] ?></td>
          <td><?php echo $DoctorSch['Doctors_Schedule_date'] ?></td>
          <td><?php echo $DoctorSch['Doctors_Schedule_Start'] ?></td>
          <td><?php echo $DoctorSch['Doctors_Schedule_End'] ?></td>
          <td><?php echo $DoctorSch['Average_Session_Time'] ?>min</td>
          <td>
            <a href="edit.php?editId=<?php echo $DoctorSch['Doctors_Schedule_ID'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
            <a href="index.php?deleteId=<?php echo $DoctorSch['Doctors_Schedule_ID'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
