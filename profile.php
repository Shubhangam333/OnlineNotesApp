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
     <title>Profile</title>
     <style>
       #container{
           margin-top:100px;
       }
      #notePad, #allnotes,#done{
        display:none;
       }
       .buttons{
           margin-bottom:20px;
       }
       textarea{
           width:100%;
           max-width:100%;
           font-size:16px;
           line-height:1.5em;
           border-left-width:20px;
           border-color:#CA3DD9;
           color:#CA3DD9;
           background-color:#FBEFFF;
           padding:10px;
       }
       tr{
           cursor:pointer;
       }
     </style>
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
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Contact Us</a></li>
            <li class="active"><a href="#" >My Notes</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" >Logged in as <b>Username</b></a></li>
            <li><a href="#" >Log out</a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- Container -->
 <div class="container" id="container">
  <div class="row">
    <div class="col-md-offset-3 col-md-6">
      <h2>General Account Settings:</h2>
      <div class="table-responsive table-hover table-bordered table-condensed">
      <table class="table">
        <tr data-target="#updateusername" data-toggle="modal">
         <td>Username</td>
         <td>value</td>
        </tr>
        <tr data-target="#updateemail" data-toggle="modal">
          <td>Email</td>
          <td>value</td>
        </tr>
        <tr data-target="#updatepassword" data-toggle="modal">
          <td>Password</td>
          <td>hidden</td>
        </tr>
      </table>
      </div>
    </div>
  </div>
 </div>
 <!-- Update email -->
 <form method="post" id="updateemailform">
  <div class="modal" id="updateemail" role="dialog" aria-labelledby=
  "myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                Edit new email:
              </h4>
          </div>
          <div class="modal-body">
              <!-- Log In message from PHP -->
              <div id="loginmessage"></div>
            
             <div class="form-group">
                 <label for="loginemail" >Email</label>
                 <input type="email" 
                 class="form-control" name="email" id="email"
                 value="email" 
                 maxlength="50">
             </div>
           
          </div>
          
          <div class="modal-footer">
          <input type="submit" name="updateusername" 
              class="btn green" value="Submit">
            <button type="button" class="btn btn-default" 
            data-dismiss="modal">
              Cancel
            </button>
          </div>
         
          
      </div>
  </div>
  </div>
  </form>
  <!-- Update password -->
 <form method="post" id="updatepasswordform">
  <div class="modal" id="updatepassword" role="dialog" aria-labelledby=
  "myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                Edit Current and New password:
              </h4>
          </div>
          <div class="modal-body">
              <!-- Log In message from PHP -->
              <div id="loginmessage"></div>
            
             <div class="form-group">
                 <label for="currentpassword" class="sr-only" 
                 >Your Current Password</label>
                 <input type="password" 
                 class="form-control" name="currentpassword" 
                 id="currentpassword"
                 placeholder="Your Current Password" 
                 maxlength="30">
             </div>
             <div class="form-group">
                 <label for="password" class="sr-only" 
                 > Choose a Password:</label>
                 <input type="password" 
                 class="form-control" name="password" 
                 id="password"
                 placeholder="Choose a password" 
                 maxlength="30">
             </div>
             <div class="form-group">
                 <label for="password2" class="sr-only" 
                 > Confirm Password</label>
                 <input type="password" 
                 class="form-control" name="password2" 
                 id="password2"
                 placeholder="Confirm password" 
                 maxlength="30">
             </div>
          </div>
          
          <div class="modal-footer">
          <input type="submit" name="updateusername" 
              class="btn green" value="Submit">
            <button type="button" class="btn btn-default" 
            data-dismiss="modal">
              Cancel
            </button>
          </div>
         
          
      </div>
  </div>
  </div>
  </form>
 <!-- Update username -->
 <form method="post" id="updateusernameform">
  <div class="modal" id="updateusername" role="dialog" aria-labelledby=
  "myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal">
                &times;
              </button>
              <h4 id="myModalLabel">
                Edit Username:
              </h4>
          </div>
          <div class="modal-body">
              <!-- Log In message from PHP -->
              <div id="loginmessage"></div>
            
             <div class="form-group">
                 <label for="loginemail" >Username</label>
                 <input type="text" 
                 class="form-control" name="username" id="username"
                 value="usernamevalue" 
                 maxlength="50">
             </div>
           
          </div>
          
          <div class="modal-footer">
          <input type="submit" name="updateusername" 
              class="btn green" value="Submit">
            <button type="button" class="btn btn-default" 
            data-dismiss="modal">
              Cancel
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
  </body>
</html>