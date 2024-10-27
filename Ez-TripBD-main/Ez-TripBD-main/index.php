<?php session_start(); ?>

<!DOCTYPE html>

<html>

	<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>Home | tourism_management</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/hover-min.css" rel="stylesheet"/>
	<link href="css/main.css" rel="stylesheet"/>
   	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	
	</head>
	
	<body>
	
		<div class="col-xs-12 home">
		
			<!-- HEADER SECTION STARTS -->
				
			<div class="col-sm-12">
				
				<div class="header">
					
					<?php
					
					if(!isset($_SESSION["username"])) {
						include("common/headerTransparentLoggedOut.php");
					}
					else {
						include("common/headerTransparentLoggedIn.php");
					}
					
					?>
				
				</div> <!-- header -->
			
			</div> <!-- col-sm-12 -->
				
			<!-- HEADER SECTION ENDS -->
	
			<!-- carousel -->
		
			<div class="col-xs-12 banner">
		
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
		  	
			  	<ol class="carousel-indicators">
			   		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			   		<li data-target="#myCarousel" data-slide-to="1"></li>
			   		<li data-target="#myCarousel" data-slide-to="2"></li>
			  	</ol>
			
			   	<div class="carousel-inner">
			   	
			    	<div class="item active">
			    	  <img src="images/carousel/1.png" alt="Image1">
			    	</div>
			    	
			    	<div class="item">
			    	  <img src="images/carousel/2.jpg" alt="Image2">
			    	</div>
				
			    	<div class="item">
			    	  <img src="images/carousel/image3.jpg" alt="Image3">
			    	</div>
			    
			  	</div>
				
			   	<a href="#myCarousel" class="left carousel-control" data-slide="prev">
			    	<span class="glyphicon glyphicon-chevron-left"></span>
			    </a>
			    <a href="#myCarousel" class="right carousel-control" data-slide="next">
			        <span class="glyphicon glyphicon-chevron-right"></span>
			    </a>
			    
			</div>
			
		</div> <!-- banner -->
		
			


			<!---icons---->
			<div class="col-xs-12 popularDestinationsContainer">
				
				<div class="col-xs-12 destinationHolder">
				
					<div class="col-xs-12 destinationQuote">
						What would you like to book today?
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
					
						<a href="hotels.php" style="color: black;">
						
						<div class="col-xs-12 icons text-center">
							<img src="images/icons/hotel.png" alt="hotels" class="iconsDim text-center"/>
						</div>
						
						<div class="col-xs-12 heading">
							Hotels
						</div>
						
						</a>
						
					</div>
					
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						<a href="flights.php" style="color: black;">
							
							<div class="col-xs-12 icons text-center">
								<img src="images/icons/flight.png" alt="flights" class="iconsDim text-center"/>
							</div>
							
							<div class="col-xs-12 heading">
								Flights
							</div>
							
						</a>
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						<a href="trains.php" style="color: black;">
							
							<div class="col-xs-12 icons text-center">
								<img src="images/icons/train.png" alt="trains" class="iconsDim text-center"/>
							</div>
							
							<div class="col-xs-12 heading">
								Trains
							</div>
							
						</a>
							
					</div>
			
				</div>

				<!--popular destinations-->
			
			<div class="col-xs-12 popularDestinationsContainer">
				
				<div class="col-xs-12 destinationHolder">
				
					<div class="col-xs-12 destinationQuote">
					
						Popular Destinations
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
							<img src="images/popularDestinations/cox.jpg" alt="popularDestination1" class="picDim text-center"/>
						</div>
						
						<div class="col-xs-12 heading">
							Cosx Bazar
						</div>
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
							<img src="images/popularDestinations/tea.jpg" alt="popularDestination1" class="picDim text-center"/>
						</div>
						
						<div class="col-xs-12 heading">
							Sylhet
						</div>
						
					</div>
					
					<div class="col-xs-12 containerGrids hvr-buzz-out">
						
						<div class="col-xs-12 pics text-center">
							<img src="images/popularDestinations/tiger.jpg" alt="popularDestination1" class="picDim text-center"/>
						</div>
						
						<div class="col-xs-12 heading">
							Sundarban
						</div>
						
					</div>
					
					
					
				</div>
				
			</div>
			
		</div> <!-- home -->
		
		<!-- FOOTER SECTION STARTS -->
					
		<div class="footerMod col-sm-12" style="background-color: #333; color: #fff; padding: 20px;">
    <div class="col-sm-4">
	<div class="footerHeading">
            Contact Us
        </div>
        <div class="footerText">
            Dhaka <br> Bangladesh
        </div>
        <div class="footerText">
            E-mail: Tahsin@Eztrip.com
        </div>
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
        <div class="footerHeading">
            Social Links
        </div>
        <div class="socialLinks">
		<div class="fb">
                facebook.com/Ez Trip
            </div>
            <div class="gp">
                www.google.com/Ez Trip
            </div>
            <div class="tw">
                twitter.com/Ez Trip
            </div>
            <div class="in">
                linkedin.com/Ez Trip
            </div>
        </div> <!-- social links -->
    </div>
    <div class="col-sm-12">
        <div class="copyrightContainer">
		<div class="copyright">
                Copyright &copy; 2024 Md Tahsin
            </div>
        </div>
    </div>
</div>


<!-- footer -->
				
			<!-- FOOTER SECTION ENDS -->
		
	</body>
	
</html>