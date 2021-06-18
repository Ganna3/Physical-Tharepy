<?php
class bookappointmentsModel extends Model
{
    
    private $Doctor_ID;
    public function getDoctor($id)
    {
        //var_dump($id);
        $this->dbh->query("SELECT * FROM clinic_stuff WHERE Stuff_id = :id");
        $this->dbh->bind(':id', $id);
        $Doctor = $this->dbh->single();
        //var_dump($Doctor);
        return $Doctor;
        
    }
    public function Reserve($App_ID)
    {
         $this->dbh->query("UPDATE `doctors_schedule` SET `Reservation`= 'Yes'  WHERE Doctors_Schedule_ID  = :id ");

        $this->dbh->bind(':id', $App_ID);
        //$this->dbh->bind(':Done',$Reservation);
        return $this->dbh->execute();
    }
    public function getAppointments($id)
    {
        //var_dump($id);
        $this->dbh->query("SELECT * FROM doctors_schedule WHERE Doctor_ID = :id And Reservation = 'No' ");
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
   
    public function Add_APP($Doctor_ID,$Patient_ID,$Doctors_Schedule_ID,$Time,$Day,$Reservation)
    {

      $this->dbh->query("INSERT INTO appointments (Doctor_ID ,Patient_ID,Doctors_Schedule_ID,Time,Day,Reservation) VALUES(:D_ID, :P_ID,:D_S_ID,:Time,:Day,:Reserve)");
        $this->dbh->bind(':D_ID', $Doctor_ID);
        $this->dbh->bind(':P_ID', $Patient_ID);
        $this->dbh->bind(':D_S_ID',$Doctors_Schedule_ID);
        $this->dbh->bind(':Time', $Time);
        $this->dbh->bind(':Day', $Day);
        $this->dbh->bind(':Reserve', $Reservation);
        return $this->dbh->execute();
    }
}
?>