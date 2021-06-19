<?php
class ReceptionistsDoctorsModel extends model
{

    public $title = 'Receptionists';
    function displaydoctors()
    {
    $this->dbh->query("SELECT * FROM doctors");
    $doctors = $this->dbh->resultSet();
    return $doctors;
    }

}
?>