
<?php
require_once("db_config.php");

// vraag de naam van de superhero op
function getRandomSuperHero(){
    global $db_connection;
    $id = random_int(1,700);
    $query = " SELECT * 
               FROM superhero
               WHERE id = $id
            ";

    if ($results = $db_connection->query($query)) {

        foreach ($results as $result) {

                $id = $result['id'];
                $name = $result['naam'];
                $foto = $result['foto'];
                $intelligence = $result['intelligence'];
                $speed = $result['speed'];
                $strength = $result[ 'strength'];
                $combat = $result['combat'];
                $durab = $result['durab'];
                $pwr = $result['pwr'];
                $overallPower = overallPower($strength, $intelligence, $speed, $durab, $pwr, $combat);

            return [

                'id'            => $id,
                'naam'          => $name,
                'foto'          => $foto,
                'intelligence'  => $intelligence,
                'speed'         => $speed,
                'strength'      => $strength,
                'combat'        => $combat,
                'durab'         => $durab,
                'pwr'           => $pwr,
                'overallPower'  => $overallPower,
            ];
            
        }
    }
}

// deze functie roept alle functies aan
function init(){
    return [
      'superHeroLeft' => getRandomSuperHero(),
      'superHeroRight' => getRandomSuperHero(),
    ];
  }


  function whoWins($superHeroes){

      $superHeroLeftPoints = $superHeroes['superHeroLeft']['overallPower'];
      $superHeroRightPoints = $superHeroes['superHeroRight']['overallPower'];

      if ($superHeroLeftPoints == $superHeroRightPoints){

          return $result = "0";
      }elseif ($superHeroLeftPoints > $superHeroRightPoints){

          return $result = "1";
      }else {
          return $result = "2";
      }

  }

function overallPower($strength, $intelligence, $speed, $durab, $pwr, $combat) {
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

function resetScores(){
  session_start();
  $_SESSION['playerWins'] = 0;
  $_SESSION['pcWins'] = 0;
  $_SESSION['whoWins'] = " ";
}

function pcWins(){
  $_SESSION['pcWins']++;
  return $whoWins = "You've lost!";
}

function playerWins(){
  $_SESSION['playerWins']++;
  return $whoWins = "You've won!";
}



?>
