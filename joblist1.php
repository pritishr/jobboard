<?php
include 'jobsdb.php';
session_start();
if(isset($_SESSION['name']))
{
	echo "hello ". $_SESSION['name'];
}
else
{
	echo "<a href = login1.php>login</a>";
}

if (isset($_GET['title'])) {
	addjob($_GET['title'], $_GET['salary'], $_GET['jobdesc'], $_GET['location'], 
		   $_GET['qualification'], $_GET['employer'], $_GET['website']);
}

$results = getjobs();
?><!DOCTYPE html>
<html>
<head>
	<title>joblist</title>
	<style type="text/css">
		body {
			margin-top: 0px;
			margin-left: 0px;
			margin-right: 0px;	
		}
		.nav-bar {
			height: 50px; width: 100%;
			background-color: rgb(59, 89, 152);
		}

		.nav-bar>a {
			float: right;
		}
		.logout-button {
			height: 30px;
		}
	</style>
</head>

<body>
<div class="nav-bar">
	<a href="logout.php"><button class="logout-button" type="button">Logout</button></a>
</div>
<h1 style = "text-align: center"> JOBS LIST</h1>

<?php
while ( $row = mysqli_fetch_assoc($results))
{
?>
job title:<a href = job1.php?id=<?php echo $row['id'].">".$row['title']."</a>"; ?> <br>
employer:<?php echo $row['employer']; ?> <br>
location:<?php echo $row['location']; ?> <br><p>    

	
   
<?php }
?>












</body>


</html>	