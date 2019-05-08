<?php include"header.php"; ?>
<! doctype html>
<html>
	<head>
		<title></title>
		<link href="css/myStyleShareDestination.css" type="text/css" rel="stylesheet">
	</head>
<body>
	
	<div class="container">
		<div class="wrapper">
		
			<table class="confirmTable">
				<tr class="confirmPagePackagename">
					<td>Share your favourite Place</td>
				</tr>
				<tr>
					<td class="confirmPagePackageForm">		
						<form action="share_data.php" method="post" enctype="multipart/form-data">
						
							 Name of the place:<sup style="color:red;">*</sup> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
							 <input type="text" name="namePlace" placeholder="Place Name" required>
							<br><br>
							
							 Address of the place:<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <textarea name="addressPlace" rows="5" cols="40"></textarea><br><br>
							Picture:<input type="file" name="imagePlace"/><br><br><br><br>
							Description:<br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <textarea name="descriptionPlace" rows="5" cols="40"></textarea><br><br>
							<br><br>
			   
						<span class="submittButton">	<input type="submit" name="sharePlace" value="Share"></span>
			
						</form>
					</td>
				</tr>
			</table>
		
		
		
		
		
		</div><!-----end of wrapper-------------->
	
	</div><!------end of container---------->


</body>
</html>
<?php include"footer.php"; ?>
