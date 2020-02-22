<?php

//var_dump($_FILES);


$filename = $_FILES["upload"]["name"];
echo $filename."<br>";

$temp_location = $_FILES["upload"]["tmp_name"];
move_uploaded_file($temp_location,''.$filename);

?>