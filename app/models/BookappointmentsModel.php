<?php
class bookappointmentsModel extends model
{
    private $Doctor_ID;
    public function getDoctor($id)
    {
        var_dump($id);
        $this->dbh->query("SELECT * FROM doctor WHERE Doctor_ID = :id");
        $this->dbh->bind(':id', $id);
        $Doctor = $this->dbh->single();
        var_dump($Doctor);
        return $Doctor;
        
    }
}
?>