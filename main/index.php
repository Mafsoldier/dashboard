<?php 
    require("../superHero.php");
    session_start();

    if(isset($_SESSION['whoWins'])){

    // De functies aanroepen die we nodig hebben
    $superheroes = init();
    $result = whoWins($superheroes);
    $_SESSION['result'] = $result;
}else {

    $_SESSION['pcWins'] = 0;
    $_SESSION['playerWins'] = 0;
    $_SESSION['whoWins'] = " ";
    $superheroes = init();
    $result = whoWins($superheroes);
    $_SESSION['result'] = $result;

}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Superheroes</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
        
</head>

<body>

    <div class="containerHeader">
    <div class="headerItem">
            <a href="../login.php" class="login"> Login </a>
        </div>
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
        
        <form class="heroBox" action="../process.php" method="post">  
            <div class="itemHeroBox">
                <input class="button" type="submit" value="Ik kies <?php echo $superHero['naam'];?>"> 
            </div> 
            <div class="itemHeroBox">
                <input type="hidden" name='value'; value= <?php echo $count; ?>>  
                <input type="hidden" name='winner'; value= <?php echo $result; ?>> 
                <img class="img" src= <?php echo $superHero['foto']; ?> alt="No image">  </img> 
                <?php $_SESSION['firstHeroUrl'] = $superHero['foto']; ?>   
            </div>     
        </form> 
        
        <form action='../process.php' method='post'> 
            <div class="itemHeroBox whoWin"> 
                <input type="hidden" name='value' value='reset'> 
                <input class="button" type="submit" value="Reset">
                <h1> <?php echo $_SESSION['whoWins']; ?> </h1>  
            </div>
        </form>

        <?php
            }else { 
        ?>
            <form class="heroBox" action="../process.php" method="post">  
                <!-- <div class="heroBox itemContainerContent"> -->
                <div class="itemHeroBox">
                    <input class="button" type="submit" value="Ik kies <?php echo $superHero['naam'];?>"> 
                </div> 
                <div class="itemHeroBox">
                                <!--call superhero image and make it a button to submit-->
                    <input type="hidden" name='value'; value= <?php echo $count; ?>>  
                    <input type="hidden" name='winner'; value= <?php echo $result; ?>> 
                    <img class="img" src= <?php echo $superHero['foto']; ?> alt="No image">  </img> 
                    <?php $_SESSION['secondHeroUrl'] = $superHero['foto']; ?>    
                </div>     
   
            </form> 

        <?php  
            }

         };
         
        ?>
    </div>

</body>
</html>