<!-- Kopplar upp mig mot databasen via connect.php som ligger i header -->

<?php
define ("PAGE_TITLE", "Färg");
include 'header.php';
?>

<header class="header text-center">
    <div class="container">
    <h1 class="text-uppercase mb-0"><?=PAGE_COLOUR?></h1>
    <hr>
    </div>
</header>

<?php
include 'navigation.php';
?>
<?php
include 'colourView.php';
?>