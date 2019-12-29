<?php 
    require("../superHero.php");


    // De functies aanroepen die we nodig hebben
    $superheroes = init();
    $result = whoWins($superheroes);

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if ($_POST['value'] == 1) {
            if($_POST['winner'] == 1){
                echo "you win! (you have chosen the left hero";
            }else {
                echo 'you lose! (you have chosen the left hero';
            }
            
        }elseif($_POST['value'] == 2) {
            if($_POST['winner'] == 2){
                echo "you win! (you have chosen the right hero";
            }else {
                echo 'you lose! (you have chosen the right hero';
            }
            
        }else {
             echo "it is a draw!";
            }
    }else {
        echo "no form submitted";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
        
</head>

<body>

    <div class="containerHeader">
        <div class="headerItem">
            <h1> WHO WINS? </h1>
        </div>

    </div>

    
    <div class="containercontent">
   
        <?php 
        $count = 0;
        foreach($superheroes as $superHero) { 
            $count++;
    
        ?>
        
        <form class="heroBox" action="#" method="post">  
            <!-- <div class="heroBox itemContainerContent"> -->
                <div class="itemHeroBox">
                <input class="button" type="submit" value="Ik kies <?php echo $superHero['name'];?>"> 
                </div> 
                <div class="itemHeroBox">
                            <!--call superhero image and make it a button to submit-->
                    <input type="hidden" name='value'; value= <?php echo $count; ?>>  
                    <input type="hidden" name='winner'; value= <?php echo $result; ?>> 
                    <img class="img" src= <?php echo $superHero['image']; ?> alt="No image">  </img>    
                </div>     
                <div class="itemHeroBox">    
                           
                </div>
        </form> 
        <?php  }; ?>
    </div>
    
    


</body>
</html>