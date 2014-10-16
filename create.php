<?php
include 'jobsdb.php';
$results = addjob($_GET['title'], $_GET['salary'], $_GET['jobdesc'], $_GET['location'], 
				 $_GET['qualification'], $_GET['employer'], $_GET['website']);
?><!DOCTYPE html>
<html>
<head>
	<title>joblist</title>

</head>

<body>

<h1 style = "text-align: center"> JOBS LIST</h1>
