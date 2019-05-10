<?php
require ("connection.php");

if(isset($_POST['submitEnquiry']))
	
	{
		$name=$_POST['name'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$query=$_POST['query'];
		
		
		
		$query="insert into enquiry (name,contact,email,address,query) values 
								('$name','$contact','$email','$address','$query')";
								
		$run=mysqli_query($link,$query);
		if($run)
		{
			$msg = "successfully submitted";
			header("Location:enquiry.php?msg=$msg");
			
		}
		else{
			echo mysqli_error($link);
		}
		
	}
	else
	{
		header("Location:enquiry.php");
	}

?>