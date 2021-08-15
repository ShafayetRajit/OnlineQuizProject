<?php
session_start();
?>

<!DOCTYPE html>
<head>
<title>Administrative Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>

</head>

<body style="background-color:#9ccc9c;">
<?php
include("header.php");
?>

<h1 class="text-center">Adminstrative Login</h1>
<form name="form1" method="post" action="login.php">
<table class="table">
  <tr class="bg-transparent">
    <td width="150" class="style2 bg-transparent">Login ID </td>
    <td width="149"><input class="form-control" name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr>
    <td class="style2">Password</td>
    <td><input class="form-control" name="pass" type="password" id="pass"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input class="btn btn-primary" name="submit" type="submit" id="submit" value="Login"></td>
  </tr>
</table></td>
  </tr>
</table>

</form>

</body>
</html>
