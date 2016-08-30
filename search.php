<?php
session_start();
if($_POST['submit'] == 'search'){
$fname = $_POST['fname'];
if($fname=='student'){
header("location:student.php");
exit();
}
if($fname=='company'){
header("location: company.php");
exit();
}
if($fname=='faculty'){
header("location: faculty.php");
exit();
}

}
?>