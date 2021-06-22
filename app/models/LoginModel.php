<?php
require_once 'UserModel.php';
class LoginModel extends UserModel
{
   // public  $title = 'User Login Page';

   public function login()
   {
       $this->dbh->query('SELECT * from patient WHERE Email = :email' );
       $this->dbh->bind(':email', $this->email);
      // $this->dbh->bind(':password',md5($this->password));
       //var_dump(md5($this->password));
       $record = $this->dbh->single();
       
     //  var_dump(md5($this->Password));
       
       $hash_pass = $record->Password;

        if (password_verify($this->password,  $hash_pass)) {
            return $record;
        } else {
            return false;
       return $record;
        }
      // die(var_dump($_SESSION['user_id']));
     //$hash_pass = $record->password;

     // if ($this->password == md5($_POST['password']) ) {
        //$_SESSION['user_id'] = $record->Patient_ID; 
      //  return $record;
      //} else {
        //   return false;
      // }
       
   }
}
