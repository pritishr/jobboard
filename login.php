<!--<META http-equiv="refresh" content="0;URL=joblist1.php">-->
<?php
include 'jobsdb.php';
$name = $_GET['name'];
$password = $_GET['password'];



$results = confirmuser($_GET['name'],$_GET['password']);
echo $results;
/*if(!$results)
{
	echo "not signed up";
	header("location: 5, url=login.html");
}
else*/
header("location:joblist1.php");