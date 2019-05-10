<?php
require ("connection.php");

if(isset($_POST['confirm']))
	
	{
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$package=$_POST['package'];
		$arrivalDate=$_POST['arrivalDate'];
		$numberOfPerson=$_POST['numberOfPerson'];
		$totalMoney=$_POST['totalMoney'];
		
		
		
		$query="insert into tourpackage (name,contact,email,address,package,arrivalDate,numberOfPerson,totalMoney) values 
								('$name','$contact','$email','$address','$package','$arrivalDate','$numberOfPerson','$totalMoney')";
								
		$run=mysqli_query($link,$query);
		if($run)
		{
			$msg = "successfully submitted";
			header("Location:tourAndPackage.php?msg=$msg");
			
		}
		else{
			echo mysqli_error($link);
		}
		
	}
	else
	{
		header("Location:confirmPackage.php");
	}

?>