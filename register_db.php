<?php
//Start the session to see if the user is authenticated user.
if ($_POST['submit'] == 'Register'){
session_start();

		$sex = $_POST['sex'];
		
		if ($sex == 'student'){

		echo '
		<html>
		<head>
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
		<center>
		<h1>STUDENT REGISTRATION FORM</h1>
		<form action="edit_student_db.php" method="post">
			<table cellpadding = "10">
				<tr>
					<td class="auto-style3">FIRST NAME*</td>
					<td><input type="text" name="fname" maxlength="25" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					
					<td class="auto-style3">Last Name*</td>
					<td><input type="text" name="lname" maxlength="15" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					<td class="auto-style3">PASSWORD</td>
					<td><input type="password" name="pass" maxlength="13" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					<td class="auto-style3">Date of Birth</td>
					<td class="auto-style3">Day<select name = "day">
							<option></option>';
							
							for($i = 1; $i <= 31; $i++){
								echo '<option value='.$i.'>'.$i.'</option>';
							}
							
						echo '</select>';
						
							$months = array('01'=>'January', '02'=>'February',
							'03'=>'March', '04'=>'April', '05'=>'May',
							'06'=>'June', '07'=>'July', '08'=>'August',
							'09'=>'September','10'=>'October',
							'11'=>'November','12'=>'December');
						
					echo 'Month<select name = "month">
							<option></option>';
							
							foreach($months as $num => $nm){
								echo "<option value='$num'>$nm</option>";
							}
							
						echo '</select>
					Year<select name = "year">
							<option></option>';
							
							for($i = date('Y')-70; $i <= date('Y')-5; $i++){
								echo "<option value='$i'>$i</option>";
							}
							
						echo '</select>
					</td>
				</tr>
				<tr>
					
					<td class="auto-style3">Sex*</td>
					<td class="auto-style3">
						<Input type = "Radio" Name ="sex" value= "M" >Male
						<Input type = "Radio" Name ="sex" value= "F">Female
					</td>
				</tr>
				<tr>
					<td class="auto-style3">Street*</td>
					<td><input type="text" name="street" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					<td class="auto-style3">House Number</td>
					<td><input type="text" name="houseno" maxlength="4" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					<td class="auto-style3">Postcode</td>
					<td><input type="text" name="postcode" maxlength="6" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					<td class="auto-style3">Town*</td>
					<td><input type="text" name="town" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					<td class="auto-style3">Phone Number</td>
					<td><input type="text" name="phoneno" maxlength="13" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					<td class="auto-style3">college</td>
					<td><input type="text" name="college" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				<tr>
					<td class="auto-style3">branch</td>
					<td><input type="text" name="branch" maxlength="10" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				<tr>
					<td class="auto-style3">technical know-how</td>
					<td><input type="text" name="technical" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				
				<tr>
					<td class="auto-style3">achievement</td>
					<td><input type="text" name="achievement" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				
				<tr>
					<td class="auto-style3">interest</td>
					<td><input type="text" name="interest" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				
				<tr>
					<td class="auto-style3">hobbies</td>
					<td><input type="text" name="hobbies" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				
				<tr>
					<td class="auto-style3">cgpa</td>
					<td><input type="number" name="cgpa" maxlength="5" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				
				<tr>
					<td class="auto-style3">email_id</td>
					<td><input type="text" name="email" maxlength="15" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
						
				</tr>
				<tr>
					
					<td class="auto-style3">Year<select name = "year">
							<option></option>';
							
							for($i = 1; $i <= 4; $i++){
								echo '<option value='.$i.'>'.$i.'</option>';
							}
							
						echo '</select>
				</td>
				</tr>
			</table>
			<table cellpadding = "20">
				<tr>
					<td><input type="submit" name="submit" value="submit" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
			</table>
		</form>
		</center>
			</body>
		</html>';

		}
		if ($sex == 'employee'){

		echo '
				<html>
		<head>
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
		<center>
		<h1>EMPLOYEE REGISTRATION FORM</h1>
		<form action="edit_employee_db.php" method="post">
			<table cellpadding = "10">
				<tr>
					<td class="auto-style3">FIRST NAME*</td>
					<td><input type="text" name="fname" maxlength="25" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					
					<td class="auto-style3">Last Name*</td>
					<td><input type="text" name="lname" maxlength="15" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					<td class="auto-style3">PASSWORD</td>
					<td><input type="password" name="pass" maxlength="13" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					<td class="auto-style3">Company</td>
					<td><input type="text" name="company" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				<tr>
					<td class="auto-style3">post</td>
					<td><input type="text" name="post" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				<tr>
					<td class="auto-style3">emailid</td>
					<td><input type="text" name="email" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				<tr>
					
					<td class="auto-style3">Sex*</td>
					<td class="auto-style3">
						<Input type = "Radio" Name ="sex" value= "M" >Male
						<Input type = "Radio" Name ="sex" value= "F">Female
					</td>
				</tr>
				<tr>
					<td class="auto-style3">PAST EDUCATION</td>
					<td class="auto-style3">undergraduation</td>
					<td><input type="text" name="ug" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					<td class="auto-style3">post graduation</td>
					<td><input type="text" name="pg" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					<td class="auto-style3">any other</td>
					<td><input type="text" name="any" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				
				
			</table>
			<table cellpadding = "20">
				<tr>
					<td><input type="submit" name="submit" value="Submit" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
			</table>
		</form>
		</center>
			</body>
		</html>';
		}
		if ($sex == 'professor'){

		echo '
				<html>
		<head>
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
		<center>
		<h1>PROFESSOR REGISTRATION FORM</h1>
		<form action="edit_professor_db.php" method="post">
			<table cellpadding = "10">
				<tr>
					<td class="auto-style3">FIRST NAME*</td>
					<td><input type="text" name="fname" maxlength="25" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					
					<td class="auto-style3">Last Name*</td>
					<td><input type="text" name="lname" maxlength="15" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					<td class="auto-style3">PASSWORD</td>
					<td><input type="password" name="pass" maxlength="13" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					<td class="auto-style3">College</td>
					<td><input type="text" name="company" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				<tr>
					<td class="auto-style3">Speciality</td>
					<td><input type="text" name="post" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				<tr>
					<td class="auto-style3">Experience</td>
					<td><input type="number" name="exp" maxlength="5" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				<tr>
					<td class="auto-style3">emailid</td>
					<td><input type="text" name="email" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
					<tr>
					<td class="auto-style3">Qualification</td>
					<td class="auto-style3">undergraduation</td>
					<td><input type="text" name="ug" maxlength="30"  style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
						<td class="auto-style3">post graduation</td>
					<td><input type="text" name="pg" maxlength="30"  style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					<td class="auto-style3">any other</td>
					<td><input type="text" name="any" maxlength="30"  style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
			
								
				<tr>
					
					<td class="auto-style3">Sex*</td>
					<td class="auto-style3">
						<Input type = "Radio" Name ="sex" value= "M" >Male
						<Input type = "Radio" Name ="sex" value= "F">Female
					</td>
				</tr>
			</table>
			<table cellpadding = "20">
				<tr>
					<td><input type="submit" name="submit" value="Submit" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
			</table>
		</form>
		</center>
			</body>
		</html>';
		}
		if ($sex == 'company'){

		echo '
				<html>
		<head>
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
		<center>
		<h1>COMPANY REGISTRATION FORM</h1>
		<form action="edit_company_db.php" method="post">
			<table cellpadding = "10">
				<tr>
					<td class="auto-style3">NAME*</td>
					<td><input type="text" name="fname" maxlength="25" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					<td class="auto-style3">PASSWORD</td>
					<td><input type="password" name="pass" maxlength="13" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
				</tr>
				<tr>
					<td class="auto-style3">Headquater</td>
					<td><input type="text" name="hd" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				<tr>
					<td class="auto-style3">Turn over</td>
					<td><input type="number" name="to" maxlength="30" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				<tr>
					<td class="auto-style3">specialised in </td>
					<td><input type="text" name="speciality" maxlength="5" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
				
			</table>
			<table cellpadding = "20">
				<tr>
					<td><input type="submit" name="submit" value="Submit" style="height: 30px; width: 250px; box-shadow:8px 8px 20px;background-color:rgba(255,255,255,0.3);border-radius:5px;"></td>
					
				</tr>
			</table>
		</form>
		</center>
		</body>
		</html>
		';
}		
}		
?>