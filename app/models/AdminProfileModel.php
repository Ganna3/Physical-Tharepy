<?php
class AdminProfileModel extends model
{

    public $title = 'Admin';

    public function editprofile($name,$DateofBirth,$EmailID)
    {
        $this->dbh->query("UPDATE admin SET name=$name,DateofBirth=$DateofBirth,EmailID=$EmailID WHERE id=$_SESSION['id']");

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