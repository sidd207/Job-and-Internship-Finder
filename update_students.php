<?php
//Start the session to see if the user is authencticated user.
session_start();

//Check if the user is authenticated first. Or else redirect to login page

	
//Connect to mysql server
	$link = mysqli_connect('dbms.iiitdmj.ac.in', '2013124', 'rps2013124');

	//Check link to the mysql server
	if(!$link){
		die('Failed to connect to server: ' . mysqli_error($link));
	}
	
	//Select database
	$db = mysqli_select_db($link,'2013124');
	if(!$db){
		die("Unable to select database");
	}
	

	// Code to be executed when 'Update' is clicked.
	if (isset($_POST['submit'])){
		
			$validationFlag = true;
			
			$email = "'".$_SESSION['USER_ID']."'";
			
		//	$update = "UPDATE STUDENT SET EMAIL = ".$email." ";
			
			
			if($_POST['fname']){
				$fname = "'".$_POST['fname']."'";
				$update =" UPDATE STUDENT SET FNAME = ".$fname."";
			}
			
			
			if($_POST['lname']){
				$lname = "'".$_POST['lname']."'";
				echo $lname;
				$update = $update . ", LNAME = "."'".$lname."'";
			}

			if($_POST['street']){
				$street ="'".$_POST['street']."'";
				$update = $update . ", STREET = '$street'";
			}

			if($_POST['month'] || $_POST['day'] || $_POST['year'])
			{
				if(!checkdate($_POST['month'],$_POST['day'],$_POST['year']))
				{
					$dob = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
					$update = $update . ", DOB = '$dob'";
				}
				else{
					echo 'Entered DOB is invalid.<br>';
					$validationFlag = false;
				}
			}
			
			if(isset($_POST['sex'])){
				$sex = "'".$_POST['sex']."'";			
				$update = $update . ", SEX = $sex";
			}
			
			if($_POST['college']){
				$college = "'".$_POST['college']."'";
				$update = $update . ", COLLEGE = '$college'";
			}
			
			if($_POST['houseno']){
				$street = $_POST['houseno'];
				$update = $update . ", STREET = '$houseno'";
			}
			
			
			
			if($_POST['postcode']){
				$postcode = $_POST['postcode'];
				$update = $update . ", POSTCODE = '$postcode'";
			}
			
			if($_POST['town']){
				$town = "'".$_POST['town']."'";
				$update = $update . ", TOWN = '$town'";
			}
			
			if($_POST['phoneno']){
				$phoneno = $_POST['phoneno'];
				$update = $update . ", PHONENO = '$phoneno'";
			}
			
			if($_POST['branch']){
				$branch = "'".$_POST['branch']."'";
				$update = $update . ", BRANCH = '$branch'";
			}
			if($_POST['technical']){
				$branch = "'".$_POST['technical']."'";
				$update = $update . ", TECHNICAL = '$technical'";
			}
			if($_POST['achievement']){
				$achievement = "'".$_POST['achievement']."'";
				$update = $update . ", ACHIEVEMENT = '$achievement'";
			}
			if($_POST['interest']){
				$interest = "'".$_POST['interest']."'";
				$update = $update . ", INTEREST = '$interest'";
			}
			if($_POST['hobbies']){
				$hobbies = "'".$_POST['hobbies']."'";
				$update = $update . ", HOBBIES = '$hobbies'";
			}if($_POST['cgpa']){
				$cgpa = $_POST['cgpa'];
				$update = $update . ", CGPA = '$cgpa'";
			}if($_POST['year']){
				$year = $_POST['year'];
				$update = $update . ", YEAR = '$year'";
			}
			
			$update = $update . " WHERE EMAIL = ".$email."";
			
			
				
				//Execute query
				$results = mysqli_query($link,$update);
				
				if($results == FALSE)
					echo mysqli_error($link) . '<br>';
				else
					{echo "1".mysql_info();
					header("location:myaccount1.php");}
			
		
	}
	
	
?>