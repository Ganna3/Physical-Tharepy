<?php
class FinddoctorsModel extends model{
     //public $title = 'About MIU SE305 Blog';
     public function getDoctors()
     {
         $this->dbh->query("SELECT * FROM doctor");
         $Doctors = $this->dbh->resultSet();
         return $Doctors;
     }
   

}