<!doctype html>
<html lang="en">
    
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="3CMvxIuAgQTqWsqxlUQxzfuiirVHOjDA5AwnDoz9">

        <title>Login | Surfit</title>

        <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/icons/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/img/icons/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="assets/img/icons/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="assets/img/icons/favicon-16x16.png" sizes="16x16" />
        <meta name="application-name" content="Surfit"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="http://www.Surfit.com/assets/img/icons/mstile-144x144.png" />
 <meta name="description" content=""/>-->

                <link media="all" type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">

        <link media="all" type="text/css" rel="stylesheet" href="assets/css/font-awesome.min.css">

        <link media="all" type="text/css" rel="stylesheet" href="assets/css/metisMenu.css">

        <link media="all" type="text/css" rel="stylesheet" href="assets/css/sweetalert.css">

        <link media="all" type="text/css" rel="stylesheet" href="assets/css/bootstrap-social.css">

        <link media="all" type="text/css" rel="stylesheet" href="assets/css/app.css">


            </head>
    <body>
	<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
	
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html" style="padding: 7px 0 0 0;">
                        <!--<img src="assets/img/Surfit-logo.png" width="170" height="40" alt="Surfit">-->
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse">
                    <a href="#" id="sidebar-toggle" class="btn">
                        <i class="navbar-icon fa fa-bars icon"></i>
                    </a>


                                        <div  class="navbar-right-full">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                
                                <a href="login.php">
                                    <i class="fa fa-lock"></i>
                                    Login                                </a>
                                
                            </li>

                            <li>
                                
                                <a href="register.php">
                                    <i class="fa fa-pencil"></i>
                                    Sign Up                                </a>
                                
                            </li>
                        </ul><!-- navbar-right end tag -->
                    </div>

                    <div class="navbar-right-mobile">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                    <img alt="login /sign up" class="img-circle" width="32" height="32" src="assets/img/login.png">

                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="login.php">
                                            <i class="fa fa-lock"></i>
                                            Login                                        </a>
                                    </li>
                                    <li>
                                        <a href="register.php">
                                            <i class="fa fa-user"></i>
                                            Sign Up                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- navbar-right end tag -->


                    </div>

                    



                </div><!-- navbar-collapse end tag -->
            </div><!-- container-fluid end tag -->
        </nav>

                <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li class="">
                <a href="index.php" class="">
                    <i class="fa fa-laptop fa-fw"></i> Home                </a>
            </li>

            

 





            <li class="">
                <a href="website/spin.html" class="">
                    <i class="fa fa-rotate-right fa-fw"></i> Spin Website                </a>
            </li>
            <li class="">
                <a href="music/spin.html" class="">
                    <i class="fa fa-rotate-right fa-fw"></i> Spin Muisc                </a>
            </li>
            <li class="">
                <a href="video/spin.html" class="">
                    <i class="fa fa-rotate-right fa-fw"></i> Spin Video                </a>
            </li>

       



            
            
            
            
                    </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>        
        <div id="page-wrapper">
            <div class="container-fluid">
                
<div class="form-wrap col-md-5 auth-form" id="login">
        <h1 class="page-header">
        Login    </h1>
    <div style="text-align: center; margin-bottom: 25px;">
        <!--<img src="assets/img/Surfit-logo.png" alt="Surfit">-->
    </div>

        
    <form role="form" action="" method="POST" name="login" id="login-form" autocomplete="off">
        <input type="hidden" value="3CMvxIuAgQTqWsqxlUQxzfuiirVHOjDA5AwnDoz9" name="_token">

        
        <div class="form-group input-icon">
            <label for="username" class="sr-only">Email or Username</label>
            <i class="fa fa-user"></i>
            <input type="text" name="username" id="username" class="form-control" placeholder="Email or Username">
        </div>
        <div class="form-group password-field input-icon">
            <label for="password" class="sr-only">Password</label>
            <i class="fa fa-lock"></i>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <a href="password/remind.html" class="forgot">I forgot my password</a>
                    </div>
        <div class="checkbox">

                            <input type="checkbox" name="remember" id="remember" value="1"/>
                <label for="remember">Remember me?</label>
            
                            <a href="register.html" style="float: right;">Don't have an account?</a>
                    </div>
        <div class="form-group">
             <button type="submit" class="btn btn-custom btn-lg btn-block" id="btn-login">
                Log In            </button>
        </div>
       
    </form>

    <div class="divider-wrapper">
        <!--<hr class="or-divider">-->
    </div>

    <div class="row">

             <!--       <div class="col-md-12 col-spaced">
                <a class="btn btn-block btn-social btn-facebook" href="https://www.facebook.com/v2.5/dialog/oauth?client_id=228321880917236&redirect_uri=http%3A%2F%2Fwww.Surfit.com%2Fauth%2Ffacebook%2Fcallback&scope=email&response_type=code&state=QX6Bq37E0GBvkVSau26sp4eT9sAgUu9JiNzm05gm&auth_type=rerequest">
                    <i class="fa fa-facebook"></i>
                    Facebook
                </a>
            </div>-->
        
        
            </div>


</div>

            </div>
            
            
          <div class="col-lg-12" >

    <!--<div class="col-md-3">
        <a href="aboutus.html"> About Us</a> -
        <a href="faq.html">FAQ</a>    
    </div>
    <div class="col-md-3">
        <a href="sitemap.html" >Sitemap</a>   - 
        <a href="content/index.html">Our Blog</a>
    </div>
    <div class="col-md-3">
        <a href="privacy.html"> Privacy Policy</a>     
        <a href="termsandconditions.html"> Terms and Conditions</a>
    </div>
    <div class="col-md-3">
        <a href="contactus.html"><img src="assets/img/contactus.jpg" alt="Contact Us" width="36" height="36"></a>
        <a href="https://www.facebook.com/Surfit/"><img src="assets/img/facebook.png" alt="Surfit's Facbook Page" width="36" height="36"></a>
        <a href="https://twitter.com/Surfit"><img src="assets/img/twitter.png" alt="Surfit on Twitter" width="36" height="36"></a>
    </div>-->

</div>
  
         
            
        </div>
         
       
        <script src="assets/js/spinsnap.js"></script>

       
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
        </script>
        <script src="vendor/jsvalidation/js/jsvalidation.js"></script>

        <script src="assets/js/as/app.js"></script>

            <script src="assets/js/as/login.js"></script>

    <script>
    jQuery(document).ready(function(){

        $("#login-form").validate({
            errorElement: 'span',
            errorClass: 'help-block error-help-block',

            errorPlacement: function(error, element) {
                if (element.parent('.input-group').length ||
                    element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                    error.insertAfter(element.parent());
                    // else just place the validation message immediatly after the input
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error'); // add the Bootstrap error class to the control group
            },

            /*
             // Uncomment this to mark as validated non required fields
             unhighlight: function(element) {
             $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
             },
             */
            success: function(element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // remove the Boostrap error class from the control group
            },

            focusInvalid: false, // do not focus the last invalid input
                        invalidHandler: function(form, validator) {

                if (!validator.numberOfInvalids())
                    return;

                $('html, body').animate({
                    scrollTop: $(validator.errorList[0].element).offset().top
                }, 600);
                $(validator.errorList[0].element).focus();

            },
            
            rules: {"username":{"laravelValidation":[["Required",[],"The username field is required.",true]]},"password":{"laravelValidation":[["Required",[],"The password field is required.",true]]}}        })
    })
</script>

        
          <!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=11036408; 
var sc_invisible=1; 
var sc_security="17913ce1"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free web stats"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="http://c.statcounter.com/11036408/0/17913ce1/1/" alt="free
web stats"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->    
<?php } ?>
</body>

</html>
