<?php
require_once 'StuffModel.php';
class Stuff_LoginModel  extends StuffModel
{
    public function login_Stuff()
    {
        $this->dbh->query('SELECT * from clinic_stuff WHERE Email = :email AND Password = :password' );
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':password', $this->password);
        $record = $this->dbh->single();
        
        return $record;
       if ($password == $_POST['password'] ) {
        
         return $record;
       } else {
            return false;
        }
        
        
    }
    public function findUserByEmail($email)
    {
        $this->dbh->query('select * from clinic_stuff where Email = :email');
        $this->dbh->bind(':email', $email);

        $userRecord = $this->dbh->single();
        return $this->dbh->rowCount();
    }

    public function emailExist($email)
    {
        return $this->findUserByEmail($email) > 0;
    }
}