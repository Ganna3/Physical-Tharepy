<?php
class ScheduleModel extends model
{
  protected $Doctors_Schedule_ID;
  protected $Doctor_ID;
  protected $Doctors_Schedule_day;
  protected $Doctors_Schedule_date;
  protected $Doctors_Schedule_Start;
  protected $Session_Price;


  public function __construct()
    {
        $this->$Doctor_ID = $_SESSION['Stuff_id'];
        parent::__construct();
        $this->Doctors_Schedule_day="";
        $this->Doctors_Schedule_date="";
        $this->Doctors_Schedule_Start="";
        $this->Session_Price="";
    }

    public function getschedule_day()
    {
        return $this->Doctors_Schedule_day;
    }
    public function setschedule_day($Doctors_Schedule_day)
    {
        $this->Doctors_Schedule_day = $Doctors_Schedule_day;
    }


    public function getschedule_date()
    {
        return $this->Doctors_Schedule_date;
    }
    public function setschedule_date($Doctors_Schedule_date)
    {
        $this->Doctors_Schedule_date = $Doctors_Schedule_date;
    }


    public function getschedule_start()
    {
        return $this->Doctors_Schedule_Start;
    }
    public function setschedule_start($Doctors_Schedule_Start)
    {
        $this->Doctors_Schedule_Start = $Doctors_Schedule_Start;
    }


    public function getSession_Price()
    {
        return $this->Session_Price;
    }
    public function setSession_Price($Session_Price)
    {
        $this->Session_Price = $Session_Price;
    }
    public function Schedule()
    {
      
      $this->dbh->query("INSERT INTO doctors_schedule (Doctor_ID ,Doctors_Schedule_day,Doctors_Schedule_date,Doctors_Schedule_Start,Session_Price) VALUES( :D_ID,:schday,:schdate,:schstart,:price)");
        
    
        $this->dbh->bind(':D_ID',$this->$Doctor_ID);
        $this->dbh->bind(':schday',$this->Doctors_Schedule_day);
        $this->dbh->bind(':schdate', $this->Doctors_Schedule_date);
        $this->dbh->bind(':schstart', $this->Doctors_Schedule_Start);
        $this->dbh->bind(':price', $this->Session_Price);
        return $this->dbh->execute();
    }
    public function getschedules($id)
    {
        $this->dbh->query("SELECT * FROM doctors_schedule WHERE Doctor_ID = :ID");
        $this->dbh->bind(':ID',$id);
        $SCHEDULE = $this->dbh->resultSet();
        return $SCHEDULE;
    }

     


}
