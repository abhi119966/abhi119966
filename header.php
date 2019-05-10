<?php
session_start();
?>
<!doctype html>
<html>
	<head>
	
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<title> </title>
		<link  href="css/mystyle.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="jquery-3.3.1.js"></script>


	
	</head>
<body>
	<div class="container">
		
		<div class="wrapper">
        
        <!---------------------- contactHeader -------------------->
		
		
		
		
		
		  <div class="contactHeader">
			
			<div class="icon-bar">
 
				<i class="fa fa-envelope"></i> bh.yatra.47@gmail.com
				<i class="material-icons">&#xe325;</i> 7677386659
				
			</div>
			
					
			
			<div id="social-media-icons"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		 
&nbsp <a href="loginRegisterPage.php">  </a> &nbsp &nbsp 
<a href="https://www.facebook.com/jaiprakash2040" target="_blank"><img class="socialImage" src="facebook.png"/></a>&nbsp &nbsp &nbsp &nbsp 
<a href="https://www.instagram.com/jaiprakash2040/" target="_blank"><img class="socialImage" src="instagram.png"/></a>&nbsp &nbsp &nbsp &nbsp 
<a href="https://plus.google.com/u/0/105757327848531473199" target="_blank"><img class="socialImage" src="google-plus.png"/></a>
</div>
			
				
		</div><!--end of ContactHeader -->
		
		
		
		
		
		
		<!---------------------- Header -------------------->
		
			<div class="header">
			
				<div class="logo"><img class="logoImage" src="logo.png"/></div><!--end of logo -->
				
				<div class="title"><h1 class="textTitle"><b> B H A R A T  &nbsp   Y A T R A </b></h1></div><!--end of title -->
				<div class="swachBharat"><img class="swachBharatImage" src="sba.jpg"/></div><!--end of swachBharat -->
			</div><!--end of header -->
				
		
		
		
		
		
		
		<!---------------------- loginRegister -------------------->
		<!---   <div class="loginRegister">
					
			<div class="login">
			
			<form>
		
		
			   Username: <input type="text" name="username" required>
			   Password:<input type="password"  name="password" required>&nbsp
			   
			   <input type="submit" value="login">&nbsp
			   
			  <a href="#" class="textRegisterColor">Register Here</a>
			
			
			
		</form>   

			
			</div><!-- end of login --> 
			
			
			<!--- </div>  --><!----------- end of loginRegister---------->  
			
			
		
		
		
		
		<!---------------------- MENU -------------------->
			<div class="menubar">
	
				<table class="menuTable">
					<tr>
						<td><a class="menuTableAnchor" href="index.php">Home</a></td>
						<td><a class="menuTableAnchor" href="region.php">Regions</a></td>
						<td><a class="menuTableAnchor" href="place.php">Places</a><td>
						<!--<td><a class="menuTableAnchor" href="hotel.html">Hotels <br> &nbsp &nbsp & <br> Resorts</a></td> -->
						<td><a class="menuTableAnchor" href="tourAndPackage.php">Tour/Packages</a></td>
						<?php if (isset($_SESSION['id']))
						{?>
						<td><a class="menuTableAnchor" href="enquiry.php">Enquiry</a></td>
							
						<?php } else
						{?>
							<td><a class="menuTableAnchor" href="" id="enquiry">Enquiry</a></td>
						<?php }
						?>
					<!--	<td><a class="menuTableAnchor" href="enquiry.php">Enquiry</a></td>  -->
						<td><a class="menuTableAnchor" href="undisoverIndia.php">Undiscover India !</a></td>
						<td><a class="menuTableAnchor" href="contact.php">Contact us</a></td>
			<?php if(isset($_SESSION['id'])) {?> 
						<td><a class="menuTableAnchor" href="profile.php">Profile</a></td>
						<td><a class="menuTableAnchor"  href="loginRegisterPage.php" id="myLogout">Logout</a></td>
							
						<?php
						} 
						 else
						{?>
							<td><a class="menuTableAnchor" href="loginRegisterPage.php" id="myLogin">Login</a></td>
						<?php
						}
							?>
					</tr>
				</table>     
				
			</div>		
				
			<script type="text/javascript">
					$(document).ready(function(){
						$('#enquiry').click(function(){
						alert("Login First ");
						});
						$('#myLogout').click(function(){
						alert("Successfully Logout ");
						});
					
					});
		</script>	
	
			
		
		
		</div><!--end of wrapper -->
	



	</div><!--end of container -->
	
	
		
		


</body> 
	

</html>
