<?php
class AdminSpecialitiesModel extends model
{
    public function viewSpecialities(){
        $this->dbh->query("SELECT * FROM specialities");
        $specialities = $this->dbh->resultSet();
        return $specialities;
    }
    public function addSpeciality($speciality)
    {
        
        $this->dbh->query("INSERT INTO specialities(id,speciality) VALUES(null, :specilaity)");
        
        $this->dbh->bind(':specilaity', $this->$speciality);
        
        return $this->dbh->execute();
    }

    public function removeSpecialities()
    {
        $this->dbh->query("DELETE FROM specialities WHERE id = '$id'"); 

    }

    public function editeSpecialities($speciality)
        {
        //get the id of column
            $this->dbh->query("UPDATE specialities SET speciality=$speciality WHERE  id=$_GET[id]");
    
            $speciality = $this->dbh->resultSet();
            return $speciality;
        
        }


    
    
}
?>