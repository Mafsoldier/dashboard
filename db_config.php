<?php

$db_host = 'localhost';
$db_name = 'dashboard';
$db_username = 'marc';
$db_password = 'bD4a8hif8ebnuoR6';

//datasourcename
$dsn = "mysql:host=$db_host; dbname=$db_name";


try{
    $db_connection = new PDO($dsn, $db_username, $db_password);
}catch (Exception $e) {
    echo "there was a failure - " . $e->getMessage();

}

?>

<!-- // close connection
//   $db_connection = Null; -->
