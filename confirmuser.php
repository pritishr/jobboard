<META http-equiv="refresh" content="0;URL=joblist1.php">
<?php

include 'jobsdb.php';

$results = confirmuser($_GET['name'],$_GET['password']);
echo $results;
if($results==1)
{
 	session_start();
// 	$_SESSION = new array();
 	$_SESSION['name'] = $_GET['name'];
 	header("location:joblist1.php");
}
?>
