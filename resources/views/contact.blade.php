@extends('layouts.navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Butlers">
    <meta name="author" content="">
    <title>Minimart Super</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/vendors.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Page Preload -->
	<main>

		<div class="hero_single inner_pages background-image" data-background="url(https://images.pexels.com/photos/95425/pexels-photo-95425.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Contact Us</h1>
							<p>Safe Delivery Direct To Your Doorstep</p>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="frame white"></div>
		</div>
		<!-- /hero_single -->

		<div class="bg_gray">
		    <div class="container margin_60_40">
		        <div class="row justify-content-center">
		            
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_pin_alt"></i>
		                    <h2>Address</h2>
		                    
							
		                    
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_clock_alt"></i>
		                    <h2>Opening Hours</h2>		                    
							<div></div>
							<div></div>
		                    <small></small>
		                </div>
		            </div>
		        </div>
		        <!-- /row -->
		    </div>
		    <!-- /container -->
		</div>
		<!-- /bg_gray -->

		<div class="container margin_60_40">
			<div class="text-center">
				<h5 class="mb_5">Drop Us a Line</h5>
			</div>
		    <div class="row ">
		        
		        <div class="col-lg-12 col-md-6 add_bottom_25 text-center">
				<iframe class="map_contact " src="https://maps.app.goo.gl/woVhZGXAyjPVivGi8" allowfullscreen></iframe>

		        </div>
		    </div>
		    <!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!-- /main -->

	<footer>
	    <div class="frame black"></div>
	    <div class="container">
	        <div class="row">
	            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
	                <div class="footer_wp">
	                    <i class="icon_pin_alt"></i>
	                    <h3>Address</h3>
	                    <p></p>
	                </div>
	            </div>
	            
	            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
	                <div class="footer_wp">
	                    <i class="icon_clock_alt"></i>
	                    <h3>Opening Hours</h3>
	                    <ul>
	                        <li>24Hrs</li>
	                        
	                    </ul>
	                </div>
	            </div>
	            
	        </div>
	        <!-- /row-->
	        <hr>
	        <div class="row">
	            <div class="col-sm-5">
	                
	            </div>
	            <div class="col-sm-7">
	                <div class="follow_us">
	                    <ul>
	                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
	                        <li><a href="https://www.facebook.com/butlerspub/"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
	                        <li><a href="http://www.instagram.com/butlerspub"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
	                        <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	        <p class="text-center"></p>
	    </div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->
		
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/common_func.js"></script>
    <script src="phpmailer/validate.js"></script>

</body>
</html>