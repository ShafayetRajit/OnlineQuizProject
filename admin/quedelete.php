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
 $id=$_GET['que_id'];

$sql=mysqli_query($con,"delete from question where que_id='$id'");
header('location:questiondelete.php');
?>