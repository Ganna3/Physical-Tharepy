<?php
class AdminDoctorsModel extends model
{

   
    function displaydoctors()
    {
    $this->dbh->query("SELECT * FROM doctor");
    $doctors = $this->dbh->resultSet();
    return $doctors;
    }

}
?>