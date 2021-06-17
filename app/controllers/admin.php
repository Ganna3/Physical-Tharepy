<?php
class Admin extends Controller
{
    public function AdminHome()
    {
        $viewPath = VIEWS_PATH . 'admin/AdminHome.php';
        require_once $viewPath;
        $homeView = new AdminHome($this->getModel(), $this);
        $homeView->output();

    }  public function AdminSettings()
    {
        $viewPath = VIEWS_PATH . 'admin/AdminSettings.php';
        require_once $viewPath;
        $settingsView = new AdminSettings($this->getModel(), $this);
        $settingsView->output();
    }
    

 public function AdminAppointments()
{
    $viewPath = VIEWS_PATH . 'admin/AdminAppointments.php';
    require_once $viewPath;
    $appointmentsView = new AdminAppointments($this->getModel(), $this);
    $appointmentsView->output();
}

public function AdminDoctors()
{
    $viewPath = VIEWS_PATH . 'admin/AdminDoctors.php';
    require_once $viewPath;
    $doctorsView = new AdminDoctors($this->getModel(), $this);
    $doctorsView->output();
}

public function AdminPatients()
{
    $viewPath = VIEWS_PATH . 'admin/AdminPatients.php';
    require_once $viewPath;
    $patientsView = new AdminPatients($this->getModel(), $this);
    $patientsView->output();
}

public function AdminProfile()
{
    $viewPath = VIEWS_PATH . 'admin/AdminProfile.php';
    require_once $viewPath;
    $profileView = new AdminProfile($this->getModel(), $this);
    $profileView->output();
}
public function AdminReceptionists()
{
    $viewPath = VIEWS_PATH . 'admin/AdminReceptionists.php';
    require_once $viewPath;
    $receptionistsView = new AdminReceptionists($this->getModel(), $this);
    $receptionistsView->output();
}
public function AdminSpecialities()
{
    $viewPath = VIEWS_PATH . 'admin/AdminSpecialities.php';
    require_once $viewPath;
    $SpecialitiesView = new AdminSpecialities($this->getModel(), $this);
    $SpecialitiesView->output();
}

}
?>