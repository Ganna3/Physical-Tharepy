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
  

}