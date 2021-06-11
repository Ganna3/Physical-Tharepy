<?php
class Index extends view{
  public function output(){
    //$title = $this->model->title;
    //$subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
    
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      
      <hr class="my-4">
      <p class="lead">Home</p>
    </div>
  </div>
EOT;
  echo $text;
  require APPROOT . '/views/inc/footer.php';

  }
}
