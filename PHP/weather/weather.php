<?php

$api_url = 'https://content.api.nytimes.com/svc/weather/v2/current-and-seven-day-forecast.json';

$data_json = file_get_contents($api_url);

echo "<br><br><br>";

$data = json_decode($data_json);


$current = $data->results->current[0];

var_dump($current);

echo "<br><br><br>";

echo $current->date;

echo "<br><br><br>";

$trim = substr($current->date,5,2);

echo $trim;


switch(substr($current->date,5,2))
{
    case '01':
        $month='january';
    break;
    case '02':
        $month = 'Febuary';
        break;
    case '03':
        $month = 'march';
    break;
}

echo "<br><br><br>";

$year = (substr($current->date,0,4));
echo $month;

$city = $current->city;
echo $year."<br><br>".$city;

$city = $current->city;

$weather = strtolower($current->phrase);

echo "<br><br>".$weather;


$country = $current->country;

echo "<br><br>".$country;

$url = $current->image;

echo $url;


?>
	