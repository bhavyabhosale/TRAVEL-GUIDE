<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
		<title>About Us | 2rism</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
		
		<?php 
		
			if(!isset($_SESSION["username"])) {
				include("common/headerLoggedOut.php");
			}
			else {
				include("common/headerLoggedIn.php");
			}
		
		?>
		
		<div class="spacer">a</div>
		
		<div class="col-sm-12 aboutUsWrapper">
			
			<div class="headingOne">
				
				About Us
				
			</div>
			
			<div class="para">
				Welcome to 2rism, your one-stop solution for all your travel booking needs. Whether you're planning a business trip, a family vacation, or a spontaneous getaway, we've got you covered. We specialize in providing seamless booking services for flights, hotels, and trains, ensuring that your travel experience is smooth from start to finish.2rism was founded with a simple mission: to simplify the travel booking process and provide our customers with a platform that offers convenience, affordability, and peace of mind. We understand that planning a trip can be overwhelming, so we have created an easy-to-use platform that brings the best travel options to your fingertips.
				
			</div>
			
		</div> 
	
	<div class="spacerLarge">.</div> 
			
		<?php include("common/footer.php"); ?>
				
	</body>
	
	
	
</html>