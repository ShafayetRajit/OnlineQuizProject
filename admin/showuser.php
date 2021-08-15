<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Online Quiz - Quiz List</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body style="background-color:#9ccc9c;">
<?php
include("header.php");
include("../database.php");
{

		$sql=mysqli_query($con,"Select * From user");	
		echo "<table class='table'>";
		echo"<h1 class='text-center bg-danger'>Registered User Detail</h1>";
		echo "<tr>
		<th class='text-primary'>UserID</th>
				<th class='text-primary'>Name</th>
	<th class='text-primary'>Email</th>
	<th class='text-primary'>Delete User</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
	$id=$result['username'];
	
	echo "<tr>";	
	echo "<td>".$result['login']. "</td>";
	echo "<td>".$result['username']."</td>";
	echo "<td>".$result['email']."</td>";
	
	echo "<td><a href='userdelete.php?username=$id'><span class='glyphicon glyphicon-trash'></span></a></td>";
	echo "</tr>";
	echo"</div>";
	}
	echo "</table>";
		
}

?>