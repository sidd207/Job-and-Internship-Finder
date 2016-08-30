<?php
//Start the session to see if the user is authenticated user.
session_start();


	

	
	// Code to be executed when 'Insert' is clicked.
	if ($_POST['submit'] == 'Submit'){			

		//validation flag to check that all validations are done
		$validationFlag = true;
		
		//Check all the required fields are filled
		if(!($_POST['field']&&$_POST['topic']&&$_POST['u_id']  )){
			echo 'All the fields marked as * are compulsary.<br>';
			$validationFlag = false;
		}
		else{
			$field = $_POST['field'];
			$topic = $_POST['topic'];
			$u_id = $_POST['u_id'];
			$dob = "'".$_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day']."'";
			$dob1 = "'".$_POST['year1'] . '-' . $_POST['month1'] . '-' . $_POST['day1']."'";
			
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
		
		if(!$_POST['month1'] || !$_POST['day1'] || !$_POST['year1'])
			$dob1 = 'NULL';				
		
		//Check for valid date
		if($dob1 != 'NULL'){
			if(!checkdate($_POST['month1'],$_POST['day1'],$_POST['year1'])){
				echo $_POST['year1'] . '-' . $_POST['month1'] . '-' . $_POST['day1'] . ' not a	valid date. Please enter it properly.';
				$validationFlag = false;
			}
		}
		
		


		
		if(!$_POST['requires'])
			$requires = 'NULL';
		else
			$requires = "'".$_POST['requires']."'";

		if(!$_POST['stipend'])
			$stipend = 'NULL';
		else
			$stipend = $_POST['stipend'];
							

		//If all validations are correct, connect to MySQL and execute the query
		if($validationFlag){
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
			$email = "'".$_SESSION['USER_ID']."'";
			//Create Insert query
			$query = "INSERT INTO PROJECT
						(TOPIC,FIELD,STIPEND,S_DATE,E_DATE,REQUIREMENT,U_ID,USER_ID) 
						VALUES 
						('$topic','$field',$stipend,$dob,$dob1,$requires,$u_id,$email)";
			
			//Execute query
			$results = mysqli_query($link,$query);
			
			//Check if query executes successfully
			if($results == FALSE)
				echo mysqli_error($link) . '<br>';
			else
				echo 'Data inserted successfully! ';
		}
		
	}
	
	
?>

