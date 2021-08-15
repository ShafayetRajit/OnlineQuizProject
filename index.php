<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Welcome to Online Exam</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>

<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color: wheat;">
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{


echo '<div style="padding-left: 5%;padding-top: 9%;margin-left: 4%;margin-top: 10px;width: 40%;float: left;">

        
        
        
        </div>

        <div style="width: 50%;float: left;margin-left: 2%;padding-left: 2%;padding-top: 5%;">

           <img style="width :350px;margin-left:60px;" src="images/me-01.png" alt="">

        </div>

       	


';

echo '

	<h1 style="margin-top: 10px;" class="text-center"></h1>
	<div style="background-color:cyan;border-radius:80px;padding-bottom: 10px;">

	<h1 style="margin-top: 400px;margin-bottom:20px;" class="text-center">Welcome to Online Exam</h1>



	</div>
	<table width="28%"  border="0" align="center">
   <tr>&emsp;</tr>
  
  <tr>
    <td align="center"> <a style="color:blue;" " href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr>
    <td align="center"> <a style="color:red;" href="result.php" class="style4">Result </a></td>
  </tr>
</table>';
		
   
		exit;
		

}


?>
<table width="100%" border="0">
  
  <tr>
    <td height="296"><div align="center">
        <h1 >Welcome to Online Quiz</h1></div>
    </td>
    		<table align="center" border="0" width="50%" height="250">
			<h1 class="text-center bg-warning">LOGIN PAGE</h1>
		<form method="post" action="">
			<br>
	
				<tr>
					<th class="text-primary">LOGIN ID</th>
					<th>
					<input class="form-control" type="TEXT" placeholder="Enter registered login ID"  maxlength="10" size="25"  id="loginid2" name="loginid"/></tD>
					</th>
				<tr>
					<th class="text-primary">ENTER PASSWORD</th>
					<th><input class="form-control" type="password" placeholder="Enter password" name="pass" id="pass2"/></th>
					</tr>
					       <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </td>

			<div class="container"> <th>
					<input class="btn btn-success "type="submit" name="submit" id="submit" Value="Login"/>
				
			<a class="btn btn-info" href="signup.php">Click here to register</a></th></div>
		
      </table>
      
    </form></td>
  </tr>
</table>

</body>
</html>
