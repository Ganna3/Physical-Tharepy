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
      //  $this->dbh->query("INSERT INTO patient (name, email, password) VALUES(:uname, :email, :pass)");
      "INSERT INTO patient (Email,Password,FName,LName,Username,birthdate,Gender,Phone_Num,Image,Address) VALUES ('$email', '$password','$email','$fname','$lname','$username','$Birthdate','$Gender','$number','$image','$address')";
        $this->dbh->bind(':uname', $this->name);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':pass', $this->password);

        return $this->dbh->execute();
    }
}
