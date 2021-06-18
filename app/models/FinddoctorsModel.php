<?php
require_once 'BookappointmentsModel.php';
class FinddoctorsModel extends BookappointmentsModel{
     //public $title = 'About MIU SE305 Blog';
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