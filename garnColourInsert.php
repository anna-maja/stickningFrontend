<?php

include 'connect.php';

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST['garn'])) {
    $garn = $_POST['garn']; // nyckelvärdet för namninmatningen
}

if (isset($_POST['färg'])) {
    $färg = $_POST['färg']; // nyckelvärdet för namninmatningen
}

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// detta förbereder sql-satsen
$sql = 
    "INSERT INTO garn_has_colour VALUES ('','$garn', '$färg')";

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
