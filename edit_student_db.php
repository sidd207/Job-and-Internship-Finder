<?php
//Start the session to see if the user is authenticated user.
session_start();


	

	
	// Code to be executed when 'Insert' is clicked.
	if (isset($_POST['submit'])){			

		//validation flag to check that all validations are done
		$validationFlag = true;
		
		//Check all the required fields are filled
		if(!($_POST['fname'] && $_POST['lname'] && $_POST['sex'] && $_POST['phoneno'] &&$_POST['pass']	&& $_POST['college'] && $_POST['branch'] && $_POST['email']&& $_POST['year'])){
			echo 'All the fields marked as * are compulsary.<br>';
			$validationFlag = false;
		}
		else{
			$fname = "'".$_POST['fname']."'";
			$pass = "'".$_POST['pass']."'";
			$lname = "'".$_POST['lname']."'";
			$branch = "'".$_POST['branch']."'";
			$college = "'".$_POST['college']."'";
			$sex = "'".$_POST['sex']."'";
			$email = "'".$_POST['email']."'";
			$year = $_POST['year'];
			$phoneno = $_POST['phoneno'];
			$dob = "'".$_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day']."'";
		}			
		
		if(!$_POST['month'] || !$_POST['day'] || !$_POST['year'])
			$dob = 'NULL';				
		
		//Check for valid date
		if($dob != 'NULL'){
			if(!checkdate($_POST['month'],$_POST['day'],$_POST['year'])){
				echo $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'] . ' not a	valid date. Please enter it properly.';
				$validationFlag = false;
			}
		}
		
		if(!$_POST['houseno'])
			$houseno = 'NULL';
		else
			$houseno = $_POST['houseno'];

		if(!$_POST['postcode'])
			$postcode = 'NULL';
		else
			$postcode = $_POST['postcode'];
		if(!$_POST['street'])
			$street = 'NULL';
		else
			$street = "'".$_POST['street']."'";
		if(!$_POST['town'])
			$town = 'NULL';
		else
			$town = "'".$_POST['town']."'";
			
		
		
		if(!$_POST['technical'])
			$technical = 'NULL';
		else
			$technical = "'".$_POST['technical']."'";
		
		if(!$_POST['achievement'])
			$achievement = 'NULL';
		else
			$achievement = "'".$_POST['achievement']."'";
		
		if(!$_POST['interest'])
			$interest = 'NULL';
		else
			$interest = "'".$_POST['interest']."'";
		
		if(!$_POST['hobbies'])
			$hobbies = 'NULL';
		else
			$hobbies = "'".$_POST['hobbies']."'";
		
		if(!$_POST['cgpa'])
			$cgpa = 'NULL';
		else
			$cgpa = $_POST['cgpa'];					

		//If all validations are correct, connect to MySQL and execute the query
		if($validationFlag){
			//Connect to mysql server
			$link = mysqli_connect('dbms.iiitdmj.ac.in', '2013124', 'rps2013124');

			//Check link to the mysql server
			if(!$link){
				echo '1';
				die('Failed to connect to server: ' . mysqli_error($link));
			}
			
			//Select database
			$db = mysqli_select_db($link,'2013124');
			if(!$db){
				echo '1';
				die("Unable to select database");
			}
			print_r($_POST);
			//Create Insert query
			$query = "INSERT INTO STUDENT
						(FNAME,LNAME,DOB,SEX,STREET,HOUSENO,POSTCODE,TOWN,PHONENO,COLLEGE,BRANCH,TECHNICAL,ACHIEVEMENT,INTEREST,HOBBIES,CGPA,EMAIL,YEAR) 
						VALUES 
						($fname,$lname,$dob,$sex,$street,$houseno,$postcode,$town,$phoneno,$college,$branch,$technical,$achievement,$interest,$hobbies,$cgpa,$email,$year)";
			
			//Execute query
			$results = mysqli_query($link,$query);
			if(!$results)
				echo 'FIRST QUERY : '.mysqli_error($link) . '<br>';
			else
				echo "query done";
			$query = "INSERT INTO LOGINS
						(USER_ID,PASSWORD,TYPE) 
						VALUES 
						($email,$pass,'STUDENT')";
			
			//Execute query
			$results = mysqli_query($link,$query);
			
			//Check if query executes successfully
			if($results == FALSE)
				echo 'SECOND Query: '.mysqli_error($link) . '<br>';
			else
				echo 'Data inserted successfully! ';
				header("location:main.php");}
		}
		
	}
	
	
?>

