<!-- Uppkopplad mot databasen med connect.php i header. -->

<?php
define ("PAGE_TITLE", "Alster");
include 'header.php';
?>

<header class="header text-center">
    <div class="container">
    <h1 class="text-uppercase mb-0"><?=PAGE_ALSTER?></h1>
    <hr>
    </div>
</header>

<?php
include 'navigation.php';
?>


<?php
//detta formulerar frågan == vad som skall visas
$query =
"SELECT * FROM 'mottagare-modell-garn-färg'";

// detta exekverar == kör satsen och hämtar värdena
$table = mysqli_query($connection,$query)
or die(mysqli_error($connection));
?>

<!-- Startar tabellen, med format från bootstrap -->
<table class="table">
namn modelltyp garn färg
    <!-- Första raden == rubrikerna i kolumnerna. -->
    <tr style="background-color:gainsboro"> 
    <th>Mottagare</th> 
    <th>Modelltyp</th>  
    <th>Garn</th>      
    <th>Färg</th>      
    </tr>

<!-- Startar while == det som lägger in värdena i kolumnerna. -->
    <?php while($row = $table->fetch_assoc()): ?>
    <tr>
    <td><?=$row[''] ?></td>
    <td><?=$row['nameManuf'] ?> </td>
    <td><?=$row['material'] ?> </td>
    
    <td>
    <?php endwhile?>
</table>