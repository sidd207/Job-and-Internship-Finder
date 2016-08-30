<?php
//Start the session to see if the user is authenticated user.
session_start();


	

	
	// Code to be executed when 'Insert' is clicked.
	if ($_POST['submit'] == 'Submit'){			

		//validation flag to check that all validations are done
		$validationFlag = true;
		
		//Check all the required fields are filled
		if(!($_POST['fname'] && $_POST['hd']&& $_POST['pass'] && $_POST['to'] && $_POST['speciality'] )){
			echo 'All the fields marked as * are compulsary.<br>';
			$validationFlag = false;
		}
		else{
			$fname = $_POST['fname'];
			$pass = $_POST['pass'];
			$hd = "'".$_POST['hd']."'";
			$to = "'".$_POST['to']."'";
			$speciality = "'".$_POST['speciality']."'";
			
			}
			
		//If all validations are correct, connect to MySQL and execute the query
		if($validationFlag){
			//Connect to mysql server
			$link = mysqli_connect('dbms.iiitdmj.ac.in','2013124','rps2013124');
			
			//Check link to the mysql server
			if(!$link){
				echo '1';
				die('Failed to connect to server: ' . mysql_error());
			}
			
			//Select database
			$db = mysqli_select_db($link,'2013124');
			
			if(!$db){
				echo '1';
				die("Unable to select database");
			}
			echo $fname .' '. $hd. ' ' . $to. ' ' . $speciality. '<br> ';
				print_r($_POST);
			//Create Insert query
			$query = "INSERT INTO COMPANY VALUES ('$fname',$hd,$to,$speciality)";
			
			//Execute query
			$results = mysqli_query($link,$query);
			if(!$results)
				echo 'FIRST QUERY : '.mysqli_error($link) . '<br>';
			else
				echo "query done";
			$query1 = "INSERT INTO LOGINS
						(USER_ID,PASSWORD,TYPE) 
						VALUES 
						('$fname','$pass','COMPANY')";
			
			//Execute query
			$results = mysqli_query($link,$query1);
			
			//Check if query executes successfully
			if($results == FALSE)
				echo 'SECOND Query: '. mysqli_error($link) . '<br>';
			else{
				echo 'Data inserted successfully! ';
				header("location:main.php");}
		}
		
	}
	
	
?>

