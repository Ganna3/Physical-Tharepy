<?php
//temp for testing
require_once 'UserModel.php';
class PostModel extends UserModel
{
    
    public function getPatients()
    {
        $this->dbh->query("SELECT * FROM patient");

        return $this->dbh->resultSet();
    }
}
