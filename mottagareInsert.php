<?php

include 'connect.php';

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST['namn'])) {
    $namn = $_POST['namn']; // nyckelvärdet för namninmatningen
}
if (isset($_POST['kontakt'])) {
    $kontakt = $_POST['kontakt']; // nyckelvärdet för namninmatningen
}


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// detta förbereder sql-satsen
$sql = 
    "INSERT INTO mottagare VALUES ('', '$namn', '$kontakt')";
echo $sql;

// exekverar sql-satsen = funktionen körs med connection coh variabeln som innehåller insert-satsen
// or die == visar felmeddelande och avbryter kodkörningen.
mysqli_query($connection, $sql) 
or 
die(mysqli_error($connection)); 
// echo "$nameManuf och $material har nu lagts till i databasen. ";

// include 'garnView.php';
// Gå tillbaka till garnsidan, filen garn.php
header('Location: update.php');

?>