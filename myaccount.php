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
	$db = mysqli_select_db($link,'2013124');
	if(!$db){
		die("Unable to select database");
	}
	
		$qry = "SELECT * FROM LOGINS
			WHERE USER_ID = "."'". $_SESSION['USER_ID']."'";
	
	//Execute query
	$result = mysqli_query($link,$qry);
	
	$row = mysqli_fetch_assoc($result);
	
if ($row['TYPE']=='STUDENT'){
		header("location: myaccount1.php");
		exit();
}

if ($row['TYPE']=='EMPLOYEE'){
		header("location: myaccount2.php");
		exit();
}
if ($row['TYPE']=='COMPANY'){
		header("location: myaccount3.php");
		exit();
}
if ($row['TYPE']=='PROFESSOR'){
		header("location: myaccount4.php");
		exit();
}
}
		?>