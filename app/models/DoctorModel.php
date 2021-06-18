<?php
require_once 'StuffModel.php'; 
class DoctorModel extends StuffModel
{
    protected $Expert_at ;
    protected $Degree;
    protected $Doctor_Added_on;
    protected $Status;
    protected $Salary ;
    protected $Spaciality_Pic;
    public function __construct()
    {
        parent::__construct();
        $this->Expert_at ="";
        $this->Degree ="";
        $this->Doctor_Added_on ="";
        $this->Status ="";
        $this->Spaciality_Pic ="";
        $this->Salary="";
        
    }
    public function getExpert_at()
    {
        return $this->Expert_at;
    }
    public function setExpert_at($Expert_at)
    {
        $this->Expert_at = $Expert_at;
    }
    public function getDegree()
    {
        return $this->Degree;
    }
    public function setDegree($Degree)
    {
        $this->Degree = $Degree;
    }
    public function getDoctor_Added_on()
    {
        return $this->Doctor_Added_on;
    }
    public function setDoctor_Added_on($Doctor_Added_on)
    {
        $this->Doctor_Added_on = $Doctor_Added_on;
    }

    public function getSalary()
    {
        return $this->Salary;
    }
    public function setSalary($Salary)
    {
        $this->Salary =$Salary;
    }
    public function getSpaciality_Pic()
    {
        return $this->Spaciality_Pic;
    }
    public function setSpaciality_Pic($Spaciality_Pic)
    {
        $this->Spaciality_Pic = $Spaciality_Pic;
    }
    public function Check_Status()
    {
        $this->dbh->query("SELECT Status FROM doctor");
        $Doctor = $this->dbh->resultSet();
        return $Doctor;
    }

}
?>