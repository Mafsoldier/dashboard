<?php
session_start();
$firstHeroUrl = $_SESSION['firstHeroUrl'];
$secondHeroUrl = $_SESSION['secondHeroUrl'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superheroes</title>
    <link rel="stylesheet" href="main/style.css" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
</head>
<body class="backgrounderimage">


<div class="containercontent">

<div class="elementLeft">
<img src="<?php echo $firstHeroUrl ?>" alt="">
</div>

<div class="elementRight">
<img src="<?php echo $secondHeroUrl ?>" alt="">
</div>



</div>



    
</body>
</html>

<?php
header( "refresh:2;url=main/index.php" );
?>