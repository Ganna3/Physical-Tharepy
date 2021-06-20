<?php
class patientreport extends view{
public function Output(){
    require APPROOT . '/views/inc/header.php';
     // require APPROOT . '/views/inc/AdminNavbar.php';
    
 
    
 


  $text = <<<EOT

  <div class="row">
  <div class="col-lg-8 offset-lg-2">
      <div class="invoice-content">
          <div class="invoice-item">
              <div class="row">
                  <div class="col-md-6">
                      <div class="invoice-logo">
                          <img src="assets/img/logo.png" alt="logo">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <p class="invoice-details">
                      <strong>Date:</strong> 20/4/2021
                      </p>
                  </div>
              </div>
          </div>
          
          <!-- Invoice Item -->
          <div class="invoice-item">
              <div class="row">
                  <div class="col-md-6">
                      <div class="invoice-info">
                          <strong class="customer-text">Doctor Name</strong>
                         
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="invoice-info invoice-info2">
                          <strong class="customer-text">Patient Name</strong>
                        
                      </div>
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
                                      <th>Session Name</th>
                                      <th class="text-center">Notes</th>
                                   
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td></td>
                                      <td class="text-center"></td>
                                  
                                  </tr>
                                  <tr>
                                      <td></td>
                                      <td class="text-center"></td>
                                      
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
          <!-- /Invoice Item -->
          
          <!-- Invoice Information -->
          <div class="other-info">
              <h4>Other information</h4>
            
          </div>
          <!-- /Invoice Information -->
          
      </div>
  </div>


  EOT;
  echo $text;
  require APPROOT . '/views/inc/footer.php';
  
  }

}