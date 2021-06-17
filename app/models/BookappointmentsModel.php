<?php
class bookappointmentsModel extends Model
{
    
    private $Doctor_ID;
    public function getDoctor($id)
    {
        //var_dump($id);
        $this->dbh->query("SELECT * FROM doctor WHERE Doctor_ID = :id");
        $this->dbh->bind(':id', $id);
        $Doctor = $this->dbh->single();
        //var_dump($Doctor);
        return $Doctor;
        
    }
    public function getAppointments($id)
    {
        //var_dump($id);
        $this->dbh->query("SELECT * FROM doctors_schedule WHERE Doctor_ID = :id");
        $this->dbh->bind(':id', $id);
        $Appointment = $this->dbh->resultSet();
        return $Appointment;
        //var_dump($Doctor);
     
        
    }
    public function getSchedule($id)
    {
        //var_dump($id);
        $this->dbh->query("SELECT * FROM doctors_schedule WHERE Doctors_Schedule_ID = :id");
        $this->dbh->bind(':id', $id);
        $Appointment = $this->dbh->single();
        return $Appointment;
        //var_dump($Doctor);
     
        
    }
   
    public function Add_APP($Doctor_ID,$Patient_ID,$Doctors_Schedule_ID,$Time,$Day)
    {
      $this->dbh->query("INSERT INTO appointments (Doctor_ID ,Patient_ID,Doctors_Schedule_ID,Time,Day) VALUES(:D_ID, :P_ID,:D_S_ID,:Time,:Day)");
     // "INSERT INTO patient (Email,Password,FName,LName,Username,birthdate,Gender,Phone_Num,Image,Address) VALUES (:email, :password,:fname,:lname,:username,:Birthdate,:Gender',:number,:image,:address)");
        $this->dbh->bind(':D_ID', $Doctor_ID);
        $this->dbh->bind(':P_ID', $Patient_ID);
        $this->dbh->bind(':D_S_ID',$Doctors_Schedule_ID);
        $this->dbh->bind(':Time', $Time);
        $this->dbh->bind(':Day', $Day);
        return $this->dbh->execute();
    }
}
?>