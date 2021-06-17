<?php
class AdminAppointmentsModel extends model
{
    public $title = 'Admin';
    function displayappointments()
    {
    $this->dbh->query("SELECT * FROM appointments");
    $appointmnets = $this->dbh->resultSet();
    return $appointments;
    }

}
?>