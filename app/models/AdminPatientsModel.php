<?php
require_once 'AdminModel.php';
class AdminPatientsModel extends AdminModel
{


    function displaypatients()
    {
    $this->dbh->query("SELECT * FROM patient");
    $patient = $this->dbh->resultSet();
    return $patient;
    }

}
?>