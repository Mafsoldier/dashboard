<?php 

require_once("../db_config.php");
require("../superHero.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>


<body>

 <div class="containerheader">

    <div class="headeritem1">
        <p> This is the header</p>
    </div>
    <div class="headeritem2">
        <p> This is the header</p>
    </div>
    <div class="headeritem3">
        <p> This is the header</p>
    </div>


    

</div>











<div class="containercontent">

    <div class="item1">

        
    </div>


    <div class="heroName1">

    </div>

    <div class= "heroName2">

    </div>

    <div class="scoreCounter">

    </div>

            
    <div class="heroName1">
        <h1>

            <!-- call superhero name 1 -->
           <?php 
            $heroId = getSuperHeroId();
            echo   getSuperHeroName($heroId);
            ?>

        </h1>    
    </div>

    <div class="imageHero">

            <!-- call superhero image 1 -->
            <img src= <?php echo GetSuperHeroImage($heroId); ?> alt="Player 1">

    </div>

    <div class="itemVS">

            <p> VS</p>

    </div>  

    <div class="imageHero2">
        <h1>

            <!-- call superhero name 2 -->
           <?php 
            $heroId2 = getSuperHeroId();
            echo getSuperHeroName($heroId2);
            
            ?>
        </h1>     
    </div>
    
    <div class="itemPlayer2">

            <!-- call superhero image 2 -->
            <img src=<?php echo GetSuperHeroImage($heroId2); ?> alt="Player 2">

    </div>

    <div class="item5">

        

    </div>  

</div>
















<footer class="footer"> 

<p> This is the footer page</p>

</footer>


    
</body>





</html>