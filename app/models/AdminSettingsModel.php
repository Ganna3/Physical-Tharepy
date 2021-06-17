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
        $this->dbh->query("UPDATE websiteinfo SET websitname=$websitename,websitelogo=$websotelogo WHERE id=$_SESSION['id']");

        $info = $this->dbh->resultSet();
        return $info;
    
    }

}
?>