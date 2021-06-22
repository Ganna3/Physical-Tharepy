<?php
require_once 'UserModel.php';
class RegisterModel extends UserModel
{ 
  
    protected $nameErr;
    protected $confirmPassword;
    protected $confirmPasswordErr;
    protected $Phone_Err;
    protected $FildErr;

    public function __construct()
    {
        parent::__construct();
        $this->Phone_Err="";
        $this->nameErr = "";
        $this->FildErr = "";
        $this->confirmPassword = "";
        $this->confirmPasswordErr = "";
    }

    public function getEmptyErr()
    {

        return $this->FildErr;
    }

    public function setEmptyErr($FildErr)
    {

        $this->FildErr = $FildErr;
    }
    public function getPhoneErr()
    {
        return $this->Phone_Err;
    }

    public function SetPhoneErr($Phone_Err)
    {
        $this->Phone_Err = $Phone_Err;
    }
    public function getNameErr()
    {
        return $this->nameErr;
    }

    public function SetNameErr($nameErr)
    {
        
        
            $this->nameErr = $nameErr;
        
        
    }

    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
    }

    public function getConfirmPasswordErr()
    {
        return $this->confirmPasswordErr;
    }
    public function setConfirmPasswordErr($confirmPasswordErr)
    {
        $this->confirmPasswordErr = $confirmPasswordErr;
    }

    public function signup()
    {
      $this->dbh->query("INSERT INTO patient (Email,Password,FName,LName,Username,birthdate,Gender,Phone_Num,Image,Address) VALUES(:Email, :password,:fname,:lname,:username,:Birthdate,:Gender,:Phone_number,:image,:address)");
     // "INSERT INTO patient (Email,Password,FName,LName,Username,birthdate,Gender,Phone_Num,Image,Address) VALUES (:email, :password,:fname,:lname,:username,:Birthdate,:Gender',:number,:image,:address)");
        $this->dbh->bind(':Email', $this->email);
        $this->dbh->bind(':fname', $this->fname);
        $this->dbh->bind(':lname', $this->lname);
        $this->dbh->bind(':username', $this->username);
        $this->dbh->bind(':address', $this->address);
        $this->dbh->bind(':Gender', $this->Gender);
        $this->dbh->bind(':password', $this->password);
        $this->dbh->bind(':Phone_number', $this->Phone_number);
        $this->dbh->bind(':Birthdate', $this->Birthdate);
        $this->dbh->bind(':image', $this->image);
        return $this->dbh->execute();
    }
}
