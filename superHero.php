<?php

$apiKey = "2918698538154268";
$url = "https://superheroapi.com/api/$apiKey/";
$json = file_get_contents($url);
$array = json_decode($json, true);

  function getVarDump(){

    echo "<pre>";
    var_dump($array); 
  }
  
  function getSuperHero($apiKey,$url){
    
    $min = 1;
    $max = 720;
    $number = rand($min, $max);
    $json = file_get_contents($url . $number);
    $array = json_decode($json, true);
    $name = $array['name'];
    $imageJson = file_get_contents($url.$number.'/image');
    $imageDecode = json_decode($imageJson, true);
    $image = $imageDecode['url'];
    echo $image;

  }
 

?>

<!-- ["powerstats"]=>
  array(6) {
    ["intelligence"]=>
    string(4) "null"
    ["strength"]=>
    string(2) "56"
    ["speed"]=>
    string(4) "null"
    ["durability"]=>
    string(4) "null"
    ["power"]=>
    string(4) "null"
    ["combat"]=>
    string(4) "null" -->