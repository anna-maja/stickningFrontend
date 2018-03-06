<?php
    define ("PAGE_TITLE", "Anna-Majas stickning - startsida");
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
//detta formulerar frågan == vad som skall visas
$query =
"SELECT nameManuf as 'Garn, märke', material, fargNamn as 'Färg' 
FROM garn_has_colour, garn, colour 
WHERE garn_has_colour.Garn_ID = garn.ID 
AND garn_has_colour.colour = colour.fargNamn";

// detta exekverar == kör satsen och hämtar värdena
$table = mysqli_query($connection,$query)
or die(mysqli_error($connection));
?>

<!-- Startar tabellen, med format från bootstrap -->
<table class="table">

    <!-- Första raden == rubrikerna i kolumnerna. -->
    <tr style="background-color:gainsboro"> 
    <th>Garn, märke</th>      
    <th>Material</th>      
    <th>Färg</th>      
    </tr>

<!-- Startar while == det som lägger in värdena i kolumnerna. -->
    <?php while($row = $table->fetch_assoc()): ?>
    <tr>
    <td><?=$row['Garn, märke'] ?></td>
    <td><?=$row['material'] ?></td>
    <td><?=$row['Färg'] ?></td>
    </tr>
    
    <?php endwhile?>
</table>
