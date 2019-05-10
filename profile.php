<?php include "header.php"; 
?>
<?php
if(isset($_GET['msg']))
{
	echo $_GET['msg'];
}
?>
<?php
require "connection.php";
$query = "select * from regi";
$run= mysqli_query($link,$query);
$array=mysqli_fetch_assoc($run);

?>



<!doctype html>
<html>
<head> <title> </title>
<link href="css/myStyleprofile.css" rel="stylesheet" type="text/css">

</head>
<body>
		<div class="container">
		
		<div class="wrapper">
		
		
		<div class="photoAndName">
		
			
			<div class="name">Name: &nbsp &nbsp &nbsp
			<?php echo $_SESSION['name']; ?>  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp <a href="editProfile.php?id=$_SESSION['id']">Edit</a> <br><br>
			
				
			
			
			<div class="details">Contact: &nbsp &nbsp &nbsp
			<?php echo $_SESSION['contact']; ?>
		
		</div><!--- end of Contact Details----><br><br>
		
		
		
		<div class="details"> Email:  &nbsp &nbsp &nbsp
		
		<?php echo $_SESSION['email']; ?>
		</div><!--- end of email Details----><br><br>
		
		
		<div class="details">Username: &nbsp &nbsp &nbsp
		<?php echo $_SESSION['user']; ?>
		
		</div><!--- end of user Details----><br><br>
		
		
		<div class="details">Gender:  &nbsp &nbsp &nbsp
		<?php echo $_SESSION['gender']; ?>
		
		</div><!--- end of gender Details----><br><br>
		
		
		<div class="details"> DOB: &nbsp &nbsp &nbsp
		
		<?php echo $_SESSION['dob']; ?>
		</div><!--- end of dob Details----><br><br>
		
		
		<div class="details">Address:  &nbsp &nbsp &nbsp
		<?php echo $_SESSION['address']; ?>
		
		</div><!--- end of address Details----><br><br>

<div class="details">ID:  &nbsp &nbsp &nbsp
		<?php echo $_SESSION['id']; ?>
		
		</div><!--- end of address Details----><br><br>		
			
			
			
		
		</div><!--- end of name--><br><br>
		
		
		
		</div><!-- end of photoAnd Name-->
		
		
	
		
		
		
		
		
		

		
		</div><!--end of wrapper -->

		</div><!--end of container -->
	

</body> 


</html>
<?php
include "footer.php";
?>
		