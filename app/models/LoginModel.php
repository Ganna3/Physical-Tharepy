<?php
require_once 'UserModel.php';
class LoginModel extends UserModel
{
   // public  $title = 'User Login Page';

   public function login()
   {
       $this->dbh->query('SELECT * from patient WHERE Email = :email AND Password = :password' );
       $this->dbh->bind(':email', $this->email);
       $this->dbh->bind(':password', $this->password);
       $record = $this->dbh->single();
      // $_SESSION['user_id'] = $record->Patient_ID;
      // return $record;
      // die(var_dump($record));
     //$hash_pass = $record->password;

      if ($this->password == $_POST['password'] ) {
          return $record;
      } else {
           return false;
       }
       
   }
}
