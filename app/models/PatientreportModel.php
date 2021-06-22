<?php
require_once 'BookappointmentsModel.php';
class PatientreportModel extends BookappointmentsModel
{

    
    public function getReportData($id,$R_id)
    {
        $this->dbh->query("SELECT * FROM medical_history WHERE Patient_ID =:id AND Report_id = :r_id ");
        $this->dbh->bind(':id',$id);
        $this->dbh->bind(':r_id',$R_id);
        $Rep_info = $this->dbh->single();
        return $Rep_info;
    }
}
?>