<?php
require_once 'bookappointmentsModel.php';
class appointmentshistoryModel extends bookappointmentsModel 
{
    public function getReservedAppointments($id)
    {
        //var_dump($id);
        $this->dbh->query("SELECT * FROM appointments WHERE Patient_ID = :id And Patient_attended = 'Pending' ");
        $this->dbh->bind(':id', $id);
        $Appointment = $this->dbh->resultSet();
        return $Appointment;
        //var_dump($Doctor);
     
        
    }   
    public function Delete_App($id)
    {
        $this->dbh->query("DELETE FROM appointments WHERE  	Appointment_ID  = :id ");
        $this->dbh->bind(':id', $id);
        $Appointment = $this->dbh->execute();
        return $Appointment;

    }
    public function UpdateCancel($id)
    {
        $this->dbh->query("UPDATE `doctors_schedule` SET `Reservation`= 'No'  WHERE Doctors_Schedule_ID  = :id ");
        $this->dbh->bind(':id', $id);
        $Update_Canecl = $this->dbh->execute();
        return $Update_Canecl;



    }



}
?>