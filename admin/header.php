


<link rel="stylesheet" href="css/bootstrap.min.css"/>



  
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	
<?php
	if(isset($_SESSION['alogin']))
	{
	
	 echo "<h4 class='text-success text-center btn btn-success'>
	 <div align=\"left\"><strong>
	 <a href=\"viewsub.php\">  View Subject</a>&emsp;&emsp;
		<a href=\"testview.php\"> View Test</a>&emsp;&emsp;  
	 <a href=\"questiondelete.php\">View Question</a>&emsp;&emsp;
	 <a href=\"showuser.php\"> View user</a></strong>
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 <strong><a href=\"login.php\">Admin Home</a>&emsp;
	 <a href=\"signout.php\">Signout</a></strong>&emsp;&emsp;
	 </div></h4>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
		</td>
	
  </tr>
  
</table>
