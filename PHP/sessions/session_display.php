<?php
	
	session_start();

	foreach($_SESSION as $key => $value)
	{
		echo $key." => ".$value."<br>";
	}

	echo '<form action="session_destroy.php" method="POST"><input type="submit" name="ok" value="destroy"></form>
		  <form action="session_start.php" method="POST"><input type="submit" name="ok" value="create"></form>'


?>