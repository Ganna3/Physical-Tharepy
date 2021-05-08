<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="fonts2/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style_sign.css">
</head>
<body style="background-image:url('images/images.jfif');">

    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Fname" id="Fname" placeholder="Your First Name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Lname" id="Lname" placeholder="Your Last Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" required="" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" required="" placeholder="Password"/>
                            <span toggle="password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input"  name="re_password" id="re_password" placeholder="Repeat your password" required=""/>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-input" name="bdate" placeholder="Enter your Birthdate" required="" id="bdate">
                        </div>
                        <div class="form-group">
                            <select name="bdate"  class="form-input" required="" class="form-control">
     <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
</select>

<div class="form-group">

                            <input type="text" class="form-input" name="Address" id="Address" placeholder="Your Address"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Nid" id="Nid" max="14" placeholder="Enter  14 number of your national ID "/>
                        </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
</body>
</html>