<?php

$a = 1;
$b = 2;

if($a == $b){
	echo "1=2";
}
else if($a == 2)
{
	echo "a=2";
}
else{
	echo "notequal <br>";
}



switch($b){

	case 1:
		echo "one";
	case 2:
		echo "two";
	default:
		echo "string";
}



?>