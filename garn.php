<!-- Kopplar upp mig mot databasen via connect.php som ligger i header -->

<?php
define ("PAGE_TITLE", "Garn");
include 'header.php';
?>

<header class="header text-center">
    <div class="container">
    <h1 class="text-uppercase mb-0"><?=PAGE_GARN?></h1>
    <hr>
    </div>
</header>

<?php
include 'navigation.php';
?>


    <!--metod = post == metoden som används för att skicka info -->
    <!--action = filen jag skickar info till -->
    <form action="garnInsert.php" method="post" class="form-inline">  <!--visar på samma rad -->
    <!--label = etikett som visar det inom >  < -->
    <!--Annars kan placeholder="Namn"/"Telefonnummer" användas -->
    <!-- MEN då syns "Namn" bara när fältet är tomt!!! -->
    <!--input = skrivfält -->
    <!-- for = den inre benämningen  -->
    <!-- required == anger att inmatning krävs. -->
    <label for="nameManuf">Namn, tillverkare</label> 
    <input type="text" id="nameManuf" class="form-control mx-2" name ="nameManuf" required>
    
    <label for="material">Material</label>
    <input type="text" id="material" class="form-control mx-2" name ="material" required>
    
    <button class="btn btn-outline-primary" type="submit">
        Lägg till
    </button>
</form>

</div> <!-- avslutar text-center -->
<?php
// include 'garnInsert.php';
?>

<?php
include 'garnView.php';
?>

