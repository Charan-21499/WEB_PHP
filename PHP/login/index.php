<?php

		session_start();

		$host = 'localhost';
		$user = "root";
		$password = "";
		$table = "charan";
	
		$connection = mysqli_connect($host,$user,$password,$table);
		if(mysqli_connect_error())
		{
			 die(mysqli_connect_error()."   ".mysqli_connect_errno());
		}
		else
		{
			if($_SESSION)
			{
				$email = $_SESSION["email"];
				$sql = "SELECT * FROM forms WHERE email='$email'";
				$recive = mysqli_query($connection,$sql);
				$data = mysqli_fetch_array($recive);
				if($data['email']==$_SESSION['email']);
				{
					echo $_SESSION['id']."<br>";
					echo $data['name']."<br>";	
				}
			}
			else
			{
				header("Location: login.php");
			}
		}

?>