<?php

class StuffModel extends Model{
     

     
        protected $id;
        protected $username;
        protected $address;
        protected $Gender;
        protected $password;
        protected $Phone_number;
        protected $email;
        protected $Birthdate;
        protected $image;
        protected $emailErr;
        protected $passwordErr;
      
          public function __construct()
          {
              parent::__construct();
             
              $this->image="";
              $this->username="";
              $this->email="";
              $this->number="";
              $this->Birthdate="";
              $this->address="";
              $this->password="";
              $this->Gender="";
             //$this->email    = "";
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
              return $this->usernae = $username;
            }
            function getAddress() {
              return $this->address;
            }
            function setAddress($address) {
              return $this->address = $address;
            }
            function getID() {
              return $this->id;
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
    
         
      }