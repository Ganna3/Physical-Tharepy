<?php
class Mange extends Controller
{

    public function EditProfile()
    {
        $viewPath = VIEWS_PATH . 'Mange/EditProfile.php';
        require_once $viewPath;
        $aboutView = new EditProfile($this->getModel(), $this);
        $aboutView->output();
    }
}