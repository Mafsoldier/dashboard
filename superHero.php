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
      $strength = $array['powerstats']['strength'];
      $intelligence = $array['powerstats']['intelligence'];
      $speed = $array['powerstats']['speed'];
      $durability = $array['powerstats']['durability'];
      $power = $array['powerstats']['power'];
      $combat = $array['powerstats']['combat'];
      $overallPower = overallPower($strength, $intelligence, $speed, $durability, $power, $combat);
   
            //zo return je een array... 
      return [
        'name' => $name,
        'image' => $image,
        'heroId' => $heroId,
        'overallPower' => $overallPower,
      ];
  }

  function whoWins($superHeroes){

      $superHeroLeftPoints = $superHeroes['superHeroLeft']['name'];
      $superHeroRightPoints = $superHeroes['superHeroRight']['name'];

      // var_dump($superHeroes);

      if ($superHeroLeftPoints == $superHeroRightPoints){

          return $result = "0";
      }elseif ($superHeroLeftPoints > $superHeroRightPoints){

          return $result = "1";
      }else {
          return $result = "2";
      }

  }

function overallPower($strength, $intelligence, $speed, $durability, $power, $combat) {
  $sum = 0;
  $arguments = func_get_args();
  
  foreach($arguments as $argument){
     
    settype($argument, "integer");
    if (is_integer($argument)){
      $sum += $argument;
    }else {
      $sum++;
    }
  }
  return $sum;
}



?>
