
<?php
//detta formulerar frågan == vad som skall visas
$query =
"SELECT ID, nameManuf, material
FROM garn";

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
