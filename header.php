<?php
    define("PAGE_INDEX", "Anna-Majas stickning");  /* ändrar titeln i fliken. */
    define("PAGE_GARN", "Samtliga garner");
    define("PAGE_COLOUR", "Samtliga färger");
    define("PAGE_GARNCOLOUR", "Garner och färger");
    define("PAGE_KATEGORI", "Samtliga kategorier");
    define("PAGE_ITEM", "Samtliga modelltyper");
    define("PAGE_MOTTAGARE", "Samtliga mottagare");
    define("PAGE_ALSTER", "Stickalster, all info"); 
?>

<!doctype html>
<html lang="sv">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- Egen CSS -->
        <link rel="stylesheet" href="style.css">

        <link rel="shortcut icon" href="bilder/flikGarn.png" />
        <title><?=PAGE_TITLE?></title>
    </head>
  <?php
    //visa varningar och felmeddelanden
    ini_set("display_errors", 1);
    ?>
    <body>

    <!-- Kopplar upp mig mot databasen via connect.php -->
    <?php
        require_once('connect.php');
    ?>

