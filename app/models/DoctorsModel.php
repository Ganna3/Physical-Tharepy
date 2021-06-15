<?php
class DoctorsModel extends  Model
{
    
    public function getDoctors()
    {
        $this->dbh->query("SELECT * FROM doctor");
        $Doctors = $this->dbh->resultSet();
        return $Doctors;
    }
}
