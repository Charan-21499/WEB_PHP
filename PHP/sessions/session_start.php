<?php
	
	session_start();

	$_SESSION['login'] = 'in';
	$_SESSION['error'] = 'error';
	$_SESSION['new'] = 'hello';

	echo '<form action="session_display.php" method="POST"><input type="submit" name="ok" value="display"></form>
		  <form action="session_destroy.php" method="POST"><input type="submit" name="ok" value="destroy"></form>'
		
	;

?>