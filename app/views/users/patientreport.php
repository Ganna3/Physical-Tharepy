<?php
class patientreport extends view{
public function Output(){
    require APPROOT . '/views/inc/header.php';
     // require APPROOT . '/views/inc/AdminNavbar.php';
     $pic = URLROOT . 'public/assets/img/Logo-footer.png';
     if(isset($_GET['id'])){
         $Report_id=$_GET['id'];
         $p_id = $_SESSION['id'];
         $Rep = $this->model->getReportData($p_id,$Report_id);
         $date = $Rep->App_Date ;
         $Notes =  $Rep->Doctor_Report;
         $Medicine =  $Rep->Medicine;

  $text = <<<EOT
<div class="row">
  <div class="col-lg-8 offset-lg-2">
      <div class="invoice-content">
          <div class="invoice-item">
              <div class="row">
                  <div class="col-md-6">
                      <div class="invoice-logo">
                          <img src=" $pic" alt="logo">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <p class="invoice-details">
                      <strong>Date:</strong> $date
                      </p>
                  </div>
              </div>
          </div>
          
                 
                 
            
          <!-- /Invoice Item -->
          
          <!-- Invoice Item -->
          <div class="invoice-item">
              <div class="row">
                  <div class="col-md-12">
                     
                     
                  </div>
              </div>
          </div>
          <!-- /Invoice Item -->
          
          <!-- Invoice Item -->
          <div class="invoice-item invoice-table-wrap">
              <div class="row">
                  <div class="col-md-12">
                      <div class="table-responsive">
                          <table class="invoice-table table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Session Feedback</th>
                                      <th class="text-center">Medicine</th>
                                   
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>$Notes</td>
                                      <td class="text-center">$Medicine</td>
                                  
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="col-md-6 col-xl-4 ml-auto">
                      <div class="table-responsive">

                      </div>
                  </div>
              </div>
          </div>
         
          
      </div>
  </div>
  </div>


EOT;
  echo $text;
     }
  require APPROOT . '/views/inc/footer.php';
  
  }

}