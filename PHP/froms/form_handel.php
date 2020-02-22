<?php
	//post
	/*if($_POST)
	{
		echo $_POST['name']."<br>";
		echo $_POST['email']."<br>";
	}

	//get
	if($_GET)
	{
		echo $_GET['name']."<br>";
		echo $_GET['email']."<br>";
	

	var_dump($_GET);
	}*/



	//request
	foreach($_REQUEST as $key => $value)
	{
		echo $key." => ".$value."<br>";

	}

?>