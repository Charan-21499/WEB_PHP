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

		$sql = "SELECT * FROM forms";
		$recive = mysqli_query($connection,$sql);
		echo "<table style='border:solid black 2px'>";
		while($data = mysqli_fetch_array($recive))
		{

			$name = $data['name'];
			$email = $data['email'];
			$password = $data['password'];
			
			echo "<tr>
    <th style='border:solid black 2px'>$name</th>
    <th style='border:solid black 2px'>$email</th>
    <th style='border:solid black 2px'>$password</th>
  </tr><br>";
  		

		}
		echo "</table>";
		echo "<form action='form.html'><input type='submit' name='submit' value='add' style='margin:20px 10px 10px 100px'><br></form>";
	}
?>
	