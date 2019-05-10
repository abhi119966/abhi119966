<?php 
session_start();
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
								<h3 align="center">	Profile Picture</h3>
						<form action="registrationProfileImage.php" method="post"  enctype="multipart/form-data" class="confirmPagePackageForm">
	
									<fieldset>
									
									<legend></legend>
								   Name:<sup style="color:red;">*</sup> &nbsp &nbsp &nbsp &nbsp <?php echo $_SESSION['myname']; ?>
								   <br><br>
								  
								   Upload Profile Picture:<input type="file" name="attach"><br>
								   <br>
								  
								   
								   <input type="submit" name="upload" class="submittButton" value="Upload Pic">
			
			
							</fieldset>
						</form>
		
				
				</div><!--------end of register----------->
				
				
		
		
		
		
		
		
		
		
		</div><!--end of wrapper -->

		</div><!--end of container -->
	

</body> 


</html>
<?php
include "footer.php";
?>
