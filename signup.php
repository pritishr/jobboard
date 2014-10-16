<?php
include 'jobsdb.php';
$name = $_POST['username'];
$password = $_POST['password'];
$confirm =$_POST['confirmpassword']; 
if($password != $confirm )
{
	header("location:login1.php?error=confirmfail");
	
}

$results = adduser($name,$password);
if(!$results)
{

	header("location:login1.php?error=user_not_added");
}
else
{
	header("location:joblist1.php");
}

?>
<!--/*if($results==1)
{
 	session_start();
// 	$_SESSION = new array();
 	$_SESSION['name'] = $_GET['name'];
 	header("location:joblist1.php");
}*/

