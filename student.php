<?php
session_start();

?>
<!DOCTYPE html>

<html lang="en" class="demo-3 no-js">

	<head>
	<!--header files atttachement-->
	
	
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Code a Responsive Website with Twitter Bootstrap 3</title>
		<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		<link rel="stylesheet" href="includes/css/styles.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
	
	
	<!--end of header files atttachement-->
	
	
	
	
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Job And Interview Opportunity</title>
		<link rel="shortcut icon" href="images/fav.jpg"/>
		<meta name="description" content="Hover Effects with animated SVG Shapes using Snap.svg" />
		<meta name="keywords" content="animated svg, hover effect, grid, svg shape html, " />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/snap.svg-min.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body background="images/215.jpg">
	
	<!-- start of header -->
	
		<div class="container" id="main">
		
			<div class="navbar navbar-fixed-top" style="left: 0; right: 0; top: 0; height: 80px">
				<div class="container">
					
					<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
					<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				
					<a class="navbar-brand" href="/"><img src="images/logo.jpg" alt="Your Logo"></a>
					
					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul class="nav navbar-nav">
							<li class="active">
								<a href="main.php">Home</a>
							</li>
								<li class="active">
								<a href="alumini.php">Aluminia</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									<li>
										<a href="student.php">Student</a>
									</li>
									
									<li>
										<a href="company.php">Company</a>
									</li>
									
									<li>
										<a href="facalty.php">Professor</a>
									</li>
									
									<li>
										<a href="employee.php">Employee</a>
									</li>
									
								</ul><!-- end dropdown-menu -->
							</li>
						</ul>
						
						<form class="navbar-form pull-left" action="search.php" method="post" >
							<input type="text" name="fname" maxlength="25" class="form-control" placeholder="Search this site..." id="searchInput">
							<input type="submit" name="submit" value="search" style="height: 30px; width: 80px; box-shadow:2px 2px 5px;background-color:rgba(255,255,255,0.3);border-radius:5px;"><span class="glyphicon glyphicon-search"></span>
						</form><!-- end navbar-form -->
						
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									
									
									<li>
										<a href="myaccount.php"><span class="glyphicon glyphicon-refresh"></span> Update Profile</a>
									</li>
									
									
									
									<li class="divider"></li>
									
									<li>
										<a href="logout.php"><span class="glyphicon glyphicon-off"></span> Sign out</a>
									</li>
								</ul>
							</li>
						</ul><!-- end nav pull-right -->
					</div><!-- end nav-collapse -->
				
				</div><!-- end container -->
			</div><!-- end navbar -->
			
			
			
		</div>
	


	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	
	
	
	
	<!-- end of header -->
	
	
	
	
	<br><br><br><br><br><br><br>
		
		
		<div class="container">
			<!-- Top Navigation -->
		
		
			<section id="grid" class="grid clearfix">
				<a href="interninformation.php" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/stu/stu1.jpg">
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>Shreya</h2>
							<p>Soko radicchio bunya nuts gram dulse.</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/stu/stu2.jpg" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>Ruby</h2>
							<p>Two greens tigernut soybean radish.</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/stu/stu3.jpg">
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>Penny</h2>
							<p>Beetroot water spinach okra water.</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/stu/stu1.jpg" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>Sujain</h2>
							<p>Water spinach arugula pea tatsoi.</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/stu/stu5.jpg" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>John</h2>
							<p>Pea horseradish azuki bean lettuce.</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/stu/stu6.jpg"/>
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>Anaya</h2>
							<p>A grape silver beet watercress potato.</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/stu/stu7.jpg" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>Rosy</h2>
							<p>Chickweed okra pea winter purslane.</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>
				<a href="#" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
					<figure>
						<img src="img/stu/stu8.jpg" />
						<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/></svg>
						<figcaption>
							<h2>Alisha</h2>
							<p>Salsify taro catsear garlic gram.</p>
							<button>View</button>
						</figcaption>
					</figure>
				</a>
			</section>
		
		</div><!-- /container -->
		
		
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
					<h6>Copyright &copy; 2013 {name}</h6>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-4">
						<h6>About Us</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div><!-- end col-sm-4 -->
					
					<div class="col-sm-2">
						<h6>Navigation</h6>
						<ul class="unstyled">
							<li><a href="#">Home</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Links</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-2">
						<h6>Follow Us</h6>
						<ul class="unstyled">
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Google Plus</a></li>
						</ul>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-2">
						<h6>Coded with <span class="glyphicon glyphicon-heart"></span> by Sidd</h6>
					</div><!-- end col-sm-2 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</footer>
		




	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<script>
			(function() {
	
				function init() {
					var speed = 300,
						easing = mina.backout;

					[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
						var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
							pathConfig = {
								from : path.attr( 'd' ),
								to : el.getAttribute( 'data-path-hover' )
							};

						el.addEventListener( 'mouseenter', function() {
							path.animate( { 'path' : pathConfig.to }, speed, easing );
						} );

						el.addEventListener( 'mouseleave', function() {
							path.animate( { 'path' : pathConfig.from }, speed, easing );
						} );
					} );
				}

				init();

			})();
		</script>
	</body>
</html>