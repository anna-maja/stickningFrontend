<?php

require_once('connect.php');

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST['nameManuf'])) {
    $nameManuf = $_POST['nameManuf']; // nyckelvärdet för namninmatningen
}

if (isset($_POST['material'])) {
    $material = $_POST['material']; // nyckelvärdet för namninmatningen
}

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// detta förbereder sql-satsen
$sql = 
    "INSERT INTO garn VALUES ('','$nameManuf', '$material')";

// exekverar sql-satsen = funktionen körs med connection coh variabeln som innehåller insert-satsen
// or die == visar felmeddelande och avbryter kodkörningen.
mysqli_query($connection, $sql) 
or 
die(mysqli_error($connection)); 
echo "$nameManuf och $material har nu lagts till i databasen. ";

include 'garnView.php';
// Gå tillbaka till garnsidan, filen garn.php
// header('Location: garn.php');

?>