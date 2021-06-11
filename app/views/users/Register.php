<?php
class Register extends view
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'public/users/register';
    $loginUrl = URLROOT . 'public/users/login';
    $text = <<<EOT
    <div class="content">
    <div class="container-fluid">
            <div class="row">
              <div class="col-md-8 offset-md-2">
  
                <!-- Register Content -->
                <div class="account-content">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 col-lg-6 login-left">
                      <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
                    </div>
                    <div class="col-md-12 col-lg-6 login-right">
                      <div class="login-header">
                        <h3>Patient Register <a href="doctor-register.html">Are you a Doctor?</a></h3>
                      </div>
                      <!-- Register Form -->
                      <form action="$action" method ="POST">
EOT;
    echo $text;
    $this->printName();
    $this->printEmail();
    $this->printPassword();
    $this->printConfirmPassword();
    $text = <<<EOT
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <input type="submit" value="Register" class="form-control btn btn-lg btn-primary btn-block">
        </div>
        <div class="col">
          <a href="$loginUrl" class="form-control btn btn-lg btn-block">Current user, login here</a>
        </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
EOT;
    echo $text;
  }

  private function prinFName()
  {
    $val = $this->model->getFName();
    $err = $this->model->getNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'FName', $val, $err, $valid);
  
  }
  private function printLName()
  {
    $val = $this->model->getLName();
    $err = $this->model->getLNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'LName', $val, $err, $valid);
  }
  private function printNumber()
  {
    $val = $this->model->getNumber();
    $err = $this->model->getNumberErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Number', $val, $err, $valid);
  }
  private function printAddress()
  {
    $val = $this->model->getAddress();
    $err = $this->model->getAddressErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Address', $val, $err, $valid);
  }
  private function printGender()
  {
    $val = $this->model->getGender();
    $err = $this->model->getGenderErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Gender', $val, $err, $valid);
  }
  private function printEmail()
  {
    $val = $this->model->getEmail();
    $err = $this->model->getEmailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'name', $val, $err, $valid);
  }
  private function printBithdate()
  {
    $val = $this->model->getBithdate();
    $err = $this->model->getBithdateErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('email', 'Bithdate', $val, $err, $valid);
  }
  private function printUsername()
  {
    $val = $this->model->getUsername();
    $err = $this->model->getUsernameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'Usernamename', $val, $err, $valid);
  }

  private function printPassword()
  {
    $val = $this->model->getPassword();
    $err = $this->model->getPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'password', $val, $err, $valid);
  }
  private function printConfirmPassword()
  {
    $val = $this->model->getConfirmPassword();
    $err = $this->model->getConfirmPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'confirm_password', $val, $err, $valid);
  }

  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group form-focus">
    <input type="$type" name="$fieldName" id="$fieldName" value="$val" class="form-control floating">
    <label class="focus-label">for="$fieldName"</label>a
  </div>
EOT;
    echo $text;
  }
}