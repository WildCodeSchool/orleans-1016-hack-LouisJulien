<?php

foreach ($_POST as $key => $value){
    $post[$key] = trim(htmlentities($value));
}

$ville = $post['search'];


$query_weather = "http://api.openweathermap.org/data/2.5/weather?q='$ville'&APPID=aaf77036d9252af1eb6e40d782a49bf0";
$file_weather = file_get_contents($query_weather);
$decode = json_decode($file_weather, true);


$weather_type = $decode['weather'][0]['main'];