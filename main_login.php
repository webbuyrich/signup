
<div class="container"> 
    <div class="col-lg-12">
    <div class="col-lg-4"></div>
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-lg-4">                    
        <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                    <!--<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#" onClick="$('#loginbox').hide(); $('#lost-password').show()">Forgot password?</a></div>-->
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        
                    <form id="loginform" class="form-horizontal" role="form">
                                
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                                </div>
                            
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                </div>
                                

                            
                        <div class="input-group">
                                  <div class="checkbox">
                                    <label>
                                      <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                    </label>
                                  </div>
                                </div>


                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 col-xs-12 controls">
                                  <a id="btn-login" name="submit" class="btn btn-success">Login  </a>
                                  <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->
                                  <img class="login-loader" src="images/loader-green.gif" style="display:none;" />
                                  <a id="btn-password_error" href="#" class="btn btn-danger" style="display: none;">You must enter a password!</a>
                                  <a id="btn-username_error" href="#" class="btn btn-danger" style="display: none;">Please enter your username!</a>
                                  <a id="btn-login_error" href="#" class="btn btn-danger" style="display: none;">Login Failed! Please try Again!</a>
                                 
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%; " id="ajaxresult" >
                                        Don't have an account! 
                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Sign Up Here
                                    </a>
                                    </div>

                                </div>
                            </div> 
                            <div id="test-post"></div>   
                        </form>     



                    </div>                     
                </div>
            </div>
            <div class="col-lg-4"></div>  
        </div>
    </div><!-- END ROW -->
    <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Sign Up</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                    </div>  
                    <div class="panel-body" >
                        <form id="signupform" class="form-horizontal" role="form">
                            
                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>
                                
                            
                              
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email Address">
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">First Name</label>
                                <div class="col-md-9">
                                    <input id="firstname" type="text" class="form-control" name="firstname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                <div class="col-md-9">
                                    <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input id="signup_password" type="password" class="form-control" name="signup-password" placeholder="Password">
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label for="username" class="col-md-3 control-label">User Name</label>
                                <div class="col-md-9">
                                    <input id="signup_username" type="text" class="form-control" name="signup-username" placeholder="">
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9 col-xs-12">
                                    <button id="btn-signup" type="button" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> &nbsp Sign Up</button>
                                    <button id="btn-signup_error" type="button" style="display:none;" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>&nbspAll fields are required!</button>
                                    <img class="login-loader" src="images/loader-green.gif" style="display:none;" />
                                    <!--<span style="margin-left:8px;" id="word_or">or</span>-->
                                                                        
                                </div>

                            </div>
                            <div id="signup-success" class="alert alert-success" style="display:none;" role="alert">Your account has been created. Please sign in.</div>
                            <div id="signup-duplicate_error" class="alert alert-danger" style="display:none;" role="alert"></div>              
                        </form>
                     </div>
                </div>      
     </div> 
     <div id="lost-password" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                     <div class="panel panel-info">
                         <div class="panel-heading">
                             <div class="panel-title">Lost Password</div>
                             <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink2" href="index.php" >Sign In</a></div>
                         </div>  
                         <div class="panel-body" >
                             <form id="signupform" class="form-horizontal" role="form">
                                 
                                 <div id="signupalert" style="display:none" class="alert alert-danger">
                                     <p>Error:</p>
                                     <span></span>
                                 </div>
                                     
                                 
                                   
                                 <div class="form-group">
                                     <label for="email" class="col-md-3 control-label">Email</label>
                                     <div class="col-md-9">
                                         <input id="email" type="text" class="form-control" name="email" placeholder="Email Address">
                                     </div>
                                 </div>
                                     
                                

                                 <div class="form-group">
                                     <!-- Button -->                                        
                                     <div class="col-md-offset-3 col-md-9 col-xs-12">
                                         <button id="btn-signup" type="button" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> &nbsp Sign Up</button>
                                         <button id="btn-signup_error" type="button" style="display:none;" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i>&nbspAll fields are required!</button>
                                         <img class="login-loader" src="images/loader-green.gif" style="display:none;" />
                                         <!--<span style="margin-left:8px;" id="word_or">or</span>-->
                                                                             
                                     </div>

                                 </div>
                                 <div id="signup-success" class="alert alert-success" style="display:none;" role="alert">Your account has been created. Please sign in.</div>              
                             </form>
                          </div>
                     </div>      
          </div> 
</div>

