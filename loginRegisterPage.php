<?php 
		session_start();
		session_destroy();
		include "header.php";
 ?>
<?php
if(isset($_GET['msg']))
{
	echo $_GET['msg'];
}
?>
<!doctype html>
<html>
<head> <title> </title>
<link href="css/myStyleLoginRegisterPage.css" rel="stylesheet" type="text/css">

</head>
<body>
		<div class="container">
		
		<div class="wrapper">
				<div class="register">
								<h3 align="center">	Registration</h3>
						<form action="registration.php" method="post"  enctype="multipart/form-data" class="confirmPagePackageForm">
	
									<fieldset>
									
									<legend></legend>
								   Name:<sup style="color:red;">*</sup> &nbsp &nbsp &nbsp &nbsp 
								   <input type="text" name="name" placeholder="Full Name" required>
								   <br><br>
								   Contact:<sub style="color:red;">*</sub> &nbsp &nbsp &nbsp
								   <input type="text" name="contact" placeholder="9897XXXXXX" maxlength="15" required >
								   <br><br>
								   E-mail: &nbsp &nbsp &nbsp &nbsp 
								   <input type="email" name="email" placeholder="abx@example.com" required><br><br>
								   Username: <sup style="color:red;">*</sup>
								   <input type="text" name="user" placeholder="Username" required>   <br><br>
								   Password:&nbsp &nbsp <input type="password" placeholder="Password" name="password"><br><br>
								  
								   Gender: <input type="radio" name="gender" value="male"> Male
								   <input type="radio" name="gender" value="female"> Female <br><br>
								   DOB:&nbsp &nbsp &nbsp &nbsp <input type="date" name="dob"><br><br>
								
							   Address:<br>&nbsp &nbsp &nbsp &nbsp 
								   <textarea name="address" rows="3" cols="40" ></textarea><br><br>
								   
									   <input type="checkbox" name="agree" required> <span class="iAgree">I agreee</span><br><br>
								   
								   <input type="submit" name="register" class="submittButton" value="Register" id="register">
			
			
							</fieldset>
						</form>
		
				
				</div><!--------end of register----------->
				
				
			<div class="loginDiv">
				
				<h3 align="center">	Login</h3>
				
				<form action="validation.php" method="post"  class="confirmPagePackageForm">
	
			<fieldset>
				
				Username:  <br><br> <input type="text" name="user" placeholder="Username" required>   <br><br>
				Password:  <br><br><input type="password"  name="password" placeholder="Password"><br><br>
				<input type="submit" name="login" value="login" class="submittButton"> 
			</fieldset>
		</form>
				
				</div><!--------end of login----------->       
		
		
		
		
		
		
		
		
		</div><!--end of wrapper -->

		</div><!--end of container -->
	

</body> 


</html>
<?php
include "footer.php";
?>
