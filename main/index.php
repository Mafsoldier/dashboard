<?php 
    require("../superHero.php");

    // De functies aanroepen die we nodig hebben
    $superHeroRight = getRandomSuperHero();
    $superHeroLeft = getRandomSuperHero();
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

    <div class="containerHeader">
        <div class="headeritemLeft">
            <p> This is the left header</p>
        </div>
        <div class="headeritemMiddle">
            <p> This is the middle header</p>
        </div>
        <div class="headeritemRight">
            <p> This is the right header</p>
        </div>
    </div>

        <!-- 
        //foreach maken en flexbox toevoegen.  -->

    <div class="containercontent">

        <!-- //loopje foreach maken en de html hier in doen en de heroes. -->
            <?php $heroes = init();?>
                
        
        <div class="heroBox itemContainerContent">
            <div class="itemHeroBox">
                <h1>
                        <!-- call superhero name 1 -->
                    <?php 
                        echo $superHeroLeft['name']; 
                    ?>
                </h1> 
            </div> 

            <div class="itemHeroBox">
                <!-- call superhero image 1 -->
                <img class="img" src= <?php echo $superHeroLeft['image']; ?> alt="Player 1">
            </div>
        </div> 
        
        <div class="heroBox itemContainerContent">    
            <div class="itemHeroBox">
                <h1>
                        <!-- call superhero name 2 -->
                    <?php 
                        echo $superHeroRight['name'];  
                    ?>
                </h1>     
            </div>

            <div class="itemHeroBox">
                <!-- call superhero image 2 -->
                <img class="img" src=<?php echo $superHeroRight['image']; ?> alt="Player 2">
            </div>
        </div>
    </div>
        

<footer class="containerFooter"> 
        <div>
            <p> This is the footer page</p>
        </div>
</footer>


    
</body>





</html>