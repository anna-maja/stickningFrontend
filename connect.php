<?php

// script för att logga in i databasen 
// denna fil är direkt omsparad från modul2/videobutik/connect.php 

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "stickning"; // obs skiftkänsligt!!! EXAKT samma namn!

$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName); 

// kontroll av fel i systemet. 
if (!$connection) {
    echo "Fel <br>" . mysqli_connect_error(); // visar vilken typ av fel det är.
    exit;   
}

// denna sats måste ligga längst ner
mysqli_set_charset($connection, "utf8"); //säkerställer att vi kan hantera svenska tecken. 
?>