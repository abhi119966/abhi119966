<?php include "header.html"; ?>
<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query = "select * from regi where id='$id'";
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
<link href="css/myStyleRegisterEditPage.css" rel="stylesheet" type="text/css">

</head>
<body>
		<div class="container">
		
		<div class="wrapper">
				<div class="register">
								<h3 align="center">	Registration</h3>
						<form action="registration.php" method="post"  enctype="multipart/form-data" class="confirmPagePackageForm">
	
									<fieldset>
									
									<legend></legend>
								   Name:<sup style="color:red;">*</sup> &nbsp &nbsp &nbsp &nbsp <input type="text" name="name" placeholder="Full Name" required>
								   <br><br>
								   Contact:<sub style="color:red;">*</sub> &nbsp &nbsp &nbsp <input type="text" name="contact" maxlength="10" >
								   <br><br>
								   E-mail: &nbsp &nbsp &nbsp &nbsp <input type="email" name="email"><br><br>
								   Username: <sup style="color:red;">*</sup> <input type="text" name="user" placeholder="Username Name" required>   <br><br>
								   Password:&nbsp &nbsp <input type="password"  name="password"><br><br>
								  
								   Gender: <input type="radio" name="gender" value="male"> Male
								   <input type="radio" name="gender" value="female"> Female <br><br>
								   DOB:&nbsp &nbsp &nbsp &nbsp <input type="date" name="dob"><br><br>
								   Attach <input type="file" name="attach"><br>
								   <br>
								<!--   City:<select name="city">
								   <option value=""> ----select one---</option>
										<option value="01"> Ranchi </option>
										<option value="02"> Delhi </option>
										<option value="03"> Patna</option>
										<option value="04"> Hazaribagh </option>
										<option value="05"> Dhanbad </option>
										<option value="06"> Godda</option>
								   
								   </select>-->
								   

								   Address:<br>&nbsp &nbsp &nbsp &nbsp <textarea name="address" rows="3" cols="40"></textarea><br><br>
								   
									   <input type="checkbox" name="agree" required> <span class="iAgree">I agreee</span><br><br>
								   
								   <input type="submit" name="register" class="submittButton" value="Register">
			
			
							</fieldset>
						</form>
		
				
				</div><!--------end of register----------->
				
				
			
		
		
		
		
		
		
		
		</div><!--end of wrapper -->

		</div><!--end of container -->
	

</body> 


</html>
<?php
include "footer.html";
?>
