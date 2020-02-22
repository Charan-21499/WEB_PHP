<?php
	

	$a1 = array('charan',1,true,12.2);
	echo $a1[0]."<br>";


	//associative array 
	$a2 = array(
				'one' => 1,
				'two' => 2222);
	echo $a2['one']."<br>";


	//multidimetional array 
	$a2 = array(
				'one' => array('ranger','hero'),
				'two' => 2222);
	echo $a2['one'][0]."<br>";


?>