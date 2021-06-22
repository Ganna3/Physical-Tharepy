
<?php
class Stuff extends Controller
{

public function ReceptionistsAppointments()
{
        $viewPath = VIEWS_PATH . 'Receptionists/ReceptionistsAppointments.php';
        require_once $viewPath;
        $AppointmentsView = new ReceptionistsAppointments($this->getModel(), $this);
        $AppointmentsView->output();

} 
 public function ReceptionistsDoctors()
{
        $viewPath = VIEWS_PATH . 'Receptionists/ReceptionistsDoctors.php';
        require_once $viewPath;
        $settingsView = new ReceptionistsDoctors($this->getModel(), $this);
        $settingsView->output();
}
    

 public function ReceptionistsHome()
{
    $viewPath = VIEWS_PATH . 'Receptionists/ReceptionistsHome.php';
    require_once $viewPath;
    $appointmentsView = new ReceptionistsHome($this->getModel(), $this);
    $appointmentsView->output();
}

public function ReceptionistsPatients()
{
    $viewPath = VIEWS_PATH . 'Receptionists/ReceptionistsPatients.php';
    require_once $viewPath;
    $doctorsView = new ReceptionistsPatients($this->getModel(), $this);
    $doctorsView->output();
}

public function ReceptionistsProfile()
{
    $viewPath = VIEWS_PATH . 'Receptionists/ReceptionistsProfile.php';
    require_once $viewPath;
    $patientsView = new ReceptionistsProfile($this->getModel(), $this);
    $patientsView->output();
}

public function ReceptionsitsSettings()
{
    $viewPath = VIEWS_PATH . 'Stuff/Receptionists/ReceptionsitsSettings.php';
    require_once $viewPath;
    $profileView = new ReceptionsitsSettings($this->getModel(), $this);
    $profileView->output();
}

public function ReceptionsitsSpecialities()
{
    $viewPath = VIEWS_PATH . 'Stuff/Receptionists/ReceptionsitsSpecialities.php';
    require_once $viewPath;
    $SpecialitiesView = new ReceptionsitsSpecialities($this->getModel(), $this);
    $SpecialitiesView->output();
}
public function Doctor()
{
        $viewPath = VIEWS_PATH . 'Stuff/Doctor/DoctorHome.php';
        require_once $viewPath;
        $homeView = new DoctorHome($this->getModel(), $this);
        $homeView->output();
}



    public function Admin()
    {
            $viewPath = VIEWS_PATH . 'Stuff/Admin/AdminHome.php';
        require_once $viewPath;
        $homeView = new AdminHome($this->getModel(), $this);
        $homeView->output();

}
public function AdminDoctors()
{
        $viewPath = VIEWS_PATH . 'Stuff/Admin/AdminDoctors.php';
        require_once $viewPath;
        $homeView = new  AdminDoctors($this->getModel(), $this);
        $homeView->output();

}
public function AdminReceptionsits()
{
        $viewPath = VIEWS_PATH . 'Stufjf/Admin/AdminReceptionists.php';
        require_once $viewPath;
        $homeView = new  AdminReceptionists($this->getModel(), $this);
        $homeView->output();

}

    
    
    public function DoctorAppointments()
{
        $viewPath = VIEWS_PATH . 'Stuff/Doctor/DoctorAppointments.php';
        require_once $viewPath;
        $settingsView = new DoctorAppointments($this->getModel(), $this);
        $settingsView->output();
}
    

 public function MyPatients()
{
    $viewPath = VIEWS_PATH . 'Stuff/Doctor/MyPatients.php';
    require_once $viewPath;
    $aboutView = new MyPatients($this->getModel(), $this);
    $aboutView->output();
}

public function Stuff_Login()
    {
        $StuffModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //validate login form
            $StuffModel->setEmail(trim($_POST['email']));
            $StuffModel->setPassword(trim($_POST['password']));
             
            //validate login form
            if (empty( $StuffModel->getEmail())) {
                $StuffModel->setEmailErr('Please enter an email');
            } elseif (!( $StuffModel->emailExist($_POST['email']))) {
                $StuffModel->setEmailErr('No user found');
            }

            if (empty($StuffModel->getPassword())) {
                $StuffModel->setPasswordErr('Please enter a password');
            } elseif (strlen($StuffModel->getPassword()) < 4) {
                $StuffModel->setPasswordErr('Password must contain at least 4 characters');
            }
            
            if (
                empty($StuffModel->getEmailErr()) &&
                empty($StuffModel->getPasswordErr())
            ) {
               
                $logged_Stuff = $StuffModel->login_Stuff();
               if ($logged_Stuff) 
               {
                  // die($logged_Stuff->Role);
                $this->createUserSession($logged_Stuff);
               if($logged_Stuff->Role == 'Admin'){
                header('location: ' . URLROOT . 'public/Stuff/Admin/AdminHome');
               }
               else if($logged_Stuff->Role == 'Receptionist')  {
               header('location: ' . URLROOT . 'public/Stuff/Receptionists/ReceptionistsHome');
               }
               else if($logged_Stuff->Role == 'Doctor')  {
                header('location: ' . URLROOT . 'public/Stuff/doctor/DoctorHome');
                }

                }
           
        }
    }
    $viewPath = VIEWS_PATH . 'Stuff/Stuff_Login.php';
    require_once $viewPath;
    $view = new Stuff_Login($StuffModel, $this);
    $view->output();
}
    
       
       
    
    

    public function logout()
    {
       // echo 'logout called';

        unset($_SESSION['Stuff_id']);
        unset($_SESSION['Stuff_name']);
        session_destroy();
        //redirect('users/login');
        header('location: ' . URLROOT . 'public/Stuff/Stuff_Login');
    }
    public function createUserSession($Stuff)
    {
        $_SESSION['Stuff_id'] = $Stuff->Stuff_id;
       
        $_SESSION['Stuff_name'] = $Stuff->Full_Name;   
       // header('location: ' . URLROOT . 'public');  
    }
    public function isLoggedIn()
    {
        return isset($_SESSION['id']);
    }


    public function  Schedule()
    {
        $scheduleModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $scheduleModel->setschedule_day(trim($_POST['Doctors_Schedule_day']));
            $scheduleModel->setschedule_date(trim($_POST['Doctors_Schedule_date']));
            $scheduleModel->setschedule_start(trim($_POST['Doctors_Schedule_Start']));
            $scheduleModel->setSession_Price(trim($_POST['Session_Price']));
                
                if ( $scheduleModel->Schedule()) {
                    
                    header('location: ' . URLROOT . 'Public/Stuff/Doctor');
                } else {
                    die('Error in sign up');
                }
            
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        
        $viewPath = VIEWS_PATH . 'Stuff/Doctor/Schedule.php';
        require_once $viewPath;
        $homeView = new Schedule($this->getModel(), $this);
        $homeView->output();
    }


}
?>