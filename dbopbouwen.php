
<?php
// require_once("db_config.php");


// $query =  "  INSERT INTO gebruiker (id, naam, email, wachtwoord)
//              VALUES (NULL, 'evert', 'ever@ho.nl', 'tukje12')
//           ";

// if ($db_connection->exec($query)) {
//     echo "insert success!";
// } else {
//     echo "failed!";
// }

// $db_connection = null;

//query om alle heroes te krijgen

//api key van superheroes database
// $apiKey = "2918698538154268";
// // url inclusief de api key
// $url = "https://superheroapi.com/api/$apiKey/";


// for ($i=2; $i < 732 ; $i++) { 
    
//     echo "<h1>" .$i ."</h1>";
//       $json = file_get_contents($url . $i);
//       $array = json_decode($json, true);
//       echo "name: " .$name = $array['name'];
//       echo "<br>";
//       echo "image: " .$image = $array['image']['url'];
//       echo "<br>";
//       echo "strength: " .$strength = $array['powerstats']['strength'];
//       echo "<br>";
//       echo "intelligence " .$intelligence = $array['powerstats']['intelligence'];
//       echo "<br>";
//       echo "speed: " .$speed = $array['powerstats']['speed'];
//       echo "<br>";
//       echo "durability: " .$durability = $array['powerstats']['durability'];
//       echo "<br>";
//       echo "power: " .$power = $array['powerstats']['power'];
//       echo "<br>";
//       echo "combat: " .$combat = $array['powerstats']['combat'];

    
      
      
//       $query =  "  INSERT INTO superhero (id, naam, foto, combat, durab, pwr, speed, strength, intelligence)
//                    VALUES (NULL, '$name', '$image', '$combat', '$durability', '$power', '$speed', '$strength', '$intelligence')
//                 ";
      
//       if ($db_connection->exec($query)) {
//           echo "insert success!";
//       } else {
//           echo "failed!";
//       }
      
      
      
      
      
       


//     }
//  





// require_once("db_config.php");

// $query = " SELECT * FROM superhero";

// if ($results = $db_connection->query($query)) {
//     foreach ($results as $result) {

//         if ($result['durab'] == 0){
//             $id = $result['id'];
//             $pwr =random_int(1,100);

//             $query = "UPDATE superhero
//                       SET durab = $pwr
//                       WHERE id = $id
//                       ";


//         if ($db_connection->exec($query)) {
//             echo "Updated";
//         } else {
//             echo "failed to update";
//         }
//             echo $result['naam'] . "no points";
//             echo "<br>";
//         }else {
//             echo $result['naam'];
//             echo "<br>";
//         }

        
//     }
// } else {
//     echo  "no results";
// }



$db_connection = null;


require_once("db_config.php");

$query = " SELECT * FROM superhero";

if ($results = $db_connection->query($query)) {
    $count = 0;
    foreach ($results as $result) {

        
        $img = $result['foto'];
        $url = $img;
        $arraytje = get_headers($url, 1);

    

        if ($arraytje[0] == "HTTP/1.1 404 Not Found"){
           echo "NOT FOUND: " . $url . " " .  $result['naam'];
           echo "<br>";
           $count++;

       }

    }

        echo $count;

}




$db_connection = null;







?>


