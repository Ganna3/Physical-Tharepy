<?php
class Receptionists extends Controller
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
    $viewPath = VIEWS_PATH . 'Receptionists/ReceptionsitsSettings.php';
    require_once $viewPath;
    $profileView = new ReceptionsitsSettings($this->getModel(), $this);
    $profileView->output();
}

public function ReceptionsitsSpecialities()
{
    $viewPath = VIEWS_PATH . 'Receptionists/ReceptionsitsSpecialities.php';
    require_once $viewPath;
    $SpecialitiesView = new ReceptionsitsSpecialities($this->getModel(), $this);
    $SpecialitiesView->output();
}

}
?>