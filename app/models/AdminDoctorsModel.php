<?php
require_once 'DoctorModel.php';
class AdminDoctorsModel extends DoctorModel
{
    public function getDoctors()
    {
        $this->dbh->query("SELECT * FROM clinic_stuff WHERE Role ='Doctor' ");
        $Doctors = $this->dbh->resultSet();
        return $Doctors;
    }

    Public Function getDoctor_info($D_ID)
    {
    $this->dbh->query("SELECT * FROM doctors_data WHERE Doctor_ID =:D_ID ");
    $this->dbh->bind(':D_ID', $D_ID);
    $Doctor_info = $this->dbh->single();
    return $Doctor_info;
    }
}
?>