<?php
	
	for($a=0;$a<10;$a++)
	{
		echo $a."<br>";
	}




	$a2 = array(
				'one' => 1,
				'two' => 2222);


	echo "<div style='color:green;font-size:50px'>";
	foreach($a2 as $psotion => $value)
	{
		echo $psotion." => ".$value."<br>";

	}
	echo "</div>";

	$a=1;

	while($a<10)
	{
		echo $a."<br>";
		$a+=1;
	}
?>