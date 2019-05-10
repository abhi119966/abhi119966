<?php
include "header.php";
require "connection.php";
$query = "select * from sharedestination";
$run= mysqli_query($link,$query);



?>

<! doctype html>
<html>
	<head>
		<title></title>
		<link href="css/myStyleUndiscoverIndia.css" type="text/css" rel="stylesheet">
	</head>
<body>
	
	<div class="container">
		<div class="wrapper">
		<div class="tableHolder"><br>
			<h1><?php if(isset($_SESSION['id']))
					{
					 ?> <a href="shareDestination.php" style="text-decoration:none;background-color:#9aa1fa;margin-top:40px;">"Add Your own Favourite Destination"</a>

						
					<?php }
						else
					{?>
						<a href="" id="book" style="text-decoration:none;background-color:#9aa1fa;margin-top:40px;">"Add Your own Favourite Destination"</a>
					
					
						<script type="text/javascript">
		
						$(document).ready(function(){
						$('#book').click(function(){
				alert('Login First');
				});
			});
		</script>
				<?php	} ?></h1></a>
				</h1><br><br>
				<table class="tableStyle">
												

												<?php
									while($array=mysqli_fetch_assoc($run))
									{
								?>
					<tr>
						<td class="tableRowColFirst">
							<table height="300px" width="200px" border="0px" >

								<tr>
									<td height="50px" width="140px" border="0px" style="background-color:#98b0db;font-size:25px;text-align:center;color:black;"><?php echo $array['namePlace'];?></td>
								</tr>
								<tr>
									<td height="100px" width="140px" border="0px" style="background-color:#dae189;"><?php echo $array['imagePlace'];?></td>
								</tr>
									
								
							</table></td>
								
						<td class="tableRowColSecond">
								<table height="300px" width="790px" border="0px" >
								
								<tr>
									<td height="50px" width="790px" border="0px" style="background-color:#e46a90;font-size:25px;text-align:center;color:black;"><?php echo $array['addressPlace'];?></td>
								</tr>
								<tr>
									<td height="250px" width="790px" border="0px" style="background-color:#a4e49f;font-size:25px;text-align:center;color:black;"><?php echo $array['descriptionPlace'];?></td>
								</tr>
								
								</table>
						</td>
					</tr>
					<?php
										}
									?>
				</table>
				
				
		<!--		<table class="tableStyle">
					<tr>
						<td class="tableRowColFirst">
							<table height="300px" width="200px" border="1px" >
								<tr>
									<td height="50px" width="140px" border="1px">Tiru Fall</td>
								</tr>
								<tr>
									<td height="100px" width="140px" border="1px">Image</td>
								</tr>
								<tr>
									<td height="50px" width="140px" border="1px">by:Navneet Kumar</td>
								</tr>
							</table></td>
								
						<td class="tableRowColSecond">
								<table height="300px" width="790px" border="1px" >
								<tr>
									<td height="50px" width="790px" border="1px">Address</td>
								</tr>
								<tr>
									<td height="250px" width="790px" border="1px">Description</td>
								</tr>
								</table>
						</td>
					</tr>
				</table>
						-->
			
		
		
		
				</div><!-----end of table holder-------------->

		
		</div><!-----end of wrapper-------------->
	
	</div><!------end of container---------->


</body>
</html>
<?php
include "footer.php";
?>
