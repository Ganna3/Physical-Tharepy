<?php
class AdminHomeModel extends model
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


}
?>