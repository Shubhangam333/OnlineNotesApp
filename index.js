//Ajax Call for the sign up form 
//Once the form is submitted
$("#signupform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $("#signupmessage").html(data);
            }
        },
        error: function(){
            $("#signupmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});

//Ajax Call for the login form
//Once the form is submitted
$("#loginform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "login.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == "success"){
                window.location = "mainpageloggedin.php";
            }else{
                $('#loginmessage').html(data);   
            }
        },
        error: function(){
            $("#loginmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});
//Ajax Call for the forgotpassword form
//Once the form is submitted
$("#forgotpasswordform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to login.php using AJAX
    $.ajax({
        url: "forgot-password.php",
        type: "POST",
        data: datatopost,
        success: function(data){
                $('#forgotpasswordmessage').html(data);   
            
        },
        error: function(){
            $("#forgotpasswordmessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
            
        }
    
    });

});
//         AJAX Call successful:show error or success message
//         AJAX Call fails:show Ajax Call error

// AJAX Call for the login form
// Once the form is submitted
//   prevent default php Processing
//   Collect user inputs
//   Send them to login.php using AJAX
//     AJAX Call successful
//      if php files return "success" redirect user to notes page
//      otherwise show error Message
//     AJAX Call fails:show AJAX call error

// AJAX call for the forgot password
// Once the form is submitted
//  prevent default php process
//  send them to login.php using AJAX
//  AJAX call successful:show error or success Message
//  AJAX call fails:show AJAX call error