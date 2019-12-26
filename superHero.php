<?php

//api key van superheroes database
$apiKey = "2918698538154268";
// url inclusief de api key
$url = "https://superheroapi.com/api/$apiKey/";
//de api request omzetten naar een json file
$json = file_get_contents($url);
//de json file omzetten naar een array
$array = json_decode($json, true);


  // snelle check om te kijken wat er in de array zit die we terug krijgen
  function getVarDump(){

    echo "<pre>";
    var_dump($array); 
  }


  // maakt een random getal die het id van de superhero moet voorstellen. database gaat tot 731 superheroes en vanaf 1.
  function getSuperHeroId(){
    
    $min = 1;
    $max = 731;
    $heroId = rand($min, $max);
    return $heroId;
  }

    // vraag de naam van de superhero op
  function getSuperHeroName($heroId){
    
      global $url;
      $json = file_get_contents($url . $heroId);
      $array = json_decode($json, true);
      $name = $array['name'];
      return $name;
  }

     // vraag de url van het plaatje van de superhero op
    function GetSuperHeroImage($heroId)  {

      global $url;
      $imageJson = file_get_contents($url.$heroId.'/image');
      $imageDecode = json_decode($imageJson, true);
      $image = $imageDecode['url'];
      return $image;
    }

?>
>