
<?php
class Doctor extends Controller
{
    public function DoctorHome()
    {
        $viewPath = VIEWS_PATH . 'Doctor/DoctorHome.php';
        require_once $viewPath;
        $homeView = new DoctorHome  ($this->getModel(), $this);
        $homeView->output();

    }
    
    
    public function DoctorAppointments()
    {
        $viewPath = VIEWS_PATH . 'Doctor/DoctorAppointments.php';
        require_once $viewPath;
        $settingsView = new DoctorAppointments($this->getModel(), $this);
        $settingsView->output();
    }
    

 public function MyPatients()
{
    $viewPath = VIEWS_PATH . 'Doctor/MyPatients.php';
    require_once $viewPath;
    $aboutView = new MyPatients($this->getModel(), $this);
    $aboutView->output();
}

}
?>