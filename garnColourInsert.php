<!-- Uppkopplad mot databasen med connect.php i header. -->

<?php
define ("PAGE_TITLE", "Garn / färg");
include 'header.php';
?>

<header class="header text-center">
    <div class="container">
    <h1 class="text-uppercase mb-0"><?=PAGE_GARNCOLOUR?></h1>
    <hr>
    </div>
</header>

<?php
include 'navigation.php';
?>

<?php 
include 'garnColourView.php';
?>
