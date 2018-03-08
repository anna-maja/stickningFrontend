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

<?php
//detta formulerar frågan == vad som skall visas
$query =
"SELECT ID, nameManuf, material
FROM garn 
ORDER BY ID ASC";

// detta exekverar == kör satsen och hämtar värdena
$table = mysqli_query($connection,$query)
or die(mysqli_error($connection));
?>

<!-- Startar tabellen, med format från bootstrap -->
<table class="table">

    <!-- Första raden == rubrikerna i kolumnerna. -->
    <tr style="background-color:gainsboro"> 
    <th>Garnnummer</th> 
    <th>Namn, tillverkare</th>  
    <th>Material</th>      
    </tr>

<!-- Startar while == det som lägger in värdena i kolumnerna. -->
    <?php while($row = $table->fetch_assoc()): ?>
    <tr>
    <td><?=$row['ID'] ?></td>
    <td><?=$row['nameManuf'] ?> </td>
    <td><?=$row['material'] ?> </td>
    
    <td>
    <?php endwhile?>
</table>
