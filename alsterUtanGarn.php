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
"SELECT a.ID, m.namn, i.modellTyp, a.inclColour 
FROM mottagare AS m, item AS i, alster AS a 
WHERE a.Mottagare_ID = m.ID AND a.Item_ID = i.ID
";

// detta exekverar == kör satsen och hämtar värdena
$table = mysqli_query($connection,$query)
or die(mysqli_error($connection));
?>

<!-- Startar tabellen, med format från bootstrap -->
<p>Efter knappklick -> knapp ersätts av fält "har garn/färg".</p>
<p>Knappklick -> inclGC sätts till 1.</p>
<table class="table">

    <!-- Första raden == rubrikerna i kolumnerna. -->
    <tr style="background-color:gainsboro"> 
    
    <th>Alster-id</th>   
    <th>Mottagare</th> 
    <th>Modelltyp</th>   
    <th>Garn/färg tillagd? </th>   
    </tr>

<!-- Startar while == det som lägger in värdena i kolumnerna. -->
    <?php while($row = $table->fetch_assoc()): ?>
    <tr>
    <td><?=$row['ID']?></td>
    <td><?=$row['namn']?></td>
    <td><?=$row['modellTyp']?></td>
    <td><?=$row['inclColour']?></td>
    <td>
    
        <form action= 'alsterInclColourUpdate.php' method='post'>
            <input type='hidden' name='ID' value="<?php echo $row['ID'] ;?>">
            <input type='hidden' name='namn' value="<?=$row['namn']?>">
            <input type= 'hidden' name='modellTyp' value="<?=$row['modellTyp']?>">

            <input type='submit' value='Garn/färg är färdigt' class="btn btn-outline-info">
        </form>
    
    </td>
    
    <?php endwhile?>
</table>