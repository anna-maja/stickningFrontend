
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
"SELECT m.namn as 'Mottagare', i.modellTyp as 'Modell', g.nameManuf AS 'Garn', 
c.fargNamn AS 'Färg', a.feature AS 'Särdrag', a.kommentarer as 'Kommentarer', 
a.pris AS 'Pris', a.datumFinish AS 'Avslutad ca'

FROM 
mottagare AS m, item AS i, garn AS g, colour AS c, alster AS a, alster_has_garn_has_colour AS agc, garn_has_colour AS ghc

WHERE 
a.Mottagare_ID = m.ID AND 
a.Item_ID = i.ID AND 
agc.Alster_ID = a.ID AND
agc.Garn_has_colour_ID = ghc.ID AND
ghc.Garn_ID = g.ID AND
ghc.fargNamn = c.fargNamn";

// detta exekverar == kör satsen och hämtar värdena
$table = mysqli_query($connection,$query)
or die(mysqli_error($connection));
?>

<!-- Startar tabellen, med format från bootstrap -->
<table class="table">

    <!-- Första raden == rubrikerna i kolumnerna. -->
    <!-- 'Mottagare', i.modellTyp as 'Modell', g.nameManuf AS 'Garn', 
c.fargNamn AS 'Färg', a.feature AS 'Särdrag', a.kommentarer as 'Kommentarer', 
a.pris AS 'Pris', a.datumFinish AS 'Avslutad ca' -->

    <tr style="background-color:gainsboro"> 
    <th>Mottagare</th>      
    <th>Modell</th>      
    <th>Garn</th>      
    <th>Färg</th>      
    <th>Sädrag</th>      
    <th>Kommentarer</th>      
    <th>Pris</th>      
    <th>Avslutad ca</th>        
    </tr>

<!-- Startar while == det som lägger in värdena i kolumnerna. -->

    <?php while($row = $table->fetch_assoc()): ?>
    <tr>
    <td><?=$row['Mottagare'] ?></td>
    <td><?=$row['Modell'] ?></td>
    <td><?=$row['Garn'] ?></td>
    <td><?=$row['Färg'] ?></td>
    <td><?=$row['Särdrag'] ?></td>
    <td><?=$row['Kommentarer'] ?></td>
    <td><?=$row['Pris'] ?></td>
    <td><?=$row['Avslutad ca'] ?></td>
    </tr>
    
    <?php endwhile?>
</table>
