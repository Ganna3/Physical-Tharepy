<?php
class AdminPatientsModel extends model
{


    function displaypatients()
    {
    $this->dbh->query("SELECT * FROM patient");
    $patient = $this->dbh->resultSet();
    return $patient;
    }

}
?>