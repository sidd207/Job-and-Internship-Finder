<html>
<head>
<link rel="stylesheet" href="css/info.css">






<title>Resume </title>
   <link rel="stylesheet" type="text/css" href="css/resume.css">
   
   
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
								<a href="#">Home</a>
							</li>
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									<li>
										<a href="#">Web Design</a>
									</li>
									
									<li>
										<a href="#">Web Development</a>
									</li>
									
									<li>
										<a href="#">SEO</a>
									</li>
									
									<li class="divider"></li>
									
									<li class="dropdown-header">More Services</li>
									
									<li>
										<a href="#">Content Creation</a>
									</li>
									
									<li>
										<a href="#">Social Media Marketing</a>
									</li>
								</ul><!-- end dropdown-menu -->
							</li>
						</ul>
						
						<form class="navbar-form pull-left">
							<input type="text" class="form-control" placeholder="Search this site..." id="searchInput">
							<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
						</form><!-- end navbar-form -->
						
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									<li>
										<a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
									</li>
									
									<li>
										<a href="#"><span class="glyphicon glyphicon-refresh"></span> Update Profile</a>
									</li>
									
									<li>
										<a href="#"><span class="glyphicon glyphicon-briefcase"></span> Billing</a>
									</li>
									
									<li class="divider"></li>
									
									<li>
										<a href="#"><span class="glyphicon glyphicon-off"></span> Sign out</a>
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
	   
	   
	   
	   
	   
	   <?php
	   session_start();
	   //Check if the user is authenticated first. Or else redirect to login page
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
	


	//Connect to mysql server
	$link = mysqli_connect('dbms.iiitdmj.ac.in', '2013124', 'rps2013124');

	//Check link to the mysql server
	if(!$link){
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db('2013124');
	if(!$db){
		die("Unable to select database");
	}
	
	//Create query
	$qry = "SELECT *
			FROM EMPLOYEE
			WHERE EMPLOYEE.EMAIL = $_SESSION['U2_ID']";
	//Execute query
	$result = mysql_query($qry);
$row = mysql_fetch_assoc($result);
        echo '<div class="page-container">

            

            <div class="pricing-table">
                <div class="pricing-table-header">
                    <h2>ALUMINI Information</h2>
                    <h3></h3>
                </div>
                <div class="pricing-table-space"></div>
                <div class="pricing-table-text">
                    <p><strong>THIS IS ONE OF YOUR ALUMINI</strong></p>
                </div>
                <div class="pricing-table-features">
                    <p><strong>FIRST NAME </strong>'. $row['FNAME'].' </p>
					<p><strong>LAST NAME</strong>'. $row['LNAME'].' </p>
					<p><strong>COMAPNY</strong> '. $row['COMAPNY'].'</p>
                    <p><strong>POST DATE</strong> '. $row['POST'].'</p>
                    <p><strong>EMAIL-ID</strong> '. $row['EMAIL'].'</p>
					   
					      
                </div>
                            </div>

        

        </div>

		
		
		
		
		
?>		
		
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
						<h6>Coded with <span class="glyphicon glyphicon-heart"></span> by Brad</h6>
					</div><!-- end col-sm-2 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</footer>
		
    </body>

</html>
