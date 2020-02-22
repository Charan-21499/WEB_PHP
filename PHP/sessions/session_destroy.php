<?php
	
	session_start();

	session_destroy();
	//unset($_SESSION['login']);
	echo '<form action="session_display.php" method="POST"><input type="submit" name="ok" value="display"></form>
		  <form action="session_start.php" method="POST"><input type="submit" name="ok" value="create"></form>'

?>