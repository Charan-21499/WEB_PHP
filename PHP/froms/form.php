<!DOCTYPE html>
<html>
<head>
	<title>form </title>
</head>
<body>
	<form action="form_handel.php" method="POST">
		name:<input type="text" name="name"><br>
		email:<input type="email" name="email"><br>
		<input type="submit" name="ok" value='one'>
	</form>

	<div style="margin: 100px">
		<form action="form_handel.php" method="GET">
		name:<input type="text" name="name"><br>
		email:<input type="email" name="email"><br>
		<input type="submit" name="ok" value='one'>
	</form>
	</div>

</body>
</html>