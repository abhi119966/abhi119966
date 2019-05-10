<?php

session_start();
/*header("Location:loginRegisterPage.php");*/

require ("connection.php");

if(isset($_POST['upload']))
	
	{
		
		
		
		$photo=$_FILES['attach']['name'];
		$tmp=$_FILES['attach']['tmp_name'];
		if($photo!='')
		{
			$path="uploads/".$photo;
			move_uploaded_file($tmp,$path);
		}
		else
		{
			$path='';
		}
		$
		
		

		$q = "select * from regi where user ='$user' && email='$email'";
$result=mysqli_query($link,$q);

	
		
		$query="insert into regi (attach) values ('$path') where id = 1";
								
		$run=mysqli_query($link,$query);
		if($run)
		{
			$msg = "successfully     added";
			header("Location:registerProfileImage.php?msg=$msg");
		}
		else{
			echo mysqli_error($link);
		}
		
	}
	
	
?>