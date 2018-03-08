<?php
    define ("PAGE_TITLE", "Stickalster - ALLT");
    include 'header.php';
?>

<header class="header text-center">
    <div class="container">
    <h1 class="text-uppercase mb-0"><?=PAGE_ALSTEREXT?></h1>
    <hr>
    </div>
</header>

<?php
    include 'navigation.php';
?>
<?php
//detta formulerar frågan == vad som skall visas
$query =
"SELECT *
FROM alster";



// detta exekverar == kör satsen och hämtar värdena
$table = mysqli_query($connection,$query)
or die(mysqli_error($connection));
?>

<!-- Startar tabellen, med format från bootstrap -->
<table class="table">

    <!-- Första raden == rubrikerna i kolumnerna. -->

    <tr style="background-color:gainsboro"> 
    <th>Alster-ID</th>      
    <th>Mottagare-ID</th>      
    <th>Modelltyp-ID</th>      
    <th>Teknik</th>      
    <th>Sädrag</th>      
    <th>Sticka</th>      
    <th>Pris</th>      
    <th>Avslutad</th>      
    <th>Kommentarer</th>      
    </tr>

<!-- Startar while == det som lägger in värdena i kolumnerna. -->

    <?php while($row = $table->fetch_assoc()): ?>
    <tr>
    <td><?=$row['ID'] ?></td>
    <td><?=$row['Mottagare_ID'] ?></td>
    <td><?=$row['Item_ID'] ?></td>
    <td><?=$row['teknik'] ?></td>
    <td><?=$row['feature'] ?></td>
    <td><?=$row['sticka'] ?></td>
    <td><?=$row['pris'] ?></td>
    <td><?=$row['datumFinish'] ?></td>
    <td><?=$row['kommentarer'] ?></td>
    </tr>
    
    <?php endwhile?>
</table>
