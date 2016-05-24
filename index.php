<?php
include_once 'incs/functions.php';
include_once 'incs/db-connect.php';

sec_session_start();
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>CivicInfo BC - Member Manager Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script> 
    
       <style>
	  	body {
  			padding-top: 40px;
  			padding-bottom: 40px;
  			background-color: #eeeeee;
		}
		
		h1{ 
			color: #00529B;
		}

		.form-signin {
  			max-width: 330px;
  			padding: 15px;
  			margin: 0 auto;
		}
		
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
  			margin-bottom: 10px;
		}
		.form-signin .checkbox {
  			font-weight: normal;
		}
		.form-signin .form-control {
  			position: relative;
  			height: auto;
  			-webkit-box-sizing: border-box;
     		-moz-box-sizing: border-box;
          	box-sizing: border-box;
  			padding: 10px;
  			font-size: 16px;
		}
		.form-signin .form-control:focus {
  			z-index: 2;
		}
		.form-signin input[type="email"] {
  			margin-bottom: -1px;
  			border-bottom-right-radius: 0;
  			border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
  			margin-bottom: 10px;
  			border-top-left-radius: 0;
  			border-top-right-radius: 0;
		}
	</style>


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body bgcolor="#EEEEEE">

    <div class="container">
    
      <div class="row" >
          <div class="col-md-6 col-md-offset-3 text-center"> 
          <!--
          <img src="/images/civicjobs/British_Columbia/Organizations/LGMA_Icon_w_Acronym_2009.jpg" width="111" height="104" alt="Local Government Managemetn Association" longdesc="http://www.lgma.ca"> <a href="/" title="Home" border=0>
          -->
          <a href="http://www.civicinfo.bc.ca">
              <img src="https://www.civicinfo.bc.ca/production/images/logo-civicinfo.png" width="228" height="32" alt="CivicInfo BC logo" border=0 class="brand-logo">
          </a><br>
              <h1>Member Manager</h1>
        </div>
      </div>
      
      
        
        
         <form  action="incs/process-login.php" method="post" name="login_form" class="form-signin">     
            <?php if (isset($_GET['error'])) { ?>
        			<div class="alert alert-danger" role="alert" >
  					Error Logging In!<br> if you continue to have login issues please contact <a href="mailto:info@civicinfo.bc.ca">info@civicinfo.bc.ca</a>
					</div>
	      <?php  }   ?> 
          
            <?php if (isset($_GET['code'])) { ?>
        			<div class="alert alert-warning" role="alert" >
  					You have been logged out.</a>
					</div>
	      <?php  }   ?> 
                          
            <label for="email" class="sr-only">Email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus/>
           
            <label for="password" class="sr-only">Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
            
            <!--<input type="submit" name="submit"
                   value="Login" 
                  /> -->
            
            <input type="submit" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" class="btn btn-lg btn-primary btn-block" /> 
        </form>

      
        <!--
         <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        -->
        <!--<div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>-->
        <!--
        <div>&nbsp;&nbsp;<span class="glyphicon glyphicon-alert" aria-hidden="true"></span>&nbsp;<a href="forget.php">Forgot Login?</a>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      -->

    </div> <!-- /container -->

	<?PHP   

	if ($mysqli) {
  	//echo "Connection Exists";	
  		mysqli_close($mysqli);
	}

	?>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
