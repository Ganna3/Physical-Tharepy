<?php
require_once 'DoctorModel.php';
class AdminDoctorsModel extends DoctorModel
{
    public function getDoctors()
    {
        $this->dbh->query("SELECT * FROM clinic_stuff WHERE Role ='Doctor' ");
        $Doctors = $this->dbh->resultSet();
        return $Doctors;
    }

    Public Function getDoctor_info($D_ID)
    {
    $this->dbh->query("SELECT * FROM doctors_data WHERE Doctor_ID =:D_ID ");
    $this->dbh->bind(':D_ID', $D_ID);
    $Doctor_info = $this->dbh->single();
    return $Doctor_info;
    }

    Public Function addDoctor(){
    $this->dbh->query("INSERT INTO doctors_data (Expert_at,Degree,Salary,Spaciality_Pic) VALUES( :Expert_at,:Degree,:Salary,:Spaciality_Pic)");
                
            
               // $this->dbh->bind(':D_ID',null);
                $this->dbh->bind(':Expert_at',$this->Expert_at);
                $this->dbh->bind(':Degree', $this->Degree);
                $this->dbh->bind(':Salary', $this->Salary);
                $this->dbh->bind(':Spaciality_Pic', $this->Spaciality_Pic);
                return $this->dbh->execute();

    }
    
   /* Public Function getStuffID()
    {
    $this->dbh->query("SELECT Doctor_ID FROM doctors_data WHERE Expert_at =:expert_at ");
    $this->dbh->bind(':expert_at',$this->Expert_at);
    $stuffID = $this->dbh->single();
    
    return $stuffID ;
    $stuffID->setID(stuffID);
    
    }*/
Public Function addDoctorInStuff(){
    $this->dbh->query("INSERT INTO clinic_stuff (Full_Name,Email,Password,PhoneNum,Gender,Address,Birthday,Profile_pic,Role) VALUES(:Full_Name,:Email,:Password,:PhoneNum,:Gender,:Address,:Birthday,:Profile_pic,:Role)");
                
            
                //$this->dbh->bind(':D_ID', );

                $this->dbh->bind(':Full_Name',$this->username);
                $this->dbh->bind(':Email', $this->email);
                $this->dbh->bind(':Password', $this->password);
                $this->dbh->bind(':PhoneNum', $this->Phone_number);

                $this->dbh->bind(':Gender',$this->Gender);
               $this->dbh->bind(':Address',$this->address);
                $this->dbh->bind(':Birthday', $this->Birthdate);
                $this->dbh->bind(':Profile_pic', $this->image);
                $this->dbh->bind(':Role', 'Doctor');
                return $this->dbh->execute();
}


}
?>