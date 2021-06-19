<?php
class  doctorreports extends view
{


    public function output()
    {
      //$title = $this->model->title;
     require APPROOT . '/views/inc/header.php';
     // require APPROOT . '/views/inc/AdminNavbar.php';
      $this->viewreports();
      require APPROOT . '/views/inc/footer.php';
    }
    public function viewreports()
	{
$text =<<<EOT




EOT;

    echo $text;
  }
}
?>