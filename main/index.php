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


<!-- 
//foreach maken en flexbox toevoegen.  -->







<div class="containercontent">

    <div class="item1">

        
    </div>

    <div class="scoreCounter">

    </div>

        <!-- //loopje foreach maken en de html hier in doen en de heroes. -->
        <?php $heroes = init();?>
            
    <div class="heroNameLeft">
        <h1>
            <!-- call superhero name 1 -->
           <?php 
            $superHeroLeft = getRandomSuperHero();
            echo $superHeroLeft['name']; 
            ?>
        </h1>    
    </div>
    <div class="imageHeroLeft">
        <!-- call superhero image 1 -->
        <img src= <?php echo $superHeroLeft['image']; ?> alt="Player 1">
    </div>
    <div class="itemVS">
        <p> VS</p>
    </div>  
    <div class="HeroNameRight">
        <h1>
            <!-- call superhero name 2 -->
           <?php 
                $superHeroRight = getRandomSuperHero();
                echo $superHeroRight['name'];  
            ?>
        </h1>     
    </div>
    
    <div class="imageHeroRight">
        <!-- call superhero image 2 -->
        <img src=<?php echo $superHeroRight['image']; ?> alt="Player 2">
    </div>

    <div class="item5"></div>  

</div>












<footer class="footer"> 

<p> This is the footer page</p>

</footer>


    
</body>





</html>