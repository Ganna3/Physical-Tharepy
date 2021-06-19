<?php
class AdminSettingsModel extends model
{

    function displaysettings()
    {
    $this->dbh->query("SELECT * FROM websiteinfo");
    $display = $this->dbh->resultSet();
    return $display;
    }
    public function editsettings($websitename,$websitelogo)
    {
        $this->dbh->query("UPDATE websiteinfo SET websitename=$websitename AND websitelogo=$websitelogo WHERE id=$_SESSION[id]");
        
        $info = $this->dbh->resultSet();
        return $info;
    
    }

}
?>