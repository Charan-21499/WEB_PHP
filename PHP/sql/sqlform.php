<?php


$host = "localhost";
$user = "root";
$password = "";
$table= "charan";

$connection = mysqli_connect($host,$user,$password,$table);
	if(mysqli_connect_error())
	{
		die('connection error ('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{

		$name = $_POST['name'];
		$email= $_POST['email'];
		$passwd= $_POST['password'];

		if(!empty($name)){
			if(!empty($email))
			{
				if(!empty($passwd))
				{
				$sql = "INSERT INTO forms(name,email,password) VALUES('$name','$email','$passwd')"; 
					if(mysqli_query($connection,$sql))
					{
					echo "done";
					}
					else
					{
					echo "failed";
					}	

				}
			}
		}


		echo "<form action='display.php'><input type='submit' name='submit'value='display' style='margin:20px 10px 10px 80px'><br></form>";
	}
?>
	