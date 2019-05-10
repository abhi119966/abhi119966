<?php
include "header.php";
?>


<!doctype html>
<html>
<head>

<link href="css/myStyleConfirmPackage.css" rel="stylesheet" type="text/css">

</head>
<body>
	<div class="container">
		<div class="wrapper">
			<table class="confirmTable">
				<tr class="confirmPagePackagename">
					<td>Confirmation Package</td>
				</tr>
				<tr>
					<td class="confirmPagePackageForm">		
						<form action="add_confirm_package_data.php" method="post" enctype="multipart/form-data">
						
							 Name:<sup style="color:red;">*</sup> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
							 <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" placeholder="Full Name" required readonly>
							<br><br>
							Contact:<sub style="color:red;">*</sub> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type="text"
							name="contact" value="<?php echo $_SESSION['contact']; ?>" maxlength="10" >
							<br><br>
							E-mail: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="email"
							name="email" value="<?php echo $_SESSION['email']; ?>" readonly><br><br>
							 Address:<br><textarea name="address" value="" rows="5" cols="40"><?php echo $_SESSION['address']; ?></textarea><br><br>
							  Select Package:<select name="package" onchange="myFunction(event)">
    <option disabled selected>Choose Plans</option>
    <option value="20000">North India(Silver)</option>
    <option value="24000">North India(gold)</option>
    <option value="28000">North India(diamond)</option>
   <option value="24000">West India(Silver)</option>
    <option value="28000">West India(gold)</option>
    <option value="32000">West India(diamond)</option>
	<option value="20000">South India(Silver)</option>
    <option value="24000">South India(gold)</option>
    <option value="28000">South India(diamond)</option>
   <option value="12000">Central India(Silver)</option>
    <option value="16000">Central India(gold)</option>
    <option value="20000">Central India(diamond)</option>
	<option value="16000">East India(Silver)</option>
    <option value="20000">East India(gold)</option>
    <option value="24000">East India(diamond)</option>
   <option value="12000">North East India(Silver)</option>
    <option value="16000">North East India(gold)</option>
    <option value="20000">North East India(diamond)</option>
	
	
	
</select><br><br>
							 Arrival Date:  &nbsp &nbsp &nbsp &nbsp &nbsp <input type="date" name="arrivalDate"><br><br>
							 Number of Person: &nbsp <input type="text" value="2" name="numberOfPerson"  id="bbb" readonly>
							<input type="button" id="personAdd" value=" + " onClick="addPerson()"/>
							<input type="button" id="personSubtract" value=" - " onClick="subtractPerson()"/><br><br>
							
							Total Money = Rs. &nbsp <input type="text" value="" name="totalMoney"  id="aaa" readonly><br><br>
							
							<input type="checkbox" name="agree" required><span class="iAgree"> I agreee</span>
							(meals,tranport & hotel cost are included)<br><br>
			   
						<span class="submittButton">	<input type="submit" name="confirm" value="Confirm"></span>
						
						
			

		
			<!--
<select name="" onchange="myFunction(event)">
    <option disabled selected>Choose Database Type</option>
    <option value="2000">green</option>
    <option value="4000">red</option>
    <option value="6000">orange</option>
    <option value="2000">black</option>
</select>
<input id="myText" type="text" value="colors">-->


					</form>
					</td>
				</tr>
			</table>
			
			
			
			
					
<script type="text/javascript">

	var numberOfPerson=2;
	
	

function addPerson()
{
if(numberOfPerson !=10)
{
var money=parseInt(document.getElementById('aaa').value);
numberOfPerson+=1;
money+=2000;
document.getElementById('bbb').value=numberOfPerson;
document.getElementById('aaa').value=money;
}
}

function subtractPerson()
{
	if(numberOfPerson !=2)
	{
	var money=parseInt(document.getElementById('aaa').value);
numberOfPerson-=1;
money-=2000;
document.getElementById('bbb').value=numberOfPerson;
document.getElementById('aaa').value=money;
}
}



function myFunction(e) {
    document.getElementById("aaa").value = e.target.value
}
</script>
		
		
		</div><!--- end of wrapper---->
	
	
	
	</div><!------------end of container----------> 


</body>
</html>
<?php
include "footer.php";
?>

