<?php





$strength = 1;
$power = 2;
$intelligence = 3;
$speed = 4;
$durability = 5;
$combat = "draak";

function overallPower($strength, $intelligence, $speed, $durability, $power, $combat) {
    $sum = 0;
    $arguments = func_get_args();
    echo "The ammount of input is: " . count($arguments);
    
    foreach($arguments as $argument){
       
    
      if (is_integer($argument)){
        echo "<br>";
        echo $argument . " is an int";
        $sum += $argument;
      }else {
        echo "<br>";
        echo $argument . " is not an int";
        $sum++;
      }
    }
    return $sum;
}

$sum = overallPower($strength, $intelligence, $speed, $durability, $power, $combat);
echo "<br>";
echo "result = " . $sum;

?>