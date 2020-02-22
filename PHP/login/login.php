<!DOCTYPE html>
<html>
<head>
	<title>login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DONO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="register.php">register</a></li>
      <li><a href="../sessions/session_destroy.php">DESTROY</a></li>
      <li><a href="index.php">INDEX</a></li>
      <li><a href="login.php">LOGIN</a></li>
    </ul>
  </div>
</nav>
	<form action='login.php' method="POST">
		<input type="text" name="email" placeholder="email"><br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="submit" name="submit" value="login"><br>
	</form>

<?php
	if(isset($_REQUEST['submit']))
	{
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
			$email = $_POST["email"];
			$sql = "SELECT * FROM forms WHERE email='$email'";
			$recive = mysqli_query($connection,$sql);
			$data = mysqli_fetch_array($recive);
			if($data['password']==$_POST['password'])
			{
				$_SESSION['id']=$data['id'];
				$_SESSION['email'] = $data['email'];
				header('Location: index.php');

			}
			else
			{
				header('location:login.php');
			}
		}
	}

?>

</body>
</html>