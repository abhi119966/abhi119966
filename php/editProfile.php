<?php
require "connection.php";
session_start();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query = "select * from regi";
	$run=mysqli_query($link,$query);
	$array = mysqli_fetch_assoc($run);
	
}
else
{
	header("Location:profile.php");
}

?>
<!doctype html>
<html>
<head> <title> </title>
<link href="css/myStyleEditProfile.css" rel="stylesheet"  type="text/css">
</head>
<body>
	
		<form action="registration.php" method="post" enctype="multipart/form-data">
	
			<fieldset>
			<legend> HTML FORMS</legend>
			   Name:<sup style="color:red;">*</sup> <input type="text" name="name" value="<?php echo $array['name']; ?>" placeholder="Full Name" required>
			   <br><br>
			   Contact:<sub style="color:red;">*</sub> <input type="text" value="<?php echo $array['contact']; ?>" name="contact" maxlength="10" >
			   <br><br>
			   E-mail: <input type="email" value="<?php echo $array['email']; ?>" name="email"><br><br>
			 <!--  Password:<input type="password"  name="password"><br><br>-->
			  
			   Gender: <input type="radio" name="gender" value="male" <?php if($array['gender']=="male"){echo "checked";}?>> Male
			   <input type="radio" name="gender" value="female" <?php if($array['gender']=="female")
				   {echo "checked";}?>> Female <br><br>
			   DOB:<input type="date" value="<?php echo $array['dob']; ?>" name="dob"><br><br>
			   Attach <input type="file" value="<?php echo $array['attach']; ?>" name="attachment"><br>
			   <br>
			  
			
			   Address:<textarea name="address" rows="5" cols="40"><?php echo $array['address']; ?></textarea><br><br>
			   
			       <input type="checkbox" name="agree" required> I agreee<br><br>
			id<input type="text" name="id" value="<?php echo $_SESSION['id'] ; ?>" readonly><br><br>
			   
			   <input type="submit" name="update" value="Update">
			
			</fieldset>
		</form>
	



</body> 


</html>
