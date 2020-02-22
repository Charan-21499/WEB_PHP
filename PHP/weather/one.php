<?php

$api_url = 'https://content.api.nytimes.com/svc/weather/v2/current-and-seven-day-forecast.json';

$data_json = file_get_contents($api_url);

$data = json_decode($data_json);

$current = $data->results->current[0];

$date = substr($current->date,8,2);

switch(substr($current->date,5,2))
{
    case 01:
        $month='january';
    break;
    case 02:
        $month = 'Febuary';
        break;
    case 03:
        $month = 'march';
    break;
}

$city = $current->city;

$weather = strtolower($current->phrase);

if ($weather == 'clear')
{
    $weather = $weather." "."clouds";
}

$country = $current->country;
$year = (substr($current->date,0,4));

$url = $current->image;

?>


<link rel="stylesheet" type="text/css" href="one.css">
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-lg-8 grid-margin stretch-card">
                <!--weather card-->
                <div class="card card-weather">
                    <div class="card-body">
                        <div class="weather-date-location">
                            <h3><?php echo "<img src='$url'>";?></h3>
                                <h2 class="text-gray"> <span class="weather-date"><? echo $date." ".$month.","." ".$year ;?></span> <span class="weather-location"><? echo " ".$city.","." ".$country ;?></span> </h2>
                        </div>
                        <div class="weather-data d-flex">
                            <div class="mr-auto">
                                <h4 class="display-3"><? echo $current->temp ;?><span class="symbol">°</span>F</h4>
                                <h4> <? echo $weather ; ?> </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--weather card ends-->
            </div>
        </div>
    </div>
</div>