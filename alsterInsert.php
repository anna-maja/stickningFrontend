<?php

    include 'connect.php';

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";


    if (isset($_POST['namn'])) {
        $mottagareID = $_POST['namn']; // nyckelvärdet för namninmatningen
    }
    if (isset($_POST['modellTyp'])) {
        $itemID = $_POST['modellTyp']; // nyckelvärdet för namninmatningen
    }
        if (isset($_POST['teknik'])) {
        $teknik = $_POST['teknik']; // nyckelvärdet för namninmatningen
    }
    if (isset($_POST['feature'])) {
        $feature = $_POST['feature']; // nyckelvärdet för namninmatningen
    }
    if (isset($_POST['sticka'])) {
        $sticka = $_POST['sticka']; // nyckelvärdet för namninmatningen
    }
    if (isset($_POST['pris'])) {
        $pris = $_POST['pris']; // nyckelvärdet för namninmatningen
    }
    if (isset($_POST['datumFinish'])) {
        $datumFinish = $_POST['datumFinish']; // nyckelvärdet för namninmatningen
    }
    if (isset($_POST['kommentarer'])) {
        $kommentarer = $_POST['kommentarer']; // nyckelvärdet för namninmatningen
    }

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // detta förbereder sql-satsen
    $sql = 
        "INSERT INTO 
        alster (Mottagare_ID, Item_ID, teknik, feature, sticka, pris, datumFinish, kommentarer)
        VALUES ('$mottagareID', '$itemID', '$teknik', '$feature', '$sticka', '$pris', '$datumFinish', '$kommentarer')";
   echo $sql;
     
    // exekverar sql-satsen = funktionen körs med connection coh variabeln som innehåller insert-satsen
    // or die == visar felmeddelande och avbryter kodkörningen.
    mysqli_query($connection, $sql) 
    or 
    die(mysqli_error($connection)); 

    // Gå tillbaka till update
    header('Location: update.php');
?>
