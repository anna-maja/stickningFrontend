
<?php
    define ("PAGE_TITLE", "Anna-Majas stickning - modeller");
    include 'header.php';
?>

<header class="header text-center">
    <div class="container">
    <h1 class="text-uppercase mb-0"><?=PAGE_ITEM?></h1>
    <hr>
    </div>
</header>

<?php
    include 'navigation.php';
?>
<?php
//detta formulerar frågan == vad som skall visas
$query =
"SELECT modellTyp, Kategori_namn 
FROM `item`";

// detta exekverar == kör satsen och hämtar värdena
$table = mysqli_query($connection,$query)
or die(mysqli_error($connection));
?>

<!-- Startar tabellen, med format från bootstrap -->
<table class="table">

    <!-- Första raden == rubrikerna i kolumnerna. -->
    <tr style="background-color:gainsboro"> 
    <th>Kategori</th> 
    <th>Modelltyp</th>     
    </tr>

<!-- Startar while == det som lägger in värdena i kolumnerna. -->
    <?php while($row = $table->fetch_assoc()): ?>
        <tr>
        <td><?=$row['Kategori_namn'] ?></td>
        <td><?=$row['modellTyp'] ?> </td>
        </tr>
    <?php endwhile?>
</table>
