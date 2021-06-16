<?php
class Admin extends Controller
{
    public function AdminHome()
    {
        $viewPath = VIEWS_PATH . 'admin/AdminHome.php';
        require_once $viewPath;
        $homeView = new AdminHome($this->getModel(), $this);
        $homeView->output();

    } public function AdminSettings()
    {
        $viewPath = VIEWS_PATH . 'admin/AdminSettings.php';
        require_once $viewPath;
        $settingsView = new AdminSettings($this->getModel(), $this);
        $settingsView->output();
    }
    

 public function Setting()
{
    $viewPath = VIEWS_PATH . 'admin/settings.php';
    require_once $viewPath;
    $aboutView = new Admin($this->getModel(), $this);
    $aboutView->output();
}

}
?>