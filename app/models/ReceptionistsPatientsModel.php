<?php
class ReceptionistsPatientsModel extends model
{

    public $title = 'Admin';
    function displaypatients()
    {
    $this->dbh->query("SELECT * FROM patient");
    $patient = $this->dbh->resultSet();
    return $patient;
    }

}
?>