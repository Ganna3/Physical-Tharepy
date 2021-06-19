<?php
class ReceptionistsProfileModel extends model
{

    public $title = 'Admin';

    
    public function editprofile($name,$DateofBirth,$Email)
    {
        $this->dbh->query("UPDATE admin SET name=$name AND DateofBirth=$DateofBirth AND EmailID=$Email WHERE id =$_SESSION[id]");

        $profile = $this->dbh->resultSet();
        return $profile;  
    }
    
    public function viewdata()
    {
    $this->dbh->query("SELECT * FROM admin");
    $data = $this->dbh->resultSet();
    return $data;
    }

}
?>