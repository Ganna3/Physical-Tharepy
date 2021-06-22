<?php
 
class AdminModel extends Model
{
    function displaydoctors()
    {
    $this->dbh->query("SELECT * FROM doctor");
    $doctors = $this->dbh->resultSet();
    return $doctors;
    }
    function displayappointments()
    {
    $this->dbh->query("SELECT * FROM appointments");
    $appointmnets = $this->dbh->resultSet();
    return $appointments;
    }
    //////////////////////////////////////////////////////////////////////////////////////
    public function getDoctors()
    {
        $this->dbh->query("SELECT * FROM clinic_stuff WHERE Role ='Doctor' ");
        $Doctors = $this->dbh->resultSet();
        return $Doctors;
    }
    public function getReceptionist()
    {
        $this->dbh->query("SELECT * FROM clinic_stuff WHERE Role ='Receptionist' ");
        $Receptionists = $this->dbh->resultSet();
        return $Receptionists;
    }
    public function getPatients()
    {
        $this->dbh->query("SELECT * FROM patient ");
        $Patients = $this->dbh->resultSet();
        return $Patients;
    }
    Public Function getDoctor_info($D_ID)
    {
    $this->dbh->query("SELECT * FROM doctors_data WHERE Doctor_ID =:D_ID ");
    $this->dbh->bind(':D_ID', $D_ID);
    $Doctor_info = $this->dbh->single();
    return $Doctor_info;
    }
   ////////////////////////////////Appintments/////////////////////////////////////////

   public function getAppointments()
   {
       
       $this->dbh->query("SELECT * FROM appointments WHERE Reservation = 'Yes' ");
       $appointments = $this->dbh->resultSet();
        return $appointments;
       
    
       
   }
   public function getDoctorName($id)
    {
        //var_dump($id);
        $this->dbh->query("SELECT Full_Name FROM clinic_stuff WHERE Stuff_id = :id");
        $this->dbh->bind(':id', $id);
        $DoctorName = $this->dbh->single();
        //var_dump($Doctor);
        return $DoctorName;
        
    }

    public function getPatientFName($id)
    {
        //var_dump($id);
        $this->dbh->query("SELECT FName FROM patient WHERE Patient_ID = :id");
        $this->dbh->bind(':id', $id);
        $PatientFName = $this->dbh->single();
        //var_dump($Doctor);
        return $PatientFName;
        
    }

    public function getPatientLName($id)
    {
        //var_dump($id);
        $this->dbh->query("SELECT LName FROM patient WHERE Patient_ID = :id");
        $this->dbh->bind(':id', $id);
        $PatientLName = $this->dbh->single();
        //var_dump($Doctor);
        return $PatientLName;
        
    }
    
   
    
   
   
    
    


}
?>