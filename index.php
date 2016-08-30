<?php
session_start();
session_unset(); 
session_destroy();
?>
<html>
<head>
<title>Login Page</title>
<link rel="shortcut icon" href="images/fav.jpg"/>

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

	

<style type="text/css">
.auto-style2 {
	font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}
.auto-style3 {
	font-size: x-large;
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
}
</style>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/normalize.min.css">
   
	 <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-21041420-11', 'auto');
      ga('send', 'pageview');
    </script>

</head>

<body background="images/215.jpg">

	<div class="navbar navbar-fixed-top" style="left: 0; right: 0; top: 0; height: 83px">
				
				
					<a class="navbar-brand pull-left" href="/"><img src="images/logo.jpg" alt="Your Logo"></a>
					
				
					
						
						<form class="navbar-form pull-right" name="myloginForm" method="post" action="login_check.php" style="margin-left: 600px; height: 84px;">
							<strong><span class="auto-style2">User Name&nbsp;
							</span>
							<input name="login" type="text" id="login" style="height: 28px"/>&nbsp;&nbsp;&nbsp;
							<span class="auto-style2">&nbsp;Password&nbsp;
							</span>
							<input name="password" type="password" style="height: 28px"/><button type="submit" name="submit" value="Login">
							Login</button><sub><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input name="" type="checkbox"/>keep me login?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forget.html"><u>Forget password?</u></a></sub>&nbsp;
								
								
						</form>
						
			
			
	</div>
				

    <div  style="margin-top:100px">
		<center>
		<h1 class="auto-style2">Registration</h1>
		<form action="register_db.php" method="post">
			<table cellpadding = "10">
				<tr>
					<td class="auto-style3">First Name</td>
					<td><br>
							<strong>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="firstName" maxlength="25" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></strong><br>
					<br></td>
				</tr>
				<tr></br>
					<td class="auto-style3">Last Name</td>
					<td><br>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="lastName" maxlength="20" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"><br>
					<br></td>
				
				</tr>
			
				<tr>
					<td class="auto-style3">Profession</td>
					<td class="auto-style3">
						&nbsp;&nbsp;&nbsp;&nbsp;
						<Input type = 'Radio' Name ='sex' value= 'student'  >Student
						<Input type = 'Radio' Name ='sex' value= 'employee' >Employee
						<Input type = 'Radio' Name ='sex' value= 'professor' >Professor
						<Input type = 'Radio' Name ='sex' value= 'company' >Company Representative 
					<br>
					</td>
				</tr>
			
				<tr>
					<td class="auto-style3">Email Address</td>
					<td><br>&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email" maxlength="25" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"><br>
					<br></td>
				</tr>
			</table>
			<table cellpadding = "20">
				<tr>
					<td><input type="submit" name="submit" value="Register" style="35px; height: 36px; width: 80px;border-radius:2px;box-shadow:8px 8px 10px;"></td>
					<td><input type="submit" name="submit" value="Cancel" style="35px; height: 36px; width: 80px;border-radius:2px;box-shadow:8px 8px 10px;"></td>
					
				</tr>
			</table>
		</form>
		</center>
</div>

  
   
    <hr>


	<footer bgcolor="black">
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



    
    <hr>

</div>




   </body>
   </html>