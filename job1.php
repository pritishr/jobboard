<?php
include 'jobsdb.php';
$results = getjob($_GET['id']);
?><!DOCTYPE html>

<html>
<head>
<title>job portal</title>
</head>

<body>



	<h1 style = "text-align: center"> JAAGA JOBS</h1>	

<?php

$row = mysqli_fetch_assoc($results);

?>

job title:<?php echo $row['title'];?> <br>
employer:<?php echo $row['employer']; ?> <br>
location:<?php echo $row['location']; ?> <br><p>





</body>
</html>