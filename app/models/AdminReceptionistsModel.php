<?php
class AdminReceptionistsModel extends model
{

   
    function displayreceptionists()
    {
    $this->dbh->query("SELECT * FROM receptionists");
    $preceptionist= $this->dbh->resultSet();
    return $receptionist;
    }
   
}
?>