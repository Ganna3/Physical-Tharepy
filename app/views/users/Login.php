<?php
class Login extends view
{
  public function output()
  {
    //$title = $this->model->title;
    require APPROOT . '/views/inc/header_login.php';
    $this->printForm();
    require APPROOT . '/views/inc/footer_login.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'public/users/login';
    $registerUrl = URLROOT . 'public/users/register';
    $pic = URLROOT . 'public/assets/img/Home.jpg';

$text =<<<EOT
<!DOCTYPE html>
<html lang="en">
    
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container" >
                	<div class="loginbox" >
                   
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								<form action="$action" method="post">
								<!-- Form -->
							
EOT;
                echo $text;
                $this->printEmail();
                $this->printPassword();
            
                $text = <<<EOT

								
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								  
								<!-- Social Login -->
								<div class="social-login">
									<span>Login with</span>
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
								</div>
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Don’t have an account? <a href="$registerUrl">Register</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        
		<!-- /Main Wrapper -->
		
	

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->

EOT;
    echo $text;
  }

  private function printEmail()
  {
    $val = $this->model->getEmail();
    $err = $this->model->getEmailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('email', 'email', $val, $err, $valid);
  }

  private function printPassword()
  {
    $val = $this->model->getPassword();
    $err = $this->model->getPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');
    $this->printInput('password', 'password', $val, $err, $valid);
  }

  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
        <div class="form-group form-focus">
				<input type="$type" name="$fieldName" id="$fieldName" value="$val" class="form-control floating" required="">
        <label class="focus-label">$fieldName</label>
        <span class="invalid-feedback">$err</span>
									</div>  
EOT;
    echo $text;
  }
}
