<?php

//api key van superheroes database
$apiKey = "2918698538154268";
// url inclusief de api key
$url = "https://superheroapi.com/api/$apiKey/";

// deze functie roept alle functies aan
  function init(){
    return [
      'superHeroLeft' => getRandomSuperHero(),
      'superHeroRight' => getRandomSuperHero(),
    ];
  }


  // snelle check om te kijken wat er in de array zit die we terug krijgen
  function getVarDump(){

    echo "<pre>";
    var_dump($array); 
  }


  // maakt een random getal die het id van de superhero moet voorstellen. database gaat tot 731 superheroes en vanaf 1.
  function getRandomSuperHeroId(){
    
    $min = 1;
    $max = 731;
    $heroId = rand($min, $max);
    return $heroId;
  }

    // vraag de naam van de superhero op
  function getRandomSuperHero(){
    
      $heroId = getRandomSuperHeroId();
      global $url;
      $json = file_get_contents($url . $heroId);
      $array = json_decode($json, true);
      $name = $array['name'];
      $image = $array['image']['url'];

            //zo return je een array... 
      return [
        'name' => $name,
        'image' => $image,
        'heroId' => $heroId,
      ];
  }



?>
