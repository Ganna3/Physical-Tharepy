<?php
class bookappointments extends view
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
        $id=$_GET['id'];
       $Doctors = $this->model->getDoctor($id);
       $IDD = $Doctors->Doctor_ID;
        $text =<<<EOT
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Two Column Vertical Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <h4 class="card-title">Personal Information</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" value="$IDD" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                    <label>Blood Group</label>
                        <select class="select">
                            <option>Select</option>
                            <option value="1">A+</option>
                            <option value="2">O+</option>
                            <option value="3">B+</option>
                            <option value="4">AB+</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Gender:</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1">
                            <label class="form-check-label" for="gender_male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
                            <label class="form-check-label" for="gender_female">Female</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Repeat Password</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <h4 class="card-title">Postal Address</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address Line 1</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Address Line 2</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Postal Code</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
EOT;
    echo $text;
  }
}
?>