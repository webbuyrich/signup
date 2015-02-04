$( document ).ready(function() {
    $('#firstname').val("");
    $('#lastname').val("");
    $('#email').val("");
    $('#signup_password').val("");
    $('#signup_username').val("");
    

    
    $( "#btn-login" ).click(function() {
        var username = $('#login-username').val();
        var password = $('#login-password').val();
        var submit;
        if((password.length > 0) && (username.length > 0)){
           $('#btn-password_error').hide(); 
           $('#btn-username_error').hide();
           $('.login-loader').show();
           $.post("login.php", {username:username, password:password, submit:true}, function(data){
               if(data === "Success"){
                   window.location = "profile.php";
                   $('.login-loader').hide();
               } else{
                  $('.login-loader').hide();
                  $('#btn-login_error').show().delay(1200).fadeOut('slow'); 
               }          
           });
        } else if ((password.length <= 0) && (username.length > 0)) {
            $('#btn-password_error').show().delay(1200).fadeOut('slow');
        } else if ((password.length > 0) && (username.length <= 0)) {
            $('#btn-username_error').show().delay(1200).fadeOut('slow');
        }
        
        
    });

    $("#btn-signup").click(function(){
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var signup;
        var signup_password = $('#signup_password').val();
        var signup_username = $('#signup_username').val();
        $('.login-loader').show();
        $.post("new_user.php", {firstname:firstname, lastname:lastname, email:email, signup_password:signup_password, signup_username:signup_username,
            signup:true}, function(data){
                if(data ==="Success"){
                    $('.login-loader').hide();
                    $('#btn-signup').hide().delay(3500).fadeIn('slow');
                    $('#signup-success').show().delay(3000).fadeOut('slow');
                    $('#firstname').val("");
                    $('#lastname').val("");
                    $('#email').val("");
                    $('#signup_password').val("");
                    $('#signup_username').val("");
                } else if(data ==="Error") {
                    $('.login-loader').hide();
                    $('#btn-signup_error').show().delay(1200).fadeOut('slow');
                } else {
                    $('.login-loader').hide();
                    $('#signup-duplicate_error').append(data + ". Please try again.").show().delay(3000).fadeOut(2000);
                    $('#firstname').val("");
                    $('#lastname').val("");
                    $('#email').val("");
                    $('#signup_password').val("");
                    $('#signup_username').val("");
                }
            });
    });





});