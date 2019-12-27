<?php 
    require("../superHero.php");
    
    // De functies aanroepen die we nodig hebben
    $superheroes = init();
?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="superhero.ico"/>
</head>

<body>

    <div class="containerHeader">
        <div class="headerItem">
            <p> This is the left header</p>
        </div>
        <div class="headerItem">
            <p> This is the middle header</p>
        </div>
        <div class="headerItem">
            <p> This is the right header</p>
        </div>
    </div>

        <!-- 
        //foreach maken en flexbox toevoegen.  -->

    <form action="#" method="post">
    <div class="containercontent">

        <!-- //loopje foreach maken en de html hier in doen en de heroes. -->
            
        <?php foreach($superheroes as $superHero) { ?>

        <div class="heroBox itemContainerContent">
            <div class="itemHeroBox">
                <h1>
                        <!--call superhero name-->
                    <?php 
                        echo $superHero['name'];
                    ?>
                </h1> 
            </div> 
            <div class="itemHeroBox">
                        <!--call superhero image and make it a button to submit-->
                <input type="image" class="img" src= <?php echo $superHero['image']; ?> alt="No image" name=<?php echo $superHero['name']; ?> id=<?php echo $superHero['heroId']; ?>>
            </div>
        </div> 
        <?php }; ?>
    </div>
    </form>

<footer class="containerFooter"> 
        <div>
            <p> This is the footer page</p>
        </div>
</footer>


    
</body>





</html>