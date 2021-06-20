<?php
class Stuff_Login extends view{

  

  public function output(){
    $action = URLROOT . 'public/Stuff/Stuff_Login';
    //$registerUrl = URLROOT . 'public/users/register';
    $pic = URLROOT . 'public/assets/img/Home.jpg';
 
    include APPROOT . '/views/inc/includesImp.php';
    $text = <<<EOT
    <div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        
                        <!-- Form -->
                        <form action="$action" method="POST">
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
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
    //die(var_dump($err));
    $valid = (!empty($err) ? 'is-invalid' : '');
    $this->printInput('password', 'password', $val, $err, $valid);
  }

  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
  
              
        <div class="form-group form-focus">
		<input type="$type" name="$fieldName" id="$fieldName" placeholder="$fieldName" class="form-control floating" required="">
        
        <span clas="invalid-feedback" style="color:red; font-size: 80%; width: 100%;
        margin-top: .25rem;">$err</span>
									</div>  
EOT;
    echo $text;
  }
}
