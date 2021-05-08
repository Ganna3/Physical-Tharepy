<?php
	class Doctor
	{

	private $servername = "localhost";
	private $username 	= "root";
	private $password 	= "";
	private $database 	= "clinic_web_app";
	public  $con; 
		public function __construct()
		{
			$this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
			if(mysqli_connect_error()) {
				trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
			}else{
				return $this->con;
			}
		}
		public function InsertNewSchedule($post)
		{
			$Doctor_id='1';// it will be sessions
			$DoctorsScheduleday = $this->con->real_escape_string($_POST['DoctorsScheduleday']);
			$DoctorsScheduledate = $this->con->real_escape_string($_POST['DoctorsScheduledate']);
			$DoctorsScheduleStart = $this->con->real_escape_string($_POST['DoctorsScheduleStart']);
			$DoctorsScheduleEnd = $this->con->real_escape_string($_POST['DoctorsScheduleEnd']);
			if($DoctorsScheduleStart>=$DoctorsScheduleEnd)
			{
				echo "<div class='alert alert-warning alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
               Enter Valid data
            </div>";
			}
else{
			$sql="INSERT INTO doctors_schedule(Doctor_ID,Doctors_Schedule_day,Doctors_Schedule_date,Doctors_Schedule_Start,Doctors_Schedule_End,Average_Session_Time) VALUES 
			('$Doctor_id','$DoctorsScheduleday','$DoctorsScheduledate', '$DoctorsScheduleStart','$DoctorsScheduleEnd','$AverageSessionTime')";
			$result = mysqli_query($this->con,$sql);
			if ($result) {
header("Location:index.php?msg1=insert");
} else {
  echo "Error: " . $sql . "<br>" . $this->con->error;
}

		}
		}
	
		public function displayData()
		{
			$query = "SELECT * FROM doctors_schedule";
			$result = $this->con->query($query);
			if ($result->num_rows > 0) {
				$data = array();
				while ($row = $result->fetch_assoc()) {
					$data[] = $row;
				}
				return $data;
			}else{
				echo "No found schedules";
			}
		}
		public function displyaRecordById($id)
		{
			$query = "SELECT * FROM doctors_schedule WHERE Doctors_Schedule_ID = '$id'";
			$result = $this->con->query($query);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				return $row;
			}else{
				echo "Schedule not found";
			}
		}
		public function updateRecord($postData)
		{
			$DoctorsScheduleday = $this->con->real_escape_string($_POST['UDoctorsScheduleday']);
			$DoctorsScheduledate = $this->con->real_escape_string($_POST['UDoctorsScheduledate']);
			$DoctorsScheduleStart = $this->con->real_escape_string($_POST['UDoctorsScheduleStart']);
			$DoctorsScheduleEnd = $this->con->real_escape_string($_POST['UDoctorsScheduleEnd']);
			$AverageSessionTime = $this->con->real_escape_string($_POST['UAverageSessionTime']);
			$Doctors_Schedule_ID= $this->con->real_escape_string($_POST['Doctors_Schedule_ID']);
			if (!empty($Doctors_Schedule_ID) && !empty($postData)) {
				$sql = "UPDATE doctors_schedule SET Doctors_Schedule_day='$DoctorsScheduleday',Doctors_Schedule_date='$DoctorsScheduledate',Doctors_Schedule_Start='$DoctorsScheduleStart',Doctors_Schedule_End='$DoctorsScheduleEnd', Average_Session_Time='$AverageSessionTime' WHERE Doctors_Schedule_ID = '$Doctors_Schedule_ID'";
				$result = mysqli_query($this->con,$sql);
			if ($result) {
  header("Location:index.php?msg2=update");
} else {
  echo "Error: " . $sql . "<br>" . $this->con->error;
}
				
			}
			
		}
		public function deleteRecord($id)
		{
			$query = "DELETE FROM doctors_schedule WHERE Doctors_Schedule_ID = '$id'";
			$sql = mysqli_query($this->con,$query);
			if ($sql) {
				header("Location:index.php?msg3=delete");
			}else{
				echo "Error: " . $sql . "<br>" . $this->con->error;
			}
		}

	}
?>