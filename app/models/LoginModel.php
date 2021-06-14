<?php
require_once 'UserModel.php';
class LoginModel extends UserModel
{
   // public  $title = 'User Login Page';

   public function login()
   {
       $this->dbh->query('SELECT * from patient WHERE Email = :email');
       $this->dbh->bind(':email', $this->email);
       echo  $this->email;
       echo  $this->password;

       $record = $this->dbh->single();
       return $record;

      /*$hash_pass = $record->password;

       if (password_verify($this->password,  $hash_pass)) {
           return $record;
       } else {
           return false;
       }
       */
   }
}
