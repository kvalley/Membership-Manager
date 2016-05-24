<?php
include_once 'incs/functions.php';
include_once 'incs/db-connect.php';
include_once 'incs/protected-page.php';

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

    <title>CivicInfo BC - Memberhip Signin</title>
  
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    
 	<link href="incs/css/main.css" rel="stylesheet">


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
    
    <?php  
		include_once 'incs/navbar-decide.php';  	 
	?>
    

	<div class="container-fluid">
      
      <div class="row row-offcanvas row-offcanvas-left">
      
      <?php  
		include_once 'incs/left-decide.php'; ?>
        
        <?PHP //require_once('./incs/lgma/left-nav.inc'); ?>
        
        <div class="col-sm-9 col-md-10 main">
        
          <!--toggle sidebar button-->
          <p class="visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
          </p>
          
         <h1>Welcome <small><?php echo $_SESSION['user_firstname'] ." ". $_SESSION['user_lastname']?></small></h1>
        
   		 <?php    	
        	//If admin
			if ($_SESSION['user_type']== 'admin;') {  
	
				include_once 'incs/admin/home.php';  

			//if LGMA admin
			} else if ($_SESSION['user_type'] == 'lgmaadmin;' or $_SESSION['user_type'] == 'lgma;')  {  
    
				include_once 'incs/lgma/home.php';  
				
			//if LGMA admin
			} else if ($_SESSION['user_type'] == 'camaadmin;' or $_SESSION['user_type'] == 'cama;')  {  
    
				include_once 'incs/cama/home.php';  
	
			// if LGMA user
			} //else if ($_SESSION['user_type'],'lgma;') !== false) {  
	
				///include_once 'incs/lgma/home.php';  
	
			//}
		?>
        
        
        

          
 

        </div>
          
       

          
          
      </div><!--/row-->
	</div>
</div><!--/.container-->



<footer>

	<?PHP   

	if ($mysqli) {
  	//echo "Connection Exists";	
  		mysqli_close($mysqli);
	}

	?>

  <p class="pull-right">© <?php echo date("Y");  ?>&nbsp;<img src="https://www.civicinfo.bc.ca/images/civicinfo300w_transparent2.png" width="216" height="51" alt="CivicInfo BC logo" border=0 class="brand-logo"> </p>
</footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    
      <script language="javascript">
	$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});
	
	</script>
    
  </body>
</html>
