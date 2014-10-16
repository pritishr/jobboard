<?php


function dbopen()
{
	$db = new mysqli( 'localhost', 'root', '', 'jobs' );
	return $db;
}


function addjob( $title, $salary, $jobdesc, $location, 
				 $qualification, $employer, $website) 
{
	//$sql = "insert into jobs(title, salary, jobdesc, location, 
				 //qualification, employer, website) VALUES ( '$title', $salary, '$jobdesc', '$location', 
				 //'$qualification', '$employer', '$website')";

	$sql = "insert into jobs(title, salary, jobdesc, location, 
				 qualification, employer, website) VALUES ( '$title', $salary, '$jobdesc', '$location', 
				 '$qualification', '$employer', '$website')";

	echo $sql;

	$db = new mysqli( 'localhost', 'root', '', 'jobs' );
    $result = mysqli_query($db, $sql);
}

function getjobs()
{
	$db = dbopen();
	$sql = 'select * from jobs';
 	return mysqli_query($db, $sql);
}

function getjob($id)
{
	$db = dbopen();
	$sql = "select * from jobs where id = $id";
	//echo $sql;
 	return mysqli_query($db, $sql); 
 }

function confirmuser($name,$password)
{
	$sql = "select * from user where name = '$name' and password = '$password'"; 
	$db = dbopen();
	$result = mysqli_query($db, $sql); 
	$count = mysqli_num_rows($result);
	return $count == 1;
}
//echo confirmuser('tim cook', 'def');

function adduser($name, $password)
{

$db = dbopen();
$sql = "insert into user (name, password) VALUES ('$name', '$password' )";
return mysqli_query($db, $sql);   
}
//adduser('hello','hi'); 



//$db = dbopen();
/*addjob('CEO', 007, 'programmer', 'REPLACE STEVE', 
	   'CHINA', 'PHD', 'xiomi', 'www.xiomi.com' );*/



?>