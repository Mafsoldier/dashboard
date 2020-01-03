<?php

include_once('superHero.php');

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    if ($_POST['value'] == 'reset'){
        $whoWins = resetScores();
        
    }else {
        if($_POST){
            if($_POST['value'] == $_SESSION['result']){
                $whoWins = "You've won!";
                $_SESSION['playerWins']++;
                $_SESSION['whoWins'] = "You've won!";
            }else{
                $whoWins = "You've lost!";
                $_SESSION['pcWins']++;
                $_SESSION['whoWins'] = "You've lost!";
            }
        }
    }
    header("Location: main/index.php"); 
}

