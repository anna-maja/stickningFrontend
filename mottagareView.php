<!-- Uppkopplad mot databasen med connect.php i header. -->

<?php
define ("PAGE_TITLE", "Mottagare");
include 'header.php';
?>

<header class="header text-center">
    <div class="container">
    <h1 class="text-uppercase mb-0"><?=PAGE_MOTTAGARE?></h1>
    <hr>
    </div>
</header>

<?php
include 'navigation.php';
?>
<?php
//detta formulerar frågan == vad som skall visas
$query =
"SELECT ID, namn, kontakt
FROM mottagare";

// detta exekverar == kör satsen och hämtar värdena
$table = mysqli_query($connection,$query)
or die(mysqli_error($connection));
?>

<!-- Startar tabellen, med format från bootstrap -->
<table class="table">

    <!-- Första raden == rubrikerna i kolumnerna. -->
    <tr style="background-color:gainsboro"> 
    <th>ID</th> 
    <th>Namn</th>  
    <th>Kontaktsätt</th>      
    </tr>

<!-- Startar while == det som lägger in värdena i kolumnerna. -->
    <?php while($row = $table->fetch_assoc()): ?>
    <tr>
    <td><?=$row['ID'] ?></td>
    <td><?=$row['namn'] ?> </td>
    <td><?=$row['kontakt'] ?> </td>
    
    <td>
    <?php endwhile?>
</table>
