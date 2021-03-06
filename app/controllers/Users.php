<?php
require_once(APPROOT.'/models/UserModel.php');
class Users extends Controller
{
    public function register()
    {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            $registerModel->setFName(trim($_POST['FName']));
            $registerModel->setLName(trim($_POST['LName']));
            $registerModel->setEmail(trim($_POST['Email']));
            $registerModel->setPassword(trim($_POST['password']));
            $registerModel->setConfirmPassword(trim($_POST['confirm_password']));
            $registerModel->setNumber(trim($_POST['Phone_number']));
            $registerModel->setAddress(trim($_POST['Address']));
            $registerModel->setGender(trim($_POST['Gender']));
            $registerModel->setBithdate(trim($_POST['Birthdate']));
            $registerModel->setImage(trim($_POST['Image']));
            $registerModel->setUsername(trim($_POST['Username']));
            
            //validation
            if (empty($registerModel->getFName())) {
                $registerModel->setEmptyErr('Please Fill the Data');
            }
            if (empty($registerModel->getLName())) {
                $registerModel->setEmptyErr('Please Fill the Data');
            }
            if (empty($registerModel->getNumber())) {
                $registerModel->getEmptyErr('Please Fill the Data');
            }elseif (strlen($registerModel->getNumber()) < 11) {
                $registerModel->SetPhoneErr('Phone Number must contain 11 Number');
            }

            if (empty($registerModel->getAddress())) {
                $registerModel->setEmptyErr('Please Fill the Data');
            }
            if (empty($registerModel->getBirthdate())) {
                $registerModel->setEmptyErr('Please Fill the Data');
            }
            if (empty($registerModel->getImage())) {
                $registerModel->setEmptyErr('Please Fill the Data');
            }
            if (empty($registerModel->getUsername())) {
                $registerModel->setEmptyErr('Please Fill the Data');
            }
     
            if (empty($registerModel->getEmail())) {
                $registerModel->setEmailErr('Please enter an email');
            } elseif ($registerModel->emailExist($_POST['Email'])) {
                $registerModel->setEmailErr('Email is already registered');
            }
            if (empty($registerModel->getPassword())) {
                $registerModel->setPasswordErr('Please enter a password');
            } elseif (strlen($registerModel->getPassword()) < 4) {
                $registerModel->setPasswordErr('Password must contain at least 4 characters');
            }

            if ($registerModel->getPassword() != $registerModel->getConfirmPassword()) {
                $registerModel->setConfirmPasswordErr('Passwords do not match');
            }

            if (
                empty($registerModel->getEmptyErr()) && empty($registerModel->getPhoneErr()) &&
                empty($registerModel->getEmailErr()) &&
                empty($registerModel->getPasswordErr()) &&
                empty($registerModel->getConfirmPasswordErr())
            ) {
                
                $registerModel->setPassword(password_hash($registerModel->getPassword(), PASSWORD_DEFAULT));
                
                if ($registerModel->signup()) {
                    $_SESSION['auth_status']=true;
                    header('location: ' . URLROOT . 'public/users/login');
                } else {
                    die('Error in sign up');
                }
            }
        }
        // Load form
        //echo 'Load form, Request method: ' . $_SERVER['REQUEST_METHOD'];
        $viewPath = VIEWS_PATH . 'users/Register.php';
        require_once $viewPath;
        $view = new Register($this->getModel(), $this);
        $view->output();
    }

    public function login()
    {
        $userModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $userModel->setEmail(trim($_POST['email']));
            $userModel->setPassword(trim($_POST['password']));

            //validate login form
            if (empty($userModel->getEmail())) {
                $userModel->setEmailErr('Please enter an email');
            } elseif (!($userModel->emailExist($_POST['email']))) {
                $userModel->setEmailErr('No user found');
            }

            if (empty($userModel->getPassword())) {
                $userModel->setPasswordErr('Please enter a password');
            } elseif (strlen($userModel->getPassword()) < 4) {
                $userModel->setPasswordErr('Password must contain at least 4 characters');
            }


            if (
                empty($userModel->getEmailErr()) &&
                empty($userModel->getPasswordErr())
            ) {
               
               $loggedUser = $userModel->login();
               if ($loggedUser) {
                 $this->createUserSession($loggedUser);
               } else {
               // die('Success no');
                    $userModel->setPasswordErr('Password is not correct'); 
                   
                        
               }
        }
    }
       
        $viewPath = VIEWS_PATH . 'users/Login.php';
        require_once $viewPath;
        require_once $viewPath;
        $view = new Login($userModel, $this);
        $view->output();
    
    }
    public function logout()
    {
       // echo 'logout called';

        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
        header('location: ' . URLROOT . 'public');
    }
    public function createUserSession($user)
    {
        $_SESSION['id'] = $user->Patient_ID;
        $_SESSION['user_name'] = $user->Username;   
        $_SESSION['Pic'] =$user->Image ;
        header('location: ' . URLROOT . 'public');  
    }
    
 
    function EditProfile()
    {
        $Edit = $this->getModel();
       // $patients->getPatients();
        $viewPath = VIEWS_PATH . 'users/EditProfile.php';
        require_once $viewPath;
        $view = new EditProfile($this->getModel(), $this);
        $view->output();

    }

    public function finddoctors()

    {
        $Doctors = $this->getModel();
        $Doctors->getDoctors();
        $viewPath = VIEWS_PATH . 'users/finddoctors.php';
        require_once $viewPath;
        $aboutView = new finddoctors($this->getModel(), $this);
        $aboutView->output();
    }
    public function doctorreports()

    {

        $viewPath = VIEWS_PATH . 'users/doctorreports.php';
        require_once $viewPath;
        $aboutView = new doctorreports($this->getModel(), $this);
        $aboutView->output();
    }
    public function bookappointments()
    {
        if (isset($_GET['id']))
        {
            //$id=$_GET['id'];
            //var_dump($id);
        $Doctor = $this->getModel();
        //$Doctor->getDoctor($id);
        $viewPath = VIEWS_PATH . 'users/bookappointments.php';
        require_once $viewPath;
        $aboutView = new bookappointments($this->getModel(), $this);
        $aboutView->output();
        }
    }
    public function ConfirmBook()
    {
        $viewPath = VIEWS_PATH . 'users/ConfirmBook.php';
        require_once $viewPath;
        $aboutView = new bookappointments($this->getModel(), $this);
        $aboutView->output();

    }
    public function Appointmentshistory()
    {

        $viewPath = VIEWS_PATH . 'users/Appointmentshistory.php';
        require_once $viewPath;
        $aboutView = new Appointmentshistory($this->getModel(), $this);
        $aboutView->output();

    }
    public function patientreport()
    {

        $viewPath = VIEWS_PATH . 'users/patientreport.php';
        require_once $viewPath;
        $aboutView = new patientreport($this->getModel(), $this);
        $aboutView->output();

    }
    
    

  
    
    }

