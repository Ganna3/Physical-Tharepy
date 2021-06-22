<?php
require_once 'StuffModel.php';

    class ReceptionistsModel extends Model
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
        public function getDoctors()
        {
            $this->dbh->query("SELECT * FROM clinic_stuff WHERE Role ='Doctor' ");
            $Doctors = $this->dbh->resultSet();
            return $Doctors;
        }
        public function getPatients()
        {
            $this->dbh->query("SELECT * FROM patient WHERE Role ='Patient' ");
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
        Public Function getpateintinfo($P_ID)
        {
        $this->dbh->query("SELECT * FROM patient WHERE Patient_ID =:P_ID ");
        $this->dbh->bind(':P_ID', $P_ID);
        $Patient_info = $this->dbh->single();
        return $Patient_info;
        }


}
?>