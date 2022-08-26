<?php
$city_name = 'Banepa';
$api_key = 'a9b8ea685a42445686534018222508';

$api_url = 'http://api.weatherapi.com/v1/forecast.json?key='.$api_key.'&q='.$city_name.'&aqi=yes&alerts=yes';

$weather_data = json_decode(file_get_contents($api_url), true);
echo "<pre>";
print_r($weather_data);
?>
