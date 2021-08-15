<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("../database.php");
 $id=$_GET['sub_id'];

$sql=mysqli_query($con,"delete from subject where sub_id='$id'");
header('location:viewsub.php');
?>