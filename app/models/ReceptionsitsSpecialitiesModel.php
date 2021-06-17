<?php
class ReceptionsitsSpecialitiesModel extends model
{
    public $title = 'Admin';

    public function viewSpecialities(){
        $this->dbh->query("SELECT * FROM specialities");
        $specialities = $this->dbh->resultSet();
        return $specialities;
    }
    public function addSpecialities(){

    }

    public function removeSpecialities(){

    }

    public function editeSpecialities(){

    }
    

}
?>