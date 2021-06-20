<?php
require_once 'BookappointmentsModel.php';
class DoctorreportsModel extends BookappointmentsModel{
    //$Patient_ID=$_SESSION["id"];

    Public Function getDoctorsReport($ID)
    {
    $this->dbh->query("SELECT * FROM medical_history WHERE Patient_ID =:ID ");
    $this->dbh->bind(':ID', $ID);
    $Reports = $this->dbh->resultSet();
    return $Reports;
    }

}