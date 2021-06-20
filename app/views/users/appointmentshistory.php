<script>
function myFunction() {
  alert("ARE YOU SURE ?");
}
</script>
<?php

class appointmentshistory extends view
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
</div>
<div class="card-body">

    <div class="table-responsive">
        <table class="datatable table table-stripped">
            <thead>
                <tr>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Speciality</th>
                    <th>Salary</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ahmed Khalal</td>
                    <td>11/8/2021</td>
                    <td>6 PM</td>
                    <td>Sports Injury</td>
                    <td>100 LE</td>
                    <td><button onclick="myFunction()" type="button" class="btn btn-danger">Cancel</button></td>
                </tr>
                <tr>
                    <td>Mahah</td>
                    <td>11/8/2021</td>
                    <td>6 PM</td>
                    <td>Sports Injury</td>
                    <td>100 LE</td>
                    <td><button onclick="myFunction()" type="button" class="btn btn-danger">Cancel</button></td>
                </tr>
                <tr>
                <td>Ahmed Khalal</td>
                <td>11/8/2021</td>
                <td>6 PM</td>
                <td>Sports Injury</td>
                <td>100 LE</td>
                <td><button  type="button" class="btn btn-outline-success">Done</button></td>
                </tr>
                <tr>
                <td>Ahmed Khalal</td>
                <td>11/8/2021</td>
                <td>6 PM</td>
                <td>Sports Injury</td>
                <td>100 LE</td>
                <td><button onclick="myFunction()" type="button" class="btn btn-danger">Cancel</button></td>
             
               
              
            </tbody>
        </table>
    </div>
</div>





EOT;

    echo $text;
  }
}
?>