<?php

	include('function.php');
	c_form();


if($_SERVER['REQUEST_METHOD']=='POST')
{
	$sum = $_POST['a']+$_POST['b'];
	echo $sum;
}

?>	