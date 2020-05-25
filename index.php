<?php
session_start();
include('connection.php');

//logout
include('logout.php');

//remember me
include('remember.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet"> 
     <title>Online Notes app</title>
  </head>
  <body>
  <!-- Navigation Bar  -->
  <nav role="navigation" class="navbar navbar-custom
  navbar-fixed-top"> 
   <div class="container-fluid">
      <div class="navbar-header">
       <a class="navbar-brand">Online Notes</a>
       <button type="button" class="navbar-toggle" 
       data-target="#navbarCollapse" data-toggle="collapse">
            <span class="sr-only">Toggle Navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#loginModal" data-toggle=
            "modal">Login:</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Jumbotron with sign up button -->
    <div class="jumbotron">
        <h1>Online Notes App</h1>
        <p>Your Notes with you wherever you go.</p>
        <p>Easy to use,protect all your notes !</p>
        <button type="button" class="btn btn-lg green signup" 
        data-target="#signupModal" data-toggle="modal">
            Sign up-It's free
        </button>
    </div>
 
 <!-- Login-Form -->
 <form method="post" id="loginform">
  <div class="modal" id="loginModal" role="dialog" aria-labelledby=
  "myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                Login
              </h4>
          </div>
          <div class="modal-body">
              <!-- Log In message from PHP -->
              <div id="loginmessage"></div>
            
             <div class="form-group">
                 <label for="loginemail" class="sr-only">Email:</label>
                 <input type="email" 
                 class="form-control" name="loginemail" id="loginemail" 
                 placeholder="Email" maxlength="50">
             </div>
             <div class="form-group">
                 <label for="loginpassword" class="sr-only">Password:</label>
                 <input type="password" 
                 class="form-control" name="loginpassword" 
                 id="loginpassword" 
                 placeholder="password" maxlength="30">
             </div>
             <div class="checkbox">
           <label>
               <input type="checkbox" name="rememberme" id="rememberme">
               Remember Me
           </label>
           <a class="pull-right" style="cursor:pointer" data-dismiss="modal"
           data-target="#forgotpasswordModal" data-toggle="modal">
           Forgot Password?
           </a>
          </div>
          </div>
          
          <div class="modal-footer">
          <input type="submit" name="login" 
              class="btn green" value="Log In">
            <button type="button" class="btn btn-default" 
            data-dismiss="modal">
              Cancel
            </button>
            <button type="button" class="btn btn-default pull-left" 
            data-dismiss="modal" data-target="signupModal" data-toggle="modal">
              Register
            </button>
          </div>
         
          
      </div>
  </div>
  </div>
  </form>
  <!-- Sign up form -->
  <form method="post" id="signupform">
  <div class="modal" id="signupModal" role="dialog" aria-labelledby=
  "myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                Sign Up today and Start using our Online notes
                App
              </h4>
          </div>
          <div class="modal-body">
              <!-- Sign Up message from PHP -->
              <div id="signupmessage"></div>
             <div class="form-group">
                 <label for="username" class="sr-only">Username:</label>
                 <input type="text" 
                 class="form-control" name="username" id="username" 
                 placeholder="username" maxlength="30">
             </div>
             <div class="form-group">
                 <label for="email" class="sr-only">Email:</label>
                 <input type="email" 
                 class="form-control" name="email" id="email" 
                 placeholder="Email Address" maxlength="50">
             </div>
             <div class="form-group">
                 <label for="password" class="sr-only">Choose a Password:</label>
                 <input type="password" 
                 class="form-control" name="password" id="password" 
                 placeholder="Choose a password" maxlength="30">
             </div>
             <div class="form-group">
                 <label for="password2" class="sr-only">Confirm 
                     Password:</label>
                 <input type="password" 
                 class="form-control" name="password2" id="password2" 
                 placeholder="Confirm password" maxlength="30">
             </div>
          </div>
          
          <div class="modal-footer">
          <input type="submit" name="signup" 
              class="btn green" value="Sign Up">
            <button type="button" class="btn btn-default" 
            data-dismiss="modal">
              Cancel
            </button>
            
          </div>
      </div>
  </div>
  </div>
  </form>
  <!-- Forgot Password Form -->
  <form method="post" id="forgotpasswordform">
  <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby=
  "myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
              Forgot Password? Enter your email address:
                
              </h4>
          </div>
          <div class="modal-body">
              <!-- Forgot password message message from PHP -->
              <div id="forgotpasswordmessage"></div>
            
             <div class="form-group">
                 <label for="loginemail" class="sr-only">Email:</label>
                 <input type="email" 
                 class="form-control" name="forgotemail" id="forgotemail" 
                 placeholder="Email" maxlength="50">
             </div>
          </div>
          
           <div class="modal-footer">
          <input type="submit" name="forgotpassword" 
              class="btn green" value="submit">
            <button type="button" class="btn btn-default" 
            data-dismiss="modal">
              Cancel
            </button>
            <button type="button" class="btn btn-default pull-left" 
            data-dismiss="modal" data-target="signupModal" data-toggle="modal">
              Register
            </button>
          </div>
      </div>
  </div>
  </div>
  </form>
  <!-- Footer -->
 <div class="footer">
     <div class="container">
         <p>Shubhangam333.com Copyright &copy: 2019-
             <?php $today= date("Y"); 
             echo $today ?>.</p>
     </div>
 </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="index.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  </body>
</html>