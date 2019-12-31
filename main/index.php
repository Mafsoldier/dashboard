<?php 
    require("../superHero.php");


    // De functies aanroepen die we nodig hebben
    $superheroes = init();
    $result = whoWins($superheroes);
    $whoWins = '';
    
    session_start();

    $is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');
    
    if (!isset($_SESSION['playerWins']) || !isset($_SESSION['pcWins'])){
        $_SESSION['playerWins'] = 0;
        $_SESSION['pcWins'] = 0;
    }

   
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        if ($is_page_refreshed){

            $whoWins = " ";
            $_SESSION['playerWins'] = 0;
            $_SESSION['pcWins'] = 0;

            
        }elseif ($_POST['value'] == 'reset'){
            
            $whoWins = " ";
            $_SESSION['playerWins'] = 0;
            $_SESSION['pcWins'] = 0;

        }else {

        if ($_POST['value'] == 1) {
            if($_POST['winner'] == 1){
                $whoWins = "You've won!";
                $_SESSION['playerWins']++;
            }else {
                $whoWins = "You've lost!";
                $_SESSION['pcWins']++;
            }
            
        }elseif($_POST['value'] == 2) {
            if($_POST['winner'] == 2){
                $whoWins = "You've won!";
                $_SESSION['playerWins']++;
            
            }else {
                $whoWins = "You've lost!";
                $_SESSION['pcWins']++;
            }

        }else {
            $whoWins = "Wow! it was a draw!";
            }
    }
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
            <h1> You've lost: <?php echo $_SESSION['pcWins'];?> times! </h1>
        </div>
        <div class="headerItem">
            <h1> WHO WINS? </h1>
        </div>
        <div class="headerItem">
            <h1> You've won: <?php echo $_SESSION['playerWins'];?> times! </h1>
        </div>
        

    </div>

    
    <div class="containercontent">
   
        <?php 
        $count = 0;
        foreach($superheroes as $superHero) { 
            $count++;
            if ($count == 1){  
        ?>
        
        <form class="heroBox" action="#" method="post">  
            <div class="itemHeroBox">
                <input class="button" type="submit" value="Ik kies <?php echo $superHero['name'];?>"> 
            </div> 
            <div class="itemHeroBox">
                <input type="hidden" name='value'; value= <?php echo $count; ?>>  
                <input type="hidden" name='winner'; value= <?php echo $result; ?>> 
                <img class="img" src= <?php echo $superHero['image']; ?> alt="No image">  </img>    
            </div>     

        </form> 
        
        <form action='#' method='post'> 
            <div class="itemHeroBox whoWin"> 
                
                <input type="hidden" name='value' value='reset'> 
                <input class="button" type="submit" value="Reset">
                <h1> <?php echo $whoWins; ?> </h1>  
            </div>
        </form>

        <?php
            }else { 
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
   
            </form> 

        <?php  
            }

         };
        
        ?>
    </div>

</body>
</html>