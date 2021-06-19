<?php
class ReceptionistsAppointmentsModel extends model
{

    public $title = 'Receptionists';

    function displayappointments()
    {
    $this->dbh->query("SELECT * FROM appointments");
    $appointmnets = $this->dbh->resultSet();
    return $appointments;
    }

}
?>