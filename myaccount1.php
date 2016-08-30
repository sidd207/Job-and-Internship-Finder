<html>
		<head>
		 <link rel="stylesheet" type="text/css" href="css/resume.css">
   
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Job and Interview Opportunity</title>
		<meta name="description" content="Learn how to code your first responsive website with the new Twitter Bootstrap 3.">
		<link rel="shortcut icon" href="images/fav.jpg"/>
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
		
		<style type="text/css">
				.auto-style2 {
					font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
				}
				.auto-style3 {
					font-size: x-large;
					font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
				}
				</style>
		
		</head>
	<body background="images/215.jpg">
	
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
	   
<?php
	//Start the session to see if the user is authencticated user.
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
	$db = mysqli_select_db($link,'2013124');
	if(!$db){
		die("Unable to select database");
	}
	
	//Create query
	$qry = "SELECT * FROM STUDENT
			WHERE EMAIL = "."'". $_SESSION['USER_ID']."'";
	
	//Execute query
	$result = mysqli_query($link,$qry);	
$row = mysqli_fetch_assoc($result);
			echo '<div id="nav">
			   <div style="float:left">
				   <img src="images/sidd.jpg" class="sidd"></img>
			    </div>
				
				<div style="float:left;margin-left:80px">
				<h2>'.$row['FNAME'].$row['LNAME'].'</h2>
										<p style="font-size:15px;">
										'.$row['BRANCH'].'<br>
						<br>'.$row['COLLEGE'].
						'<br>
						Mobile: '.$row['PHONENO'].'<br>
						Email:'.$row['EMAIL'].'</a>
										</p>
										
				</div>
				
			</div>
			
			
		
		<div id="obj">
			
			<div style="height:30px;width:720px;background-color:skyblue;margin-left:10px"><h3>CGPA/YEAR</h3></div>
			<p style="font-size:15px;font-style: normal;font-weight:bold;margin-left:10px">'.$row['CGPA'].'/'.$row['YEAR'].'</p>
			</div>
			
			
			
			
			
			
			<div id="obj">
			
			<div style="height:30px;width:720px;background-color:skyblue;margin-left:10px"><h3>INTEREST</h3></div>
			<p style="font-size:15px;font-style: normal;font-weight:bold;margin-left:10px">'.$row['INTEREST'].'</p>
			</div>
			
			<div id="obj">
			
			<div style="height:30px;width:720px;background-color:skyblue;margin-left:10px"><h3>Achievement</h3></div>
			<p style="font-size:15px;font-style: normal;font-weight:bold;margin-left:10px">'.$row['ACHIEVEMENT'].'</p>
			</div>

<div id="obj">
			
			<div style="height:30px;width:720px;background-color:skyblue;margin-left:10px"><h3>Technical skills</h3></div>
			<p style="font-size:15px;font-style: normal;font-weight:bold;margin-left:10px">'.$row['TECHNICAL'].'</p>
			</div>

			


			<div id="per">
			<div style="height:30px;width:720px;background-color:skyblue;margin-left:10px"><h3>PERSONAL INFORMATION </h3></div>
	<p style="margin-left:30px">
<b>Date Of Birth</b>'.$row['DOB'].'<br>
<b>Permanent Address</b> '.$row['HOUSENO'].$row['STREET'].$row['TOWN'].$row['POSTCODE'].' <br>
<b>Sex</b> '.$row['SEX'].'<br>
<b>Hobbies</b> '.$row['HOBBIES'].'<br>
	</p>
			</div>



			<div id="ref">
			<div style="height:30px;width:720px;background-color:skyblue;margin-left:10px"><h3>Reference</h3></div>
			<p style="font-size:15px;font-style: normal;font-weight:bold;margin-left:10px">Available on request</p>
			</div>
			
			
			<br><br><br>
				<center>	<a href="edit.php"><input type="button" name="fname" maxlength="25" value="submit" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;" /></a>
							</center>';
						
		
		}
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
							<l	i><a href="#">Links</a></li>
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
		


	  <body>
	
</html>