<?php
class ReceptionistsHomeModel extends model
{

    public $title = 'Admin';
    function displaydoctors()
    {
    $this->dbh->query("SELECT * FROM doctors");
    $doctors = $this->dbh->resultSet();
    return $doctors;
    }

    function displaypatients()
    {
    $this->dbh->query("SELECT * FROM patient");
    $patient = $this->dbh->resultSet();
    return $patient;
    }


}
?>