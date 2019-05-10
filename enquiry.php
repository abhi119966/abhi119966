<?php
include "header.php"
?>
<!doctype html>
<html>
<head>

<link href="css/myStyleEnquiry.css" rel="stylesheet" type="text/css">

</head>
<body>
	<div class="container">
		<div class="wrapper">
			<table class="confirmTable">
				<tr class="confirmPagePackagename">
					<td>Enquiry</td>
				</tr>
				<tr>
					<td class="confirmPagePackageForm">		
						<form action="add_enquiry_data.php" method="post" enctype="multipart/form-data"> 
						
							 Name:<sup style="color:red;">*</sup> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
							 <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" placeholder="Full Name" required readonly>
							<br><br>
							Contact:<sub style="color:red;">*</sub> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type="text" name="contact" 
							maxlength="10" value="<?php echo $_SESSION['contact']; ?>" readonly >
							<br><br>
							E-mail: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="email" value="<?php echo $_SESSION['email']; ?>" name="email" readonly><br><br>
							 Address:<br><textarea name="address" rows="5" cols="40"><?php echo $_SESSION['address']; ?></textarea><br><br>
							Query:<br><textarea name="query" rows="5" cols="40"></textarea><br><br>
							<br><br>
			   
						<span class="submittButton">	<input type="submit" name="submitEnquiry" value="Submit"></span>
			
						</form>
					</td>
				</tr>
			</table>
	
		
		
		</div><!--- end of wrapper---->
	
	
	
	</div><!------------end of container----------> 


</body>
</html>
<?php
include "footer.php"
?>

