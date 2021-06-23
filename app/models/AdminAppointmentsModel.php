<?php
require_once 'AdminModel.php';
class AdminAppointmentsModel extends AdminModel
{

    function displayappointments()
    {
    $this->dbh->query("SELECT * FROM appointments");
    $appointmnets = $this->dbh->resultSet();
    return $appointments;
    }

}
?>