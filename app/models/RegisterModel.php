<?php
require_once 'UserModel.php';
class RegisterModel extends UserModel
{ 
  
    protected $nameErr;
    protected $confirmPassword;
    protected $confirmPasswordErr;
    public function __construct()
    {
        parent::__construct();
        $this->nameErr = "";
        $this->confirmPassword = "";
        $this->confirmPasswordErr = "";
    }

    public function getNameErr()
    {
        return $this->nameErr;
    }

    public function setNameErr($nameErr)
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
