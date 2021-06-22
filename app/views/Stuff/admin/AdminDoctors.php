<?php
class AdminDoctors extends view{
public function output(){
  
   include APPROOT . '/views/inc/includesImp.php';
    include APPROOT . '/views/inc/adminupperDashboard.php';
    include APPROOT . '/views/inc/adminLeftNavbar.php';
    $text = <<<EOT
    
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto">
                        <h3 class="page-title">Doctors</h3>
                        
                    </div>
                    <div class="col-sm-5 col">
                        <a href="#Add_Specialities_details" data-toggle="modal" class="btn btn-primary float-right mt-2">Add doctor</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            </div>			
            </div>
            <!-- /Page Wrapper -->
            
            
            <!-- Add Modal -->
            <div class="modal fade" id="Add_Specialities_details" aria-hidden="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Doctors</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form method="POST">
                                <div class="row form-row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Doctor name:</label>
                                            <input type="text" class="form-control" name="username">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input type="text" class="form-control" name="Address">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Gender:</label>
                                            <input type="text" class="form-control" name="Gender">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Birthdate:</label>
                                            <input type="text" class="form-control" name="Birthdate">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" class="form-control" name="Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input type="text" class="form-control" name="Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Role:</label>
                                            <input type="text" class="form-control" name="Role">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Number:</label>
                                            <input type="text" class="form-control" name="Number">
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Expert_at( speciality):</label>
                                        <input type="text" class="form-control" name="Expert_at">
                                    </div>
                                </div>
                            
                                <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>speciality picture</label>
                                        <input type="file"  class="form-control" name="speciality_pic">
                                    </div>
                                </div>
                             </div>

                            

                            
                            

                            <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Degree:</label>
                                        <input type="text" class="form-control" name="Degree">
                                    </div>
                                </div>
                            </div>

                            <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Salary:</label>
                                        <input type="text" class="form-control" name="Salary">
                                    </div>
                                </div>
                            </div>

                            <div class="row form-row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file"  class="form-control" name="image">
                                    </div>
                                </div>
                            </div>
                                
                           
                                <button type="submit" class="btn btn-primary btn-block">Add Doctor</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
            <!-- /ADD Modal -->
            
            
            
            <!-- Delete Modal -->
            <div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document" >
                    <div class="modal-content">
                    <!--	<div class="modal-header">
                            <h5 class="modal-title">Delete</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>-->
                        <div class="modal-body">
                            <div class="form-content p-2">
                                <h4 class="modal-title">Delete</h4>
                                <p class="mb-4">Are you sure want to delete?</p>
                                <button type="button" class="btn btn-primary">Save </button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Delete Modal -->
        </div>


        <!-- /Main Wrapper -->
        <!-- Doctors list -->
        <div class="card card-table flex-fill">
            <div class="card-header">
                <h4 class="card-title">Doctors List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover  table-center mb-0">
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Speciality</th>
                                <th>Degree</th>
                                <th>Salary</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Gender</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                        
EOT;

echo $text;
$this->ViewDoctors();

$text = <<<EOT

                                  </tbody>
                                    </table>
           
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /Appointments list -->
                        
                    </div>
                </div>
            
                
            </div>			
        </div>
        <!-- /Page Wrapper -->
    
    </div>
    <!-- /Main Wrapper -->
                      
                 
                   


                      
                 
                  
                           
EOT;
echo $text;


            
              
}  

function ViewDoctors()
{
              $pic = URLROOT . 'public/assets/img/Doctors';
              foreach($this->model->getDoctors() as $Doctors)
              {
                  $Doctor_name=$Doctors->Full_Name;
                  $Doctor_Pic=$Doctors->Profile_pic;
                  $Doctor_id=$Doctors->Stuff_id;
          
                  $email=$Doctors->Email;
                  $phonenumber=$Doctors->PhoneNum;
                  $Gender=$Doctors->Gender;
                  $address=$Doctors->Address;
          
          
                  $info=$this->model->getDoctor_info($Doctor_id);
                  $spec= $info->Expert_at;
                  $degree= $info->Degree;
                  $salary= $info->Salary;
                  $egb='EGB';
              $text = <<<EOT
              
                                         <tr>
                 <td>
                                                            <h2 class="table-avatar">
                                                                  <a href="" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src=" $pic/$Doctor_Pic" alt="User Image"></a>
                                                                  <a href="#">$Doctor_name</a>
                                                              </h2>
                                                          </td>
                                                          <td>$spec</td>
                                                          <td>$degree</td>
                                                          <td>$salary$egb</td>
                                                          <td>$email</td>
                                                          <td>$phonenumber</td>
                                                          <td>$Gender</td>
                                                          <td>$address</td>
                                                          <td class="text-right">
                                                <div class="actions">
                                                    
                                                    <a  data-toggle="modal" href="#delete_modal" class="btn btn-sm bg-danger-light">
                                                        <i class="fe fe-trash"></i> Delete
                                                    </a>
                                                </div>
                                            </td>
                                                          
                                                          
                                    </tr>
                                                      
                                       
EOT;
echo $text;
              }  
            }
              
}



