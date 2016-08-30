<?php
//Start the session to see if the user is authenticated user.
session_start();


	

	
	// Code to be executed when 'Insert' is clicked.
	if ($_POST['submit'] == 'Submit'){			

		//validation flag to check that all validations are done
		$validationFlag = true;
		
		//Check all the required fields are filled
		if(!($_POST['fname'] && $_POST['lname']&& $_POST['pass'] && $_POST['email']  )){
			echo 'All the fields marked as * are compulsary.<br>';
			$validationFlag = false;
		}
		else{
			$fname = $_POST['fname'];
			$pass = $_POST['pass'];
			$lname = "'".$_POST['lname']."'";
			$email = "'".$_POST['email']."'";
			}
			
			if(!$_POST['company'])
			$company = 'NULL';
		else
			$company = "'".$_POST['company']."'";
			
			if(!$_POST['sex'])
			$sex = 'NULL';
		else
			$sex = "'".$_POST['sex']."'";
			
			if(!$_POST['post'])
			$post = 'NULL';
		else
			$post = "'".$_POST['post']."'";
			
			if(!$_POST['ug'])
			$ug = 'NULL';
		else
			$ug = "'".$_POST['ug']."'";
			
			
			if(!$_POST['pg'])
			$pg = 'NULL';
		else
			$pg = "'".$_POST['pg']."'";
			
			
			if(!$_POST['any'])
			$any = 'NULL';
		else
			$any = "'".$_POST['any']."'";
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
			
				print_r($_POST);
			//Create Insert query
			$query = "INSERT INTO EMPLOYEE(FNAME,LNAME,COMPANY,POST,EMAIL,UG,PG,ANY,SEX) VALUES ('$fname',$lname,$company,$post,$email,$ug,$pg,$any,$sex)";
			
			//Execute query
			$results = mysqli_query($link,$query);
			if(!$results)
				echo 'FIRST QUERY : '.mysqli_error($link) . '<br>';
			else
				echo "query done";
			$query1 = "INSERT INTO LOGINS
						(USER_ID,PASSWORD,TYPE) 
						VALUES 
						($email,'$pass','EMPLOYEE')";
			
			//Execute query
			$results = mysqli_query($link,$query1);
			
			//Check if query executes successfully
			if($results == FALSE)
				echo 'SECOND Query: '. mysqli_error($link) . '<br>';
			else
					echo 'Data inserted successfully! ';
				header("location:main.php");}
		}
		
	}
	
	
?>

