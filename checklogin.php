<?php
include 'jobsdb.php';
if (confirmuser($_POST['username'], $_POST['password']))
{
	session_start();
	$_SESSION['name'] = $_POST['username'];
	header("location:joblist1.php?".$_SESSION['name']);
}
else
{
	header("location:login1.php?error=invalid_login" );
}



?>