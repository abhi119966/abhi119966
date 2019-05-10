<?php
session_start();
require ("connection.php");

if(isset($_POST['sharePlace']))
	
	{
		$name=$_POST['namePlace'];
		$address=$_POST['addressPlace'];
		/*$image=$_POST['imagePlace'];*/
		$photo=$_FILES['imagePlace']['name'];
		$tmp=$_FILES['imagePlace']['tmp_name'];
		if($photo!='')
		{
			$path="uploads/".$_SESSION['id']."  ".$_SESSION['user'].$photo;
			move_uploaded_file($tmp,$path);
		}
		else
		{
			$path='';
		}
		$description=$_POST['descriptionPlace'];
		
		
		$query="insert into sharedestination (namePlace,addressPlace,imagePlace,descriptionPlace) values 
								('$name','$address','$path','$description')";
								
		$run=mysqli_query($link,$query);
		if($run)
		{
			$msg = "successfully added";
			header("Location:shareDestination.php?msg=$msg");
			
		}
		else{
			echo mysqli_error($link);
		}
		
	}
	else
	{
		header("Location:shareDestination.php");
	}

?>