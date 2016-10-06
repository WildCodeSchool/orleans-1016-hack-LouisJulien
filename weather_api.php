<?php

foreach ($_POST as $key => $value){
    $post[$key] = trim(htmlentities($value));
}

$titre = $post['search'];


$query_weather = "http://api.openweathermap.org/data/2.5/weather?q='$titre'&APPID=aaf77036d9252af1eb6e40d782a49bf0";
$file_weather = file_get_contents($$query_weather);
$decode = json_decode($file_weather, true);


echo $decode['weather'][0]['main'];