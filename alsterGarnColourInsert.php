<?php

include 'connect.php';

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST['namn'])) {
    $namn = $_POST['namn']; // nyckelvärdet för namninmatningen
}
if (isset($_POST['modellTyp'])) {
    $modellTyp = $_POST['modellTyp']; // nyckelvärdet för namninmatningen
}
if (isset($_POST['nameManuf'])) {
    $nameManuf = $_POST['nameManuf']; // nyckelvärdet för namninmatningen
}
if (isset($_POST['fargNamn'])) {
    $fargNamn = $_POST['fargNamn']; // nyckelvärdet för namninmatningen
}
if (isset($_POST['alsterId'])) {
    $alsterId = $_POST['alsterId']; // nyckelvärdet för namninmatningen
}
if (isset($_POST['gcID'])) {
    $gcID = $_POST['gcID']; // nyckelvärdet för namninmatningen
}



echo "<pre>";
print_r($_POST);
echo "</pre>";

// // detta förbereder sql-satsen
$sql = 
    "INSERT INTO alster_has_garn_has_colour
    VALUES ('', '$alsterId', '$gcID');";

    // echo $sql;

// exekverar sql-satsen = funktionen körs med connection coh variabeln som innehåller insert-satsen
// or die == visar felmeddelande och avbryter kodkörningen.
mysqli_query($connection, $sql) 
or 
die(mysqli_error($connection)); 
// echo "$nameManuf och $material har nu lagts till i databasen. ";

// // include 'garnView.php';
// // Gå tillbaka till garnsidan, filen garn.php
header('Location: update.php');
?>
