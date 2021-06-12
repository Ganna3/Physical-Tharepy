<?php
class UserModel extends model
{
    private $ID;
    private $fname;
    private $lname;
    private $username;
    private $address;
    private $Gender;
    private $password;
    private $Phone_number;
    private $email;
    private $Birthdate;
    private $image;

    protected $emailErr;
    protected $passwordErr;

    public function __construct()
    {
        parent::__construct();
        $this->lname="";
        $this->image="";
        $this->fname="";
        $this->username="";
        $this->email="";
        $this->number="";
        $this->Birthdate="";
        $this->address="";
        $this->password="";
        $this->Gender="";
       // $this->email    = "";
        //$this->password = "";

        $this->emailErr    = "";
        $this->passwordErr = "";
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmailErr()
    {
        return $this->emailErr;
    }
    public function setEmailErr($emailErr)
    {
        $this->emailErr = $emailErr;
    }

    public function getPasswordErr()
    {
        return $this->passwordErr;
    }
    public function setPasswordErr($passwordErr)
    {
        $this->passwordErr = $passwordErr;
    }
    function getLName() {
        return $this->lname;
      }
      function getFName() {
        return $this->fname;
      }
      function setFName($fname) {
        return $this->fname = $fname;
      }
      function setLName($lname) {
        return $this->lname = $lname;
      }

      function getNumber() {
        return $this->Phone_number;
      }
      function setNumber($Phone_number) {
        return $this->Phone_number = $Phone_number;
      }
      function getUsername() {
        return $this->username;
      }
      function setUsername($username) {
        return $this->username = $username;
      }
      function getAddress() {
        return $this->address;
      }
      function setAddress($address) {
        return $this->address = $address;
      }
      function getID() {
        return $this->ID;
      }
      function getGender() {
        return $this->Gender;
      }
      function setGender($Gender) {
        return $this->Gender = $Gender;
      }
      function getBirthdate() {
        return $this->Birthdate;
      }
      function setBithdate($Birthdate) {
        return $this->Birthdate = $Birthdate;
      }
      function getImage() {
        return $this->image;
      }
      function setImage($image) {
        return $this->image = $image;
      }
    public function findUserByEmail($email)
    {
        $this->dbh->query('select * from patient where Email= :email');
        $this->dbh->bind(':email', $email);

        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function emailExist($email)
    {
        return $this->findUserByEmail($email) > 0;
    }
}
