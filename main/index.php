<?php 
    require("../superHero.php");
    
    // De functies aanroepen die we nodig hebben
    $superheroes = init();
    $result = whoWins($superheroes);

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "form submitted!";
        var_dump($_POST);
        if ($_POST['value'] == 1) {
            echo 'left';
        }else {
            echo 'right';
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

    
    <div class="containercontent">
   
        <?php 
        $count = 0;
        foreach($superheroes as $superHero) { 
            $count++;
    
        ?>
        
        <form class="heroBox itemContainerContent" action="#" method="post">  
            <!-- <div class="heroBox itemContainerContent"> -->
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
                    <input type="hidden" name='value'; value= <?php echo $count; ?>>        
                    <input type="image" class="img" src= <?php echo $superHero['image']; ?> alt="No image">
                </div>
            <!-- </div> -->
        </form> 
        <?php  }; ?>
    </div>
    

<footer class="containerFooter"> 
        <div>
        <?php echo $result; ?>
            <p> This is the footer page</p>
        </div>
</footer>

</body>
</html>